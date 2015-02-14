<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 12:34 PM
 */

namespace App\FileUploads;


use App\Commanding\CommandHandler;

class QuoteFileUploadedCommandHandler implements CommandHandler {

    /**
     * @var QuoteImageFileStorer
     */
    private $imageFileStorer;
    /**
     * @var QuoteDocFileStorer
     */
    private $docFileStorer;

    private $imageTypes = [
        'jpg',
        'jpeg',
        'png',
        'gif',
        'svg',
        'bmp'
    ];

    public function __construct(QuoteImageFileStorer $imageFileStorer, QuoteDocFileStorer $docFileStorer)
    {

        $this->imageFileStorer = $imageFileStorer;
        $this->docFileStorer = $docFileStorer;
    }

    /**
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        if(in_array($command->upload->getClientOriginalExtension(), $this->imageTypes))
        {
            return $this->imageFileStorer->store($command->upload);
        }
        return $this->docFileStorer->store($command->upload);
    }
}