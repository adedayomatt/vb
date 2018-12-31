<?php

namespace App\Listeners;

use App\Events\VendorVerified;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Support\Facades\Session;

class sendVendorWelcomeNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  VendorVerified  $event
     * @return void
     */
    public function handle(VendorVerified $event)
    {
        Session::flash('success',"Thank you ".$event->vendor->firstname." for verifying your email, welcome once again");
    }
}
