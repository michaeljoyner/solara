<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 12:28 PM
 */

namespace App\FileUploads;


use App\Services\FileStorer;

class QuoteImageFileStorer extends FileStorer {

    protected $path = 'useruploads/quoteimages';

}