<?php
/**
 * FILE_NAME: index.php
 * From: www.hidove.cn
 * Author: Ivey
 * Date: 2019/10/10 14:27
 */
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Hidove图床 - Simple Free Image Hosting</title>
    <?php include "static/view/head.html"; ?>
    <script crossorigin="anonymous" integrity="sha384-4RTCcfPYk9Ynbsqfb8mxO6fADyCH+Hd9RaSvW6xO9/icE1biaZ1uw/qCx2BdQB2n"
        src="https://lib.baomitu.com/bootstrap-fileinput/5.0.6/js/fileinput.min.js"></script>
    <script crossorigin="anonymous" integrity="sha384-LBn99WQzkTDqv2h5L8yIOywHmqQvPsnkZZwxIg5ikQnHP2WbXhrKdLsUF65TgANs"
        src="https://lib.baomitu.com/bootstrap-fileinput/5.0.6/js/plugins/piexif.min.js"></script>
    <script crossorigin="anonymous" integrity="sha384-X03VuPfgj8rBD0thhiay5PNx+BvsaJZFXcfIsgh259SWkOoVuZdnw+OykP2UG7lJ"
        src="https://lib.baomitu.com/bootstrap-fileinput/5.0.6/js/plugins/purify.min.js"></script>
    <script crossorigin="anonymous" integrity="sha384-cuvJnJFRVnh5sfgGvFy3Yq55ljj4zer/VhFoCJp9puj5+3GR8s4cT48vqPafhLtu"
        src="https://lib.baomitu.com/bootstrap-fileinput/5.0.6/themes/fas/theme.min.js"></script>
</head>
<body>
    <?php include "static/view/nav.html"; ?>
    <div class="container Hidove-main">
        <div class="page-header">
            <h1>Image Upload</h1>
            <p>5 MB max per file. 10 files max per request.</p>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Free</h5>
                <div class="btn-group-toggle" data-toggle="buttons" id="apiType">
                    <label class="btn btn-outline-secondary active">
                        <input type="checkbox" checked autocomplete="off" name="apiType" value="ali" title="阿里图床">阿里图床
                    </label>
                    <label class="btn btn-outline-secondary">
                        <input type="checkbox" autocomplete="off" name="apiType" value="Catbox" title="Catbox">Catbox
                    </label>
                    <label class="btn btn-outline-secondary">
                        <input type="checkbox" autocomplete="off" name="apiType" value="SMMS" title="SMMS">SMMS </label>
                    <label class="btn btn-outline-secondary">
                        <input type="checkbox" autocomplete="off" name="apiType" value="SouGou" title="搜狗">搜狗 </label>
                    <label class="btn btn-outline-secondary">
                        <input type="checkbox" autocomplete="off" name="apiType" value="xiaomi" title="小米">小米 </label>
                    <label class="btn btn-outline-secondary">
                        <input type="checkbox" autocomplete="off" name="apiType" value="BaiDu" title="百度">百度 </label>
                    <label class="btn btn-outline-secondary">
                        <input type="checkbox" autocomplete="off" name="apiType" value="Qihoo" title="奇虎">奇虎 </label>
                    <label class="btn btn-outline-secondary">
                        <input type="checkbox" autocomplete="off" name="apiType" value="Jd" title="京东">京东 </label>
                    <label class="btn btn-outline-secondary">
                        <input type="checkbox" autocomplete="off" name="apiType" value="SuNing" title="苏宁">苏宁 </label>
                    <label class="btn btn-outline-secondary">
                        <input type="checkbox" autocomplete="off" name="apiType" value="juejin" title="掘金论坛">掘金论坛
                    </label>
                    <label class="btn btn-outline-secondary">
                        <input type="checkbox" autocomplete="off" name="apiType" value="Neteasy" title="网易">网易 </label>
                    <label class="btn btn-outline-secondary">
                        <input type="checkbox" autocomplete="off" name="apiType" value="toutiao" title="头条">头条 </label>
                    <label class="btn btn-outline-secondary">
                        <input type="checkbox" autocomplete="off" name="apiType" value="niupic" title="牛图">牛图 </label>
                </div>
            </div>
        </div>

        <div class="post">
            <form enctype="multipart/form-data">
                <div class="form-group">
                    <input id="Hidove" type="file" name="image" multiple="true" class="file"
                        data-overwrite-initial="false" data-min-file-count="1" data-max-file-count="10"
                        accept="image/*">
                </div>
            </form>
        </div>
        <div id="showurl" style="display:none;">
            <ul id="navTab" class="nav nav-tabs">
                <li class="nav-item">
                    <a aria-selected="true" data-toggle="tab" role="tab" class="nav-link active" href="#urlcode">URL</a>
                </li>
                <li class="nav-item"><a aria-selected="false" data-toggle="tab" role="tab" class="nav-link"
                        href="#htmlcode">HTML</a></li>
                <li class="nav-item"><a aria-selected="false" data-toggle="tab" role="tab" class="nav-link"
                        href="#bbcode">BBCode</a></li>
                <li class="nav-item"><a aria-selected="false" data-toggle="tab" role="tab" class="nav-link"
                        href="#markdown">Markdown</a></li>
                <li class="nav-item"><a aria-selected="false" data-toggle="tab" role="tab" class="nav-link"
                        href="#markdownwithlink">Markdown with Link</a></li>
            </ul>
            <div id="navTabContent" class="tab-content">
                <div id="urlcode" class="tab-pane active show">
                    <div class="card card-default">
                        <div class="card-body Hidove-imageucode">
                            <table class="table table-bordered">
                                <tbody id="urlcodes">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="htmlcode" class="tab-pane">
                    <div class="card card-default">
                        <div class="card-body Hidove-imageucode">
                            <table class="table table-bordered">
                                <tbody id="htmlcodes">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="bbcode" class="tab-pane">
                    <div class="card card-default">
                        <div class="card-body Hidove-imageucode">
                            <table class="table table-bordered">
                                <tbody id="bbcodes">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="markdown" class="tab-pane">
                    <div class="card card-default">
                        <div class="card-body Hidove-imageucode">
                            <table class="table table-bordered">
                                <tbody id="markdowncodes">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="markdownwithlink" class="tab-pane">
                    <div class="card card-default">
                        <div class="card-body Hidove-imageucode">
                            <table class="table table-bordered">
                                <tbody id="markdowncodes2">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "static/view/foot.html"; ?>
<script src="static/js/upload.js"></script>
</body>
</html>