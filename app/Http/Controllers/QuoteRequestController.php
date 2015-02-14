<?php namespace App\Http\Controllers;

use App\Commanding\CommandBus;
use App\Eventing\EventDispatcher;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\QuoteSubmittedRequest;
use App\QuoteRequests\QuoteFilesSubmittedCommand;
use App\QuoteRequests\QuoteRequestSubmittedCommand;
use App\QuoteRequests\QuoteUploadsCommand;
use App\Services\ImageOrDocFileValidator;
use Illuminate\Http\Request;

class QuoteRequestController extends Controller {

	/**
	 * @var CommandBus
	 */
	private $commandBus;
	/**
	 * @var EventDispatcher
	 */
	private $dispatcher;
	/**
	 * @var ImageOrDocFileValidator
	 */
	private $fileValidator;

	public function __construct(CommandBus $commandBus, EventDispatcher $dispatcher, ImageOrDocFileValidator $fileValidator)
	{

		$this->commandBus = $commandBus;
		$this->dispatcher = $dispatcher;
		$this->fileValidator = $fileValidator;
	}

	public function submitQuote(QuoteSubmittedRequest $request)
	{
		if(! $this->fileValidator->validate($request->file('quote_uploads')))
		{
			return redirect('/quote')->withInput()->with('uploadErrors', $this->fileValidator->getMessages());
		}

		$quoteRequestCommand = new QuoteRequestSubmittedCommand($request->all());
		$quoteRequest = $this->commandBus->execute($quoteRequestCommand);

		if($request->has('autouploads'))
		{
			$uploadsCommand = new QuoteUploadsCommand($quoteRequest->id, $request->get('autouploads'));
			$this->commandBus->execute($uploadsCommand);
		}

		if($request->hasFile('quote_uploads'))
		{
			$submitsCommand = new QuoteFilesSubmittedCommand($quoteRequest->id, $request->file('quote_uploads'));
			$this->commandBus->execute($submitsCommand);
		}

		$this->dispatcher->dispatch($quoteRequest->releaseEvents());

		return response('Thanks '.$quoteRequest->contact_person);
	}

}
