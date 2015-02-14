<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 12:52 PM
 */

namespace App\QuoteRequests;


class QuoteRequestRepo {

    /**
     * @var QuoteRequest
     */
    private $model;

    public function __construct(QuoteRequest $model)
    {

        $this->model = $model;
    }

    public function store($data)
    {
        $quoteRequest = $this->model->create([
            'contact_person' => $data->contact_person,
            'email' => $data->email,
            'country' => $data->country,
            'phone' => $data->phone,
            'message_body' => $data->message_body
        ]);

        $quoteRequest->raise(new QuoteRequestWasSubmitted($quoteRequest));

        return $quoteRequest;
    }

}