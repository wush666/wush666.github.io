<?php
header("Content-Type: text/html;charset=utf-8");
function guid(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }else{
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = chr(123)// "{"
                .substr($charid, 0, 8).$hyphen
                .substr($charid, 8, 4).$hyphen
                .substr($charid,12, 4).$hyphen
                .substr($charid,16, 4).$hyphen
                .substr($charid,20,12)
                .chr(125);// "}"
        return $uuid;
    }
}
function get_token(){
	date_default_timezone_set('UTC');
	$AccessKeyId='LTAI4G5gY66ytC8LhKpgqRiq';
	$AccessKeySecret='Ir0dJhd9kcoOnZLYrLODnegOEPIT73';

	$SignatureNonce=substr(guid(),1,36);
	$Timestamp=urlencode(date('Y-m-d').'T'.date('H:i:s').'Z');

	$string="AccessKeyId={$AccessKeyId}&Action=CreateToken&Format=JSON&RegionId=cn-shanghai&SignatureMethod=HMAC-SHA1&SignatureNonce={$SignatureNonce}&SignatureVersion=1.0&Timestamp={$Timestamp}&Version=2019-02-28";
	$SourceString='GET&%2F&'.urlencode($string);

	$Signature=urlencode(base64_encode(hash_hmac('sha1',$SourceString,$AccessKeySecret.'&',1)));
	// var_dump($Signature);
	$re=file_get_contents("http://nls-meta.cn-shanghai.aliyuncs.com/?Signature={$Signature}&{$string}");
	file_put_contents('./token', $re);
	return $re;
}

// get_token();

?>

