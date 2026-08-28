<?php

namespace App\Http\Controllers;

use App\Models\CaseRecord;
use App\Models\DepoRecord;
use App\Models\LawlogicLead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index', ['title' => 'ITTS Services']);
    }
    public function LawlogicApiSubmit(Request $request)
    {
        $case = LawlogicLead::findOrFail($request->lawlogic_id);

        $payload = [
            'key' => 'd998222c-7a18-11f0-8b51-fa163eff53f0',
            'code' => 'SSDICalls',

            'first_name' => $case->first_name,
            'last_name' => $case->last_name,
            'phone' => preg_replace('/\D/', '', $case->phone),
            'email' => $case->email,

            'ip_address' => $case->ip_address,

            'attorney' => $case->attorney,
            'benefit_status' => $case->benefit_status,
            'between_50_and_63' => $case->between_50_and_63,
            'work_history' => $case->work_history,
            'medical_condition' => $case->medical_condition,

            'trusted_form_cert_url' => $case->xx_tf_cert_url,

            'sub_id2' => $case->sub_id2,
            'special_route' => $case->special_route,

            'address' => $case->address,
            'city' => $case->city,
            'state' => $case->state,
            'zip' => $case->zip,
        ];

        try {

            $response = Http::asForm()->post(
                'https://docs.emailagency.com/api/add-lead',
                $payload
            );

            $data = $response->json();

            Log::info('LawLogic SSDI Response:', $data);
            Log::info('LawLogic SSDI Payload:', $payload);

            $status = $data['status'] ?? false;
            $leadId = $data['lead_id'] ?? '0';
            $message = $data['message'] ?? 'Unknown response';

            $case->update([
                'api_status' => $status ? 1 : 0,
                'lead_id' => $leadId ?: '0',
            ]);

            return redirect()->back()->with([
                'campaign' => $case->type,
                'api_status' => $status ? 'ACCEPTED' : 'REJECTED',
                'api_lead_id' => $leadId ?: null,
                'api_message' => $message,
            ]);

        } catch (\Exception $e) {

            Log::error('LawLogic SSDI API ERROR: ' . $e->getMessage());

            $case->update([
                'api_status' => 0,
                'lead_id' => '0',
            ]);

            return redirect()->back()->with([
                'campaign' => $case->type,
                'api_status' => 'ERROR',
                'api_lead_id' => null,
                'api_message' => $e->getMessage(),
            ]);
        }
    }




    public function viewDepoCase($uniqueURL){
        $case = DepoRecord::where('unique_url', $uniqueURL)->first();
        if (!$case) {
            abort(404);
        }

        return view('pages.view-depo-case', ['title' => "Case #$case->id", 'case' => $case]);
    }

    public function viewLawlogicCase($uniqueURL){
        $case = LawlogicLead::where('unique_url', $uniqueURL)->first();
        if (!$case) {
            abort(404);
        }

        return view('pages.view-lawlogic-case', ['title' => "Case #$case->id", 'case' => $case]);
    }


    public function page($page)
    {
        $views = resource_path() . "/views/pages/$page.blade.php";
        if (file_exists($views)) {
            $title = Str::title($page);
            return view("pages.$page", ['title' => Str::replace('-', ' ', $title)]);
        } else {
            abort(404);
        }
    }

    public function services($page)
    {
        $views = resource_path() . "/views/pages/services/$page.blade.php";
        if (file_exists($views)) {
            $title = Str::title($page);
            return view("pages.services.$page", ['title' => $title]);
        } else {
            abort(404);
        }
    }

    public function massTort($page)
    {
        $views = resource_path() . "/views/pages/services/mass-tort/$page.blade.php";
        if (file_exists($views)) {
            $title = Str::title($page);
            if ($title == 'Cpap-Lawsuit') $title = 'CPAP Lawsuit';
            if ($title == 'Pfas-Lawsuit') $title = 'PFAS Lawsuit';
            return view("pages.services.mass-tort.$page", ['title' => Str::replace('-', ' ', $title)]);
        } else {
            abort(404);
        }
    }

    public function viewCase($uniqueURL)
    {
        $case = CaseRecord::where('unique_url', $uniqueURL)->first();
        if (!$case) {
            abort(404);
        }

        return view('pages.view-case', ['title' => "Case #$case->id", 'case' => $case]);
    }
}
