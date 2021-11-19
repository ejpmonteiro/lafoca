<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Laboratory;

class ContactController extends Controller
{
    public function index() {
        $laboratories = Laboratory::all();
        return view('site.pages.contato', compact('laboratories'));
    }

    public function send(Request $request) {    

        $data = array(
            'name'      =>      $request->name,
            'email'     =>      $request->email,
            'phone'     =>      $request->phone,
            'subject'   =>      $request->subject,
            'message'   =>      $request->message
        );

        Mail::to('carlos3mf@gmail.com')
                ->send(new SendEmail($data));

        // $job = (new SendEmailJob($data))
        //         ->delay(now()->addSeconds(5));
        // dispatch($job);

        return redirect()->route('pages.contato')
                        ->with('success', 'Mensagem enviada!');
    }
}
