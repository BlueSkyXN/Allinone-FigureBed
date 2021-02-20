<?php
/**
 * FILE_NAME: api.php
 * From: www.hidove.cn
 * Author: Ivey
 * Date: 2019/10/10 14:28
 */
$domain = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Api文档 - Hidove图床</title>
    <?php include "static/view/head.html"; ?>
</head>
<?php include "static/view/nav.html"; ?>
<div class="container">
    <div class="card bg-light mt-3 mb-3">
        <h5 class="card-header">Hidove图床 Api</h5>
        <div class="card-body">
            <h3>#图片上传</h3>
            <div class="table-responsive">
                <!--                /*Hidove-table-small-->
                <table class="table table-bordered table-hover Hidove-table-small">
                    <thead>
                        <tr>
                            <th>功能</th>
                            <th>接口</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>请求方式</td>
                            <td>POST</td>
                        </tr>
                        <tr>
                            <td>URL</td>
                            <td><?php echo $domain;?>/api/upload</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="Hidove-api-tips">请求参数</p>
            <div class="table-responsive">
                <table class="table table-bordered table-hover ">
                    <thead>
                        <tr>
                            <th>参数名称</th>
                            <th>类型</th>
                            <th>是否必须</th>
                            <th>说明</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>image</td>
                            <td>File</td>
                            <td>是</td>
                            <td>表单名称</td>
                        </tr>
                        <tr>
                            <td>apitype</td>
                            <td>String</td>
                            <td>是</td>
                            <td>上传的图床类型（Ali、Vim_Cn等等）</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="Hidove-api-tips">图床类型参数</p>
            <div class="table-responsive">
                <table class="table table-bordered table-hover Hidove-table-small">
                    <thead>
                        <tr>
                            <th>图床类型</th>
                            <th>唯一标识</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>阿里图床</td>
                            <td>ali</td>
                        </tr>
                        <tr>
                            <td>Vim_Cn</td>
                            <td>Vim_Cn</td>
                        </tr>
                        <tr>
                            <td>Upload_Cc</td>
                            <td>Upload_Cc</td>
                        </tr>
                        <tr>
                            <td>Catbox</td>
                            <td>Catbox</td>
                        </tr>
                        <tr>
                            <td>SMMS</td>
                            <td>SMMS</td>
                        </tr>
                        <tr>
                            <td>搜狗</td>
                            <td>SouGou</td>
                        </tr>
                        <tr>
                            <td>小米</td>
                            <td>xiaomi</td>
                        </tr>
                        <tr>
                            <td>百度</td>
                            <td>BaiDu</td>
                        </tr>
                        <tr>
                            <td>奇虎</td>
                            <td>Qihoo</td>
                        </tr>
                        <tr>
                            <td>京东</td>
                            <td>Jd</td>
                        </tr>
                        <tr>
                            <td>苏宁</td>
                            <td>SuNing</td>
                        </tr>
                        <tr>
                            <td>掘金论坛</td>
                            <td>juejin</td>
                        </tr>
                        <tr>
                            <td>网易</td>
                            <td>Neteasy</td>
                        </tr>
                        <tr>
                            <td>头条</td>
                            <td>toutiao</td>
                        </tr>
                        <tr>
                            <td>牛图</td>
                            <td>niupic</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="Hidove-api-tips">响应参数</p>
            <div class="table-responsive">
                <table class="table table-bordered table-hover ">
                    <thead>
                        <tr>
                            <td>参数名称</td>
                            <td>类型</td>
                            <td>实例值</td>
                            <td>说明</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>code</td>
                            <td>Number</td>
                            <td>200</td>
                            <td>状态码，成功返回200，失败返回500</td>
                        </tr>
                        <tr>
                            <td>msg</td>
                            <td>String</td>
                            <td>success</td>
                            <td>提示信息</td>
                        </tr>
                        <tr>
                            <td>data</td>
                            <td>array|object</td>
                            <td>
                                <pre><code>"url":{
        "ali":"https://ae01.alicdn.com/kf/U81bf4c3201cc4d13b8e943f5f965f530r.jpg"
    }</code></pre>
                            </td>
                            <td>获取的图片链接数据</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <p class="Hidove-api-tips">正确响应示例</p>
                <pre><code>{
    "code":200,
    "msg":"success",
    "data":{
        "url":{
            "ali":"https://ae01.alicdn.com/kf/U81bf4c3201cc4d13b8e943f5f965f530r.jpg"
        }
    }
}</code></pre>
            </div>
        </div>
    </div>
</div>
<?php include "static/view/foot.html"; ?>
</html>