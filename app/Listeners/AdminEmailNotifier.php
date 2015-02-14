<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 3:38 PM
 */

namespace App\Listeners;


use App\Eventing\EventListener;
use App\Mailers\AdminMailer;

class AdminEmailNotifier extends EventListener {

    /**
     * @var AdminMailer
     */
    private $mailer;

    public function __construct(AdminMailer $mailer)
    {

        $this->mailer = $mailer;
    }

    public function whenQuoteRequestWasSubmitted($event)
    {
        $this->mailer->sendQuoteRequest($event->quoteRequest);
    }

}