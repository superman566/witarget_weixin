<?php

function resMsg(){
	//Response based on keywords received
  $postArr = $GLOBALS['HTTP_RAW_POST_DATA'];
  
  $postObj = simplexml_load_string($postArr);
  
  if(strtolower($postObj->MsgType) == 'text'){
    if(strtolower($postObj->Content) == 'we'){
    $toUser = $postObj->FromUserName;
    $fromUser = $postObj->ToUserName;
    $time = time();
    $msgType = 'text';
    $content = '<a href="http://witarget.applinzi.com/index.html">target</a>';
    $template = "<xml>
                 <ToUserName><![CDATA[%s]]></ToUserName>
                 <FromUserName><![CDATA[%s]]></FromUserName>
                 <CreateTime>%s</CreateTime>
                 <MsgType><![CDATA[%s]]></MsgType>
                 <Content><![CDATA[%s]]></Content>
                 </xml>";
    $info = sprintf($template, $toUser, $fromUser, $time, $msgType, $content);
    
    echo $info;
    }
  }
}  
?>