<?php

namespace App\Mail;

use App\commande;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public  $commande ;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($commande)
    {
        $commande=commande::all();
        $this->commande = $commande; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Order Confirmation')->view('mails.order-mail');
    }
}
