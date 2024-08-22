<?php

namespace App\Http\Controllers;

use App\Models\CaseRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class CertificateController extends Controller
{
    public function claim(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'xx_tf_cert_url' => 'required'
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()], 401);
        }

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ])
            ->withBasicAuth(env('XX_TF_USERNAME'), env('XX_TF_PASSWORD'))
            ->post($request->xx_tf_cert_url);

        return response($response->json());
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

        $case = CaseRecord::find($request->id);
        $case->update([
            'share_url' => $request->share_url
        ]);

        return response(['message' => 'Status updated!'], 201);
    }
}
