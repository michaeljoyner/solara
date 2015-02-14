<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2015
 * Time: 12:51 PM
 */

namespace App\QuoteRequests;


use App\Commanding\CommandHandler;

class QuoteRequestSubmittedCommandHandler implements CommandHandler {

    /**
     * @var QuoteRequestRepo
     */
    private $repo;

    public function __construct(QuoteRequestRepo $repo)
    {

        $this->repo = $repo;
    }

    /**
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        return $this->repo->store($command);
    }
}