<?php


namespace App\Service;


class EnviaEmail
{

    private $mymailer;

    public function __construct(\Symfony\Bundle\MonologBundle\SwiftMailer $mailer)
    {
        $this->mymailer = $mailer;
    }


    public function envia(){

    }

}