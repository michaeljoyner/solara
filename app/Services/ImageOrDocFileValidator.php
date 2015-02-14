<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 4:48 PM
 */

namespace App\Services;


class ImageOrDocFileValidator extends FileValidator {

    protected $validMimes = [
        'image/png',
        'image/jpeg',
        'image/gif',
        'image/jpg',
        'image/svg',
        'application/vnd.oasis.opendocument.text',
        'application/pdf',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'application/msword',
        'text/plain'
    ];

}