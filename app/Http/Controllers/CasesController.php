<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaseRecord;
use Illuminate\Support\Facades\Validator;

class CasesController extends Controller
{
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'is_attorney' => 'required',
            'description' => 'required',
            'is_hospitalized' => 'required',
            'date_injured' => 'required',
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
            'terms' => 'required'
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()], 401);
        }

        $newCase = CaseRecord::create([
            'type' => $request->type,
            'is_attorney' => $request->is_attorney,
            'description' => $request->description,
            'is_hospitalized' => $request->is_hospitalized,
            'date_injured' => $request->date_injured,
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

    public function getAll()
    {
        $data = [];

        $data = CaseRecord::latest()->get();

        return response(['data' => $data]);
    }
}
