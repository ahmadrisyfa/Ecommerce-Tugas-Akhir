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

    public $pemesan;  // Informasi pemesan
    public $order;    // Informasi pesanan (order)

    /**
     * Create a new message instance.
     *
     * @param $pemesan
     * @param $order
     */
    public function __construct($pemesan, $order)
    {
        $this->pemesan = $pemesan;  // Data pemesan
        $this->order = $order;      // Data pesanan
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Invoice Order - ' . $this->pemesan->name,  // Subjek email
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'admin.invoice.generate-invoice',
            with: [
                'pemesan' => $this->pemesan,  // Data pemesan untuk view
                'order' => $this->order,     // Data order untuk view
            ]
        );
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
