<?php
/**
 * FILE_NAME: upload.php
 * From: www.hidove.cn
 * Author: Ivey
 * Date: 2019/10/10 14:28
 */
header('content-type: application/json');
set_time_limit(0);
if(empty($_FILES['image'])){
    die(msg(400,'The image can not be null!'));
}else{
    $file = $_FILES['image'];
}
if(empty($_POST['apiType'])){
    die(msg(400,'The apiType can not be null!'));
}else{
    $postData['type'] = $_POST['apiType'];
}
$imageInfo =getImageInfo($file['tmp_name']);
if(!$imageInfo)
    die(msg(400,'The image is illegal!'));
$newFileName = $file['tmp_name'].'.'.$imageInfo['type'];
rename($file['tmp_name'],$newFileName);
if (class_exists('CURLFile')) {     // php 5.5
    $postData['image'] = new \CURLFile(realpath($newFileName));
} else {
    $postData['image'] = '@' . realpath($newFileName);
}
$response = HidoveCurlPost('https://api.abcyun.co/api/picbed/index/token/5d8f31cf6a8ab',$postData);
@unlink(realpath($newFileName));
$response = json_decode($response,true);
$imagesUrl['url'] = $response['url'];
die(msg(200,'success',$imagesUrl));
function HidoveCurlPost($url,$post,$referer='https://www.baidu.com',$headers = array('Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_8; en-us) AppleWebKit/534.50 (KHTML, like Gecko) Version/5.1 Safari/534.50')){
    // 创建一个新 cURL 资源
    $curl = curl_init();
    // 设置URL和相应的选项
    // 需要获取的 URL 地址
    curl_setopt($curl, CURLOPT_URL,$url);
    #启用时会将头文件的信息作为数据流输出。
    curl_setopt($curl, CURLOPT_HEADER, false);
    #设置头部信息
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    #在尝试连接时等待的秒数。设置为 0，则无限等待。
    // curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
    #允许 cURL 函数执行的最长秒数。
    // curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    #设置请求信息
    //设置post方式提交
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl,CURLOPT_POSTFIELDS,$post);
    #设置referer
    curl_setopt($curl, CURLOPT_REFERER, $referer);
    #关闭ssl
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    #TRUE 将 curl_exec获取的信息以字符串返回，而不是直接输出。
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // 抓取 URL 并把它传递给浏览器
    $return = curl_exec($curl);
    if ($return===false) {
        return "CURL Error:".curl_error($curl);
    }
    curl_close($curl);
    return $return;
}
function getImageInfo($fileName){
    $data = getimagesize($fileName);
    switch ($data[2]){
        case 1:return [
            'type'=>'gif',
            'mime'=> $data['mime']
        ];
        case 2:return [
            'type'=>'jpg',
            'mime'=> $data['mime']
        ];
        case 3:
            return [
                'type'=>'png',
                'mime'=> $data['mime']
            ];
        case 6:
            return [
                'type'=>'bmp',
                'mime'=> $data['mime']
            ];
        case 17:
            return [
                'type'=>'ico',
                'mime'=> $data['mime']
            ];
        default:
            return false;
    }
}
function msg($code,$msg,$data=[]){
    return json_encode([
        'code'=>$code,
        'msg'=>$msg,
        'data'=>$data,
    ]);
}