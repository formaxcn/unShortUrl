<?php  
	$url = $_GET['url'];
//echo phpinfo();
	//echo $url;
if(!function_exists('curl_init')) {
    require_once 'Purl.php';
}
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, TRUE);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		$a = curl_exec($ch);
		if(preg_match('#Location: (.*)#', $a, $r)){
 			$lalala = trim($r[1]);
    }
		if(strlen($lalala)<strlen($url)){
      $lalala = "";
    }
		echo $lalala;