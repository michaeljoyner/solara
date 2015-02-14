<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 12:52 PM
 */

namespace App\QuoteRequests;


use App\Eventing\EventGenerator;
use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model {

    use EventGenerator;

    protected $table = 'quoterequests';

    protected $fillable = [
        'contact_person',
        'email',
        'country',
        'phone',
        'message_body'
    ];

    public function images()
    {
        return $this->hasMany('App\QuoteRequests\QuoteImage', 'quoterequest_id');
    }

    public function docs()
    {
        return $this->hasMany('App\QuoteRequests\QuoteDoc', 'quoterequest_id');
    }

}