<?php

/**
 * To call this class from another php file first mention it using require ('003.php');
 * Then Create an object of this class using $MyPostRequestClassObject = new MyPostRequestClass();
 * Then call the method using $MyPostRequestClassObject->MyPostRequestFunction($url,$data); Where $data is the array of the fields for params
 *  
 */
class MyPostRequestClass
{

	/*
     * This function makes Post request function and return the result of the post request 
     *@params - URL of the destination of our php file EG - $url = 'http://192.168.43.237/002.php'; 
     *@params - $data is the array of the params EG $data = array('firstNumber' => '2', 'secondNumber' => '3');
	*/
	
	public function MyPostRequestFunction($url, $data)
	{
		$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

if ($result === FALSE) { /* Handle error */ }

	return $result;

	}
}

?>