<?php

class AuthController extends BaseController {

	public function postSetsession()
	{
		//initialisation
		$returnData			= array();
		$response			= "FAILED";
		$statusCode			= 400;
		$result				= null;
		$message			= "Something wrong.";
		$isError			= true;
		$missingParameter	= null;

		$input				= Input::all();
		$username			= (isset($input['username'])) ? $input['username']:null;

		//if username didn't set
		if(!isset($input['username'])){
			$missingParameter[] = "username";
		}

		//set message error
		if(isset($missingParameter))
		{
			$message = "Missing parameters : {".implode(', ', $missingParameter)."}";
		}
		else
		{
			$isError = false;
		}

		if(!$isError){ 
            try {
                Session::put('hidden_user', $username);
                $response		= "OK";
				$statusCode		= 200;
				$message 		= "success set session";		
            } catch (Exception $e) {
                $message = $e->getMessage();
            } // */
        }

        $returnData = array(
            'response' => $response,
            'status_code' => $statusCode,
            'message' => $message,
            'result' => $result
            );

        return Response::json($returnData, $statusCode)->header('access-control-allow-origin', '*');
	}

	public function doLogout()
	{
		Session::flush();
        return Redirect::to('/');
	}
}
