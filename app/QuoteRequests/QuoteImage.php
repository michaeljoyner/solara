<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 1:08 PM
 */

namespace App\QuoteRequests;


use Illuminate\Database\Eloquent\Model;

class QuoteImage extends Model {

    protected $table = "quoteimages";

    protected $fillable = [
        'quoterequest_id',
        'filepath'
    ];

}