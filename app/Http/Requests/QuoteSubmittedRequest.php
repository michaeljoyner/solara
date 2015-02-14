<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class QuoteSubmittedRequest extends Request {

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
			'contact_person' => 'required|max:255',
			'email' => 'required|email',
			'country' => 'max:255',
			'phone' => 'max:255'
		];
	}

}
