<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 2:58 PM
 */

namespace App\QuoteRequests;


class QuoteRequestWasSubmitted {

    public $quoteRequest;

    function __construct($quoteRequest)
    {
        $this->quoteRequest = $quoteRequest;
    }


}