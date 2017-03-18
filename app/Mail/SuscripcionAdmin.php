<?php

namespace Sucesos\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Sucesos\Entities\Sucesos\Suscripcion;

class SuscripcionAdmin extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var Suscripcion
     */
    public $suscripcion;

    /**
     * Create a new message instance.
     *
     * @param Suscripcion $suscripcion
     */
    public function __construct(Suscripcion $suscripcion)
    {
        $this->suscripcion = $suscripcion;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.suscripcion-admin')
                    ->from('noreply@email.sucesos.pe', 'Sucesos.pe')
                    ->to('suscripciones@sucesos.pe')
                    ->subject($this->suscripcion->nombres.' se ha suscrito a Sucesos.pe');
    }
}
