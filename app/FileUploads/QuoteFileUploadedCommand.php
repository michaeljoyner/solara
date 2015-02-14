<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 12:33 PM
 */

namespace App\FileUploads;


class QuoteFileUploadedCommand {

    public $upload;

    function __construct($upload)
    {
        $this->upload = $upload;
    }


}