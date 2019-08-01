<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\Booking;
use App\Models\Service;
use App\Models\Category;
use App\Models\ContactInfo;
use App\Models\User;


class BookingProposalEmailForAdmin extends Mailable
{
    use Queueable, SerializesModels;
    protected $booking;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        $booking = $this->booking;

        $booking2 = unserialize($booking->requested_date);
        $newDate = ' ';
        $date = ' ';
        foreach($booking2 as $key => $value){
            $date .= $key;
            foreach ($value as $key2 => $val) {
                $date .= ' '.$val.', ';
                $newDate .= $val.' on '.$key.', ';
            }
        }
        $booking['newDate'] = $newDate;
        //dd($booking2);
        $service = Service::where('id', $booking->service_id)->first();
        $staff = User::where('id', $booking->staff_id)->first();
        $category = Category::where('id', $booking->category_id)->first();
        $contactInfo = ContactInfo::where('user_id', $staff->id)->first();
        //dd($contactInfo);


        return $this->from('app@miyn.net', $booking->first_name.' '.$booking->last_name)
                    ->subject('New Appointment request from '.$booking->first_name.' '.$booking->last_name)
                    ->view('emails.client.proposal',compact('booking', 'booking2', 'service', 'staff', 'category', 'contactInfo'));
    }
}
