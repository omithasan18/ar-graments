<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Mail\ReplyMessageEmail;
use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;

class UserMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Message::latest()->get();
        return view('admin.newsletter.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Message::find($id);
        return view('admin.newsletter.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $message = Message::find($id);
        $name = $message->first_name . ' ' . $message->last_name;
        $email = $request->email;

        $details = [
            'name' => $name,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        try {
            Mail::to($email)->send(new ReplyMessageEmail($details));
            // Mail::to($email)->queue(new EmailManager($array));
        } catch (\Exception $e) {
            dd($e);
        }
        Toastr::success('Email Send Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function newsletterSend()
    {
        $emails = Subscribe::latest()->get();
        return view('admin.newsletter.newsletter_send', compact('emails'));
    }
    public function newsletterSubmit(Request $request)
    {
        $emails = $request->input('email'); // Assuming $request->email[] is an array of email addresses

        $details = [
            'name'=>'',
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        try {
            foreach ($emails as $email) {
                Mail::to($email)->send(new ReplyMessageEmail($details));
                // You can also use ->queue() if you want to send emails asynchronously
            }


        } catch (\Exception $e) {
            dd($e);
        }
        Toastr::success('Emails Sent Successfully');
        return redirect()->back();
    }
}
