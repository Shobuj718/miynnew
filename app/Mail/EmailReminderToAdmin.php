<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailReminderToAdmin extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         $user = $this->user;
        return $this->from('app@miyn.net', $user->first_name.' '.$user->last_name)
                    ->subject('Reminder: Appointment with '.$user->first_name.' '.$user->last_name)
                    ->view('emails.reminder.staff_reminder_email',compact('user'));
    }
}
