<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 2:45 PM
 */

namespace App\QuoteRequests;


use App\Commanding\CommandHandler;
use App\FileUploads\QuoteDocFileStorer;
use App\FileUploads\QuoteImageFileStorer;

class QuoteFilesSubmittedCommandHandler implements CommandHandler {

    /**
     * @var QuoteImageFileStorer
     */
    private $imageFileStorer;
    /**
     * @var QuoteDocFileStorer
     */
    private $docFileStorer;
    /**
     * @var QuoteImageRepo
     */
    private $imageRepo;
    /**
     * @var QuoteDocRepo
     */
    private $docRepo;

    private $imageTypes =[
        'jpg',
        'jpeg',
        'png',
        'gif',
        'svg',
        'bmp'
    ];

    public function __construct(QuoteImageFileStorer $imageFileStorer, QuoteDocFileStorer $docFileStorer, QuoteImageRepo $imageRepo, QuoteDocRepo $docRepo)
    {

        $this->imageFileStorer = $imageFileStorer;
        $this->docFileStorer = $docFileStorer;
        $this->imageRepo = $imageRepo;
        $this->docRepo = $docRepo;
    }

    /**
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $imagePaths = [];
        $docPaths = [];

        foreach($command->files as $file)
        {
            if(in_array($file->getClientOriginalExtension(), $this->imageTypes))
            {
                $imagePaths[] = $this->imageFileStorer->store($file);
            }
            else
            {
                $docPaths[] = $this->docFileStorer->store($file);
            }
        }

        if($imagePaths)
        {
            $imagesDTO = new QuoteUploadsCommand($command->quoterequest_id, $imagePaths);
            $this->imageRepo->store($imagesDTO);
        }

        if($docPaths)
        {
            $docsDTO =  new QuoteUploadsCommand($command->quoterequest_id, $docPaths);
            $docsDTO =  new QuoteUploadsCommand($command->quoterequest_id, $docPaths);
            $this->docRepo->store($docsDTO);
        }
    }
}