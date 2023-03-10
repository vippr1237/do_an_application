<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TransactionSuccess extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    private $transactions;
    private $subtotal;
    public function __construct($transactions, $subtotal)
    {
        $this->transactions = $transactions;
        $this->subtotal = $subtotal;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.email_success_transaction')
                ->with([
                    'shopping' => $this->transactions,
                    'subtotal' => $this->subtotal
                ]);
    }
}
