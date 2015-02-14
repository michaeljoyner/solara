<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 2:19 PM
 */

namespace App\QuoteRequests;


use App\Commanding\CommandHandler;

class QuoteUploadsCommandHandler implements CommandHandler {

    /**
     * @var QuoteImageRepo
     */
    private $imageRepo;
    /**
     * @var QuoteDocRepo
     */
    private $docRepo;

    public function __construct(QuoteImageRepo $imageRepo, QuoteDocRepo $docRepo)
    {

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

        foreach($command->uploads as $filepath)
        {
            if(strpos($filepath, 'quoteimages') !== false)
            {
                $imagePaths[] = $filepath;
            }
            else
            {
                $docPaths[] = $filepath;
            }
        }

        if($imagePaths)
        {
            $imageDTO = new QuoteUploadsCommand($command->quoterequest_id, $imagePaths);
            $this->imageRepo->store($imageDTO);
        }

        if($docPaths)
        {
            $docDTO = new QuoteUploadsCommand($command->quoterequest_id, $docPaths);
            $this->docRepo->store($docDTO);
        }
    }
}