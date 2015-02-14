<?php namespace App\Http\Controllers;

use App\Commanding\CommandBus;
use App\FileUploads\QuoteFileUploadedCommand;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\AjaxUploadRequest;
use Illuminate\Http\Request;

class QuoteFileUploadsController extends Controller {

	/**
	 * @var CommandBus
	 */
	private $commandBus;

	public function __construct(CommandBus $commandBus)
	{

		$this->commandBus = $commandBus;
	}

	public function receiveFile(AjaxUploadRequest $request)
	{
		$command = new QuoteFileUploadedCommand($request->file('upload'));
		$path = $this->commandBus->execute($command);

		return response()->json($path);
	}

}
