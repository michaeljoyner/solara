<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 2:18 PM
 */

namespace App\QuoteRequests;


class QuoteUploadsCommand {

    public $quoterequest_id;
    public $uploads;

    function __construct($quoterequest_id, $uploads)
    {
        $this->quoterequest_id = $quoterequest_id;
        $this->uploads = $uploads;
    }


}