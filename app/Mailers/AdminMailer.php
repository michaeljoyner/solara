<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 3:06 PM
 */

namespace App\Mailers;


class AdminMailer extends BaseMailer {

    private $to = ['joyner.michael@gmail.com' => 'MichaelJoyner'];

    public function sendQuoteRequest($quoteRequest)
    {
        $subject = 'Quote request from Solara Website';
        $view = 'emails.admin.quote';
        $from = [$quoteRequest->email => $quoteRequest->contact_person];
        $imageFiles = $this->getImageFiles($quoteRequest);
        $docFiles = $this->getDocFiles($quoteRequest);

        $this->sendTo($this->to, $from, $subject, $view, compact('quoteRequest', 'imageFiles', 'docFiles'), array_merge($imageFiles, $docFiles));

    }

    private function getImageFiles($quoteRequest)
    {
        $files = $quoteRequest->images()->get()->map(function($file)
        {
            return public_path().'/'.$file->filepath;
        })->toArray();
        return $files;
    }

    private function getDocFiles($quoteRequest)
    {
        $files = $quoteRequest->docs()->get()->map(function($file)
        {
            return public_path().'/'.$file->filepath;
        })->toArray();
        return $files;
    }

}