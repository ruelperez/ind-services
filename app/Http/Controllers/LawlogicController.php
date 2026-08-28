<?php

namespace App\Http\Controllers;

use App\Models\LawlogicLead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LawlogicController extends Controller
{
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), ['type' => 'required', 'first_name' => 'required', 'last_name' => 'required', 'phone' => 'required', 'email' => 'required|email', 'attorney' => 'required', 'benefit_status' => 'required', 'between_50_and_63' => 'required', 'work_history' => 'required', 'medical_condition' => 'required', 'address' => 'nullable', 'city' => 'nullable', 'state' => 'nullable|max:2', 'zip' => 'nullable', 'xxTrustedFormToken' => 'required', 'xxTrustedFormCertUrl' => 'required', 'xxTrustedFormPingUrl' => 'required', 'terms' => 'required']);
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()], 401);
        }
        $newCase = LawlogicLead::create(['key' => $request->key, 'code' => $request->code, 'type' => $request->type, 'first_name' => $request->first_name, 'last_name' => $request->last_name, 'phone' => $request->phone, 'email' => $request->email, 'address' => $request->address, 'city' => $request->city, 'state' => $request->state, 'zip' => $request->zip, 'attorney' => $request->attorney, 'benefit_status' => $request->benefit_status, 'between_50_and_63' => $request->between_50_and_63, 'work_history' => $request->work_history, 'medical_condition' => $request->medical_condition, 'ip_address' => $request->ip_address, 'sub_id2' => $request->sub_id2, 'special_route' => $request->special_route, 'xx_tf_token' => $request->xxTrustedFormToken, 'xx_tf_cert_url' => $request->xxTrustedFormCertUrl, 'xx_tf_ping_url' => $request->xxTrustedFormPingUrl,]);
        $case = LawlogicLead::find($newCase->id);
        $case->update(['unique_url' => md5($newCase->id)]);
        return response(['message' => 'Your case has been submitted. Our reply will be sent on your email. Thank you.'], 201);
    }
}
