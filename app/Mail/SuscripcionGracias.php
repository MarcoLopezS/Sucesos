<?php namespace Sucesos\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Sucesos\Entities\Sucesos\Suscripcion;

class SuscripcionGracias extends Mailable
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
        return $this->view('emails.suscripcion')
                    ->from('no-reply@sucesos.pe', 'Sucesos.pe')
                    ->subject('Gracias por Suscribirte');
    }
}
