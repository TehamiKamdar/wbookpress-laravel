<?php

namespace App\Http\Controllers;

use App\Mail\LeadsMail;
use App\Models\Leads;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LeadsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:150',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:50',
            'message' => 'nullable|string',
        ]);

        $agent = new Agent();

        $lead = Leads::create([
            'name'        => $request->name,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'message'     => $request->message,

            'ip_address'  => $request->ip(),
            'user_agent'  => $request->header('User-Agent'),
            'device_type' => $agent->isMobile() ? 'Mobile' : ($agent->isTablet() ? 'Tablet' : 'Desktop'),
            'browser'     => $agent->browser(),
            'platform'    => $agent->platform(),
        ]);

        $details = [
            'name'    => $lead->name,
            'email'   => $lead->email,
            'phone'   => $lead->phone,
            'message' => $lead->message,
        ];

        Mail::to(config('mail.from.address'))->send(new LeadsMail($details));

        return response()->json([
            'success' => true,
            'message' => 'Message submitted!'
        ]);
    }
}
