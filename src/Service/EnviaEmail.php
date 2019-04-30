<?php


namespace App\Service;


use FOS\UserBundle\Mailer\MailerInterface;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;

class EnviaEmail implements MailerInterface
{

    private $mymailer;

    public function __construct(SwiftmailerBundleiler $mailer)
    {
        $this->mymailer = $mailer;
    }

    public function sendResettingEmailMessage(UserInterface $user)
    {
        // TODO: Implement sendResettingEmailMessage() method.
    }

    public function sendConfirmationEmailMessage(UserInterface $user)
    {
        // TODO: Implement sendConfirmationEmailMessage() method.
    }


    public function envia(){

    }

}