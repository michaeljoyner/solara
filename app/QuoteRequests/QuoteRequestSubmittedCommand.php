<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 12:48 PM
 */

namespace App\QuoteRequests;


class QuoteRequestSubmittedCommand {

    public $contact_person;
    public $email;
    public $country;
    public $phone;
    public $message_body;

    public function __construct($data)
    {
        $this->contact_person = $data['contact_person'];
        $this->email = $data['email'];
        $this->country = $data['country'];
        $this->phone = $data['phone'];
        $this->message_body = $data['message_body'];
    }

}