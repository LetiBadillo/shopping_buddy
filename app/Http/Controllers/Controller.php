<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
	/**
	 * Return a json error string
	 *
	 * @param mixed $error_param
	 * @param string $key
	 * @return \Illuminate\Http\Response
	*/
	public function jsonError($error_param, $key = 'error'){
		if ($error_param instanceof \Swift_SwiftException)
			$error = $this->lang('messages.error.mail_error');

		elseif ($error_param instanceof \Illuminate\Validation\ValidationException)
			$error = $error_param->getResponse()->getData(true);

		elseif ($error_param instanceof \Exception OR $error_param instanceof \Error) {
				if ($error_param instanceof InvalidConfigException OR $error_param instanceof CustomException)
					$error = ['error' => [$error_param->getMessage()]];

				elseif (config('app.debug'))
				$error = ['error' => [
					0 => $error_param->getMessage(),
					get_class($error_param) . " in " . $error_param->getFile() . " at line " .
					$error_param->getLine(),
					'details' => [
						'exception' => get_class($error_param),
						'message'	=> $error_param->getMessage(),
						'file'	=> $error_param->getFile(),
						'line'	=> $error_param->getLine(),
					],
					'trace' => $error_param->getTrace()
				]];

			else
				$error = $this->lang('messages.error.transaction_error');

		} else {
			$error = $error_param;
		}

		return $this->jsonResponse($error, $key, 422);
	}

	/**
	 * Return a json success string
	 *
	 * @param mixed $message
	 * @param string $key
	 * @return \Illuminate\Http\Response
	 */
	public function jsonSuccess($message = null, $key = 'success'){
		return $this->jsonResponse($message ?: $this->lang('messages.other.success_save'), $key);
	}

	/**
	 * Return a json response
	 *
	 * @param mixed $message
	 * @param string $key
	 * @param integer $code
	 * @return \Illuminate\Http\Response
	 */
	public function jsonResponse($message, $key, $code = 200){
		// if we receive an array or a message bag let them pass
		if (is_array($message) OR $message instanceof \Illuminate\Support\MessageBag){
			$response = $message;

		// if it is a validator, extract the errors and stuff
		} elseif ($message instanceof \Illuminate\Validation\Validator) {
			$response = $message->errors();

		// to other stuff, make it be in an array
		} else {
			// give direct response if 200, for others wrap in an array
			$response = [$key => $code==200 ? $message : [$message]];
		}

		return response()->json($response, $code);
	}
}
