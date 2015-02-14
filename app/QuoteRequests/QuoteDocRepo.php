<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 2:23 PM
 */

namespace App\QuoteRequests;


class QuoteDocRepo {

    /**
     * @var QuoteDoc
     */
    private $model;

    public function __construct(QuoteDoc $model)
    {

        $this->model = $model;
    }

    public function store($data)
    {
        foreach($data->uploads as $filepath)
        {
            $this->model->create([
                'quoterequest_id' => $data->quoterequest_id,
                'filepath' => $filepath
            ]);
        }
    }
}