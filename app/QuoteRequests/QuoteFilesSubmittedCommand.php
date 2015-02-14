<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 2:43 PM
 */

namespace App\QuoteRequests;


class QuoteFilesSubmittedCommand {

    public $quoterequest_id;
    public $files;

    function __construct($quoterequest_id, $files)
    {
        $this->quoterequest_id = $quoterequest_id;
        $this->files = $files;
    }


}