<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InvoiceOrderMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $pemesan;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pemesan)
    {
      $this->pemesan = $pemesan;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Invoice Order Mailable',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        $subject = "your ordr invoice";
        return $this->subject($subject)->view('admin.invoice.generate-invoice');
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
