<?php

namespace App\Http\Controllers;

use App\Models\DepoRecord;
use Illuminate\Http\Request;
use App\Models\CaseRecord;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use ReCaptcha\ReCaptcha;
class CasesController extends Controller
{
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'call_time' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'zip_code' => 'required',
            'address' => 'required',
            'xxTrustedFormToken' => 'required',
            'xxTrustedFormCertUrl' => 'required',
            'xxTrustedFormPingUrl' => 'required',
            'terms' => 'required',
            'terms1' => 'required',
            'terms2' => 'required',
            'terms3' => 'required',
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()], 401);
        }

        $newCase = CaseRecord::create([
            'type' => $request->type,
            'call_time' => $request->call_time,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'email' => $request->email,
            'zip_code' => $request->zip_code,
            'address' => $request->address,
            'xx_tf_token' => $request->xxTrustedFormToken,
            'xx_tf_cert_url' => $request->xxTrustedFormCertUrl,
            'xx_tf_ping_url' => $request->xxTrustedFormPingUrl
        ]);

        $case = CaseRecord::find($newCase->id);
        $case->update(['unique_url' => md5($newCase->id)]);

        return response(['message' => 'Your case has been submitted. Our reply will be sent on your email. Thank you.'], 201);
    }

    public function create(Request $request)
    {
//        Log::info($request->xxTrustedFormToken);

        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'depo_provera_taken' => 'required',
            'depo_provera_use' => 'required',
            'diagnosis' => 'required',
            'attorney' => 'required',
            'injury' => 'required',
            'description' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => ['required', 'regex:/^\d{10,11}$/'],
            'email' => 'required',
            'zip_code' => 'required',
            'xxTrustedFormToken' => 'required',
            'xxTrustedFormCertUrl' => 'required',
            'xxTrustedFormPingUrl' => 'required',
            'terms' => 'required',
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()], 401);
        }
//        return response()->json(['status' => 'working']);
        try {
            $newCase = DepoRecord::create([
                'type' => $request->type,
                'depo_provera_taken'=> $request->depo_provera_taken,
                'depo_provera_use'=> $request->depo_provera_use,
                'diagnosis'=> $request->diagnosis,
                'attorney' => $request->attorney,
                'injury'=> $request->injury,
                'description' => $request->description,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'phone' => $request->phone,
                'email' => $request->email,
                'zip_code' => $request->zip_code,
                'user_ip'=> $request->ip(),
                'xx_tf_token' => $request->xxTrustedFormToken,
                'xx_tf_cert_url' => $request->xxTrustedFormCertUrl,
                'xx_tf_ping_url' => $request->xxTrustedFormPingUrl
            ]);

            $case = DepoRecord::find($newCase->id);
            $case->update(['unique_url' => md5($newCase->id)]);

            try {
                $response = Http::withHeaders([
                    'Authorization' => 'Bearer YOUR_API_TOKEN_HERE',
                    'Accept' => 'application/json',
                ])->post('https://api-vdi.luchtech.dev/api/submissions?form=depo-provera-lead-posts&team=its&user=f4b1f8e1-9663-4567-8912-077d070e4577&signature=7d468ecdd597893e5c73993561ac529cac3de4beb7e3fb93f6da0d2f2c10f594', [
                    "lead-first-name" => $request->firstname,
                    "lead-last-name" => $request->lastname,
                    "lead-email-address" => $request->email,
                    "lead-phone" => $request->phone,
                    "lead-zip-code" => $request->zip_code,
                    "case-depo-provera-taken" => $request->depo_provera_taken,
                    "case-depo-provera-use" => $request->depo_provera_use,
                    "case-injury" => $request->injury,
                    "case-diagnosis" => $request->diagnosis,
                    "case-description" => $request->description,
                    "case-attorney" => $request->attorney,
                    "lead-trusted-form-cert-id" => $request->xxTrustedFormToken,
                    "lead-ip-address" => $request->ip(),
                ]);


                Log::info('API Response:', $response->json()); // log full API response

                if ($response->successful()) {
                    $responseData = $response->json();
                    $case->api_status = 1;
                    $case->save();
                    if (!empty($responseData['data']['redirect_url'])) {
                        $case->has_redirect_url = 1;
                        return response()->json([
                            'success' => true,
                            'redirect_url' => $responseData['data']['redirect_url'], // ✅ send redirect URL to JS
                        ], 200);
                    }

                    return response()->json([
                        'success' => true,
                        'message' => 'Submission Completed.'
                    ], 200);
                } else {
                    return response()->json([
                        'success' => true,
                        'message' => 'Submission Completed.'
                    ], 200);
                }
            }catch (\Exception $e){
                Log::error('API Submission Error: ' . $e->getMessage(), [
                    'trace' => $e->getTraceAsString()
                ]);

                return response()->json([
                    'success' => true,
                    'message' => 'Submission Completed.'
                ], 200);
            }

        } catch (\Exception $e) {
            Log::error('Depo Submission Error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again.'
            ], 500);

        }
    }

    public function getAll()
    {
        $data = [];

        $data = CaseRecord::latest()->get();

        return response(['data' => $data]);
    }
}
