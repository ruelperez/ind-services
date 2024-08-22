<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;
use App\Jobs\SendContactMessage;
class ContactController extends Controller
{
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()], 401);
        }

        // Dispatch job to send contact message in email
        SendContactMessage::dispatch([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message
        ]);

        return response(['message' => 'Thank you for reaching out to us! We appreciate your interest and will get back to you as soon as possible. Your message is important to us, and we strive to provide prompt and helpful assistance. If you have any urgent inquiries, please feel free to reach us via phone at 6784511436 Ext. 102. We look forward to assisting you!'], 201);
    }

    public function getAll()
    {
        $data = [];

        $data = Contact::all();

        return response(['data' => $data]);
    }
}
