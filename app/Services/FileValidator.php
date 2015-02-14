<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 4:47 PM
 */

namespace App\Services;


class FileValidator {

    protected $validMimes = [
        'image/png',
        'image/jpg',
        'image/gif'
    ];

    protected $max_size = 8000000;

    protected $messages = [];

    public function validate($files)
    {
        $violation_found = false;
        if($files === NULL || (count($files) === 1 && $files[0] === NULL))
        {
            return true;
        }
        if(! is_array($files))
        {
            $files = array($files);
        }

        foreach($files as $file)
        {
            if(! in_array($file->getMimeType(), $this->validMimes))
            {
                $this->messages[] = $file->getClientOriginalName(). ' is not a valid file type [' . $file->getMimeType() .']';
                $violation_found = true;
            }

            if($file->getClientSize() > $this->max_size)
            {
                $this->messages[] = $file->getClientOriginalName(). ' is too large. Max file size is 5MB';
                $violation_found = true;
            }
        }

        return (! $violation_found);

    }

    public function getMessages()
    {
        return $this->messages;
    }

}