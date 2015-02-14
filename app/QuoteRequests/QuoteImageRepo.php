<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 2:20 PM
 */

namespace App\QuoteRequests;


class QuoteImageRepo {

    /**
     * @var QuoteImage
     */
    private $model;

    public function __construct(QuoteImage $model)
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