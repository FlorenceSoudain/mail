<?php
/**
 * Created by PhpStorm.
 * User: flore
 * Date: 30/01/2019
 * Time: 10:06
 */

class mail
{
    private $destinataire;
    private $expediteur;
    private $objet;
    private $message;

    public function __construct()
    {
        $this->destinataire = filter_var(isset($_POST['destinataire']) ? $_POST['destinataire'] : NULL, FILTER_SANITIZE_STRING);
        $this->objet = filter_var(isset($_POST['objet']) ? $_POST['objet'] : NULL, FILTER_SANITIZE_STRING);
        $this->message = filter_var(isset($_POST['message']) ? $_POST['message'] : NULL, FILTER_SANITIZE_STRING);
        $this->expediteur = "florence.soudain@laposte.net";
    }

    public function envoyer()
    {
        if(!empty($this->destinataire) AND !empty($this->objet) AND !empty($this->message))
        {
            $header = "From: florence.soudain@laposte.net" . "\r\n" .
            'Reply-To: florence.soudain@laposte.net' . "\r\n" .
                "Content-type: text/html; charset= UTF-8" . "\r\n"  .
            'X-Mailer: PHP/' . phpversion();
            mail($this->destinataire, utf8_encode($this->objet), $this->message, $header);
            echo "Message envoyé";
        }
    }
}