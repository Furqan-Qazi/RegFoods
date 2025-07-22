<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;

class RegistrationPDFMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        $pdf = Pdf::loadView('emails.registration-pdf', ['user' => $this->user]);

        return $this->to($this->user->email)
            ->subject('Registration Details')
            ->view('emails.registration-pdf')
            ->attachData($pdf->output(), 'registration-details.pdf');
    }
}
