<?php
	//get timestamp, nonce, token
	$timestamp = $_GET['timestamp'];
	$nonce = $_GET['nonce'];
	$token = 'zhenai';
	$signature = $_GET['signature'];

	// sort these 3 varible
	$array = array($timestamp,$nonce,$token);
	sort($array);
	// encrpty using sha1 method
	$tmpstr = implode('', $array);
	$tmpstr = sha1($tmpstr);
	// verificate using signature
	if($tmpstr == signature){
		echo $_GET['echostr'];
		exit;
	}
?>