<?php

namespace App\Http\Controllers;

use App\Models\LawlogicLead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class Certificate2Controller extends Controller
{
    public function claim(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'xx_tf_cert_url' => 'required'
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()], 401);
        }
        Log::info($request->xx_tf_cert_url);
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ])
            ->withBasicAuth(env('XX_TF_USERNAME'), env('XX_TF_PASSWORD'))
            ->post($request->xx_tf_cert_url);

        return response($response->json());
    }

    public function updateLawlogicStatus($status, Request $request){
        $validator = Validator::make($request->all(), [
            'share_url' => 'required',
            'id' => 'required'
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()], 401);
        }

        $case = LawlogicLead::find($request->id);
        $case->update([
            'share_url' => $request->share_url
        ]);

        return response(['message' => 'Status updated!'], 201);
    }

    public function updateStatus($status, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'share_url' => 'required',
            'id' => 'required'
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()], 401);
        }

        $case = LawlogicLead::find($request->id);
        $case->update([
            'share_url' => $request->share_url
        ]);

        return response(['message' => 'Status updated!'], 201);
    }
}
