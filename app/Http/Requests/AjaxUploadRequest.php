<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AjaxUploadRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'upload' => 'max:8000|mimes:doc,docx,pdf,txt,vnd.oasis.opendocument.text,png,jpg,jpeg,gif,svg'
		];
	}

}
