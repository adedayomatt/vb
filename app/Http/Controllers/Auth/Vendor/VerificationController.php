<?php

namespace App\Http\Controllers\Auth\Vendor;

use App\Vendor;
use Illuminate\Http\Request;
use App\Events\VendorVerified;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;


class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:vendor')->except('verify');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    /**
     * Show the email verification notice.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return $request->user()->hasVerifiedEmail()
                        ? redirect($this->redirectPath())
                        : view('auth.vendor.verify');
    }

    public function verify(Request $request)
    {
        $vendor = Vendor::findorfail($request->route('id'));
        if ( $vendor->markEmailAsVerified()) {
            event(new VendorVerified($vendor));
        }
    
        return redirect($this->redirectPath())->with('verified', true);
    }
}
