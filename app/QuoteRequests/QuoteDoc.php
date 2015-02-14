<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 1:09 PM
 */

namespace App\QuoteRequests;


use Illuminate\Database\Eloquent\Model;

class QuoteDoc extends Model {

    protected $table = "quotedocs";

    protected $fillable = [
        'quoterequest_id',
        'filepath'
    ];
}