<?php
class ApiController extends CController
{
	public function init()
	{
		header('Content-Type: application/json');
	}

	public function missingAction($actionId)
	{
		throw new CHttpException(404, "the requested page '$actionId' is not found");
	}

	protected function sendError($message, $code = 400)
	{
		http_response_code($code);
		echo json_encode([
			'error' => true,
			'message' => $message,
			'code' => $code
		]);

		Yii::app()->end();
	}
}