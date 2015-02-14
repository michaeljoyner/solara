<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 12:31 PM
 */

namespace App\FileUploads;


use App\Services\FileStorer;

class QuoteDocFileStorer extends FileStorer {

    protected $path = 'useruploads/quotedocs';

}