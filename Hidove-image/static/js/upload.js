"use strict";

function fileinput() {
    $("#Hidove").fileinput({
        language: "en",
        theme: "fas",
        previewFileType: "image",
        uploadUrl: "upload.php",
        uploadExtraData: function (t) {
            function e(e, s) {
                return t.apply(this, arguments)
            }
            return e.toString = function () {
                return t.toString()
            }, e
        }(function (t, e) {
            return uploadExtraData()
        }),
        allowedFileExtensions: ["jpeg", "jpg", "png", "gif", "ico"],
        overwriteInitial: !1,
        showClose: !1,
        maxFileSize: 5120,
        maxFileCount: 10,
        uploadAsync: !0,
        browseClass: "btn btn-secondary",
        browseLabel: "Select Image(s)",
        removeClass: "btn btn-danger",
        removeLabel: "Clear",
        uploadClass: "btn btn-info",
        uploadLabel: "Upload",
        dropZoneTitle: "Drag & drop files here ...<br>or<br>Copy & paste screenshots here ..."
    }).on("fileuploaded", function (t, e, s, o) {
        var a = (e.form, e.files, e.extra, e.response);
        e.reader;
        if ("200" == a.code) {
            $("showurl").css("display") || a.data.url && $("#showurl").show();
            var r = a.data.url,
                o = 0;
            for (var i in r)
                if (1 == ++o) var n = '<tr><td class="Hidove-imageucode-cover" width="100px" rowspan="' + Object.getOwnPropertyNames(r).length + '"><img src="' + r[i] + '"/></td><td><span class="Hidove-imageucode-tip">' + i + '</span><input type="text" class="form-control" onfocus="this.select();" value="' + r[i] + '"></td></tr>',
                    l = '<tr><td class="Hidove-imageucode-cover" width="100px" rowspan="' + Object.getOwnPropertyNames(r).length + '"><img src="' + r[i] + '"/></td><td><span class="Hidove-imageucode-tip">' + i + '</span><input type="text" class="form-control" onfocus="this.select();" value="&lt;img src=&quot;' + r[i] + '&quot;/&gt;"></td></tr>',
                    p = '<tr><td class="Hidove-imageucode-cover" width="100px" rowspan="' + Object.getOwnPropertyNames(r).length + '"><img src="' + r[i] + '"/></td><td><span class="Hidove-imageucode-tip">' + i + '</span><input type="text" class="form-control" onfocus="this.select();" value="[img]' + r[i] + '[/img]"></td></tr>',
                    c = '<tr><td class="Hidove-imageucode-cover" width="100px" rowspan="' + Object.getOwnPropertyNames(r).length + '"><img src="' + r[i] + '"/></td><td><span class="Hidove-imageucode-tip">' + i + '</span><input type="text" class="form-control" onfocus="this.select();" value="![](' + r[i] + ')"></td></tr>',
                    d = '<tr><td class="Hidove-imageucode-cover" width="100px" rowspan="' + Object.getOwnPropertyNames(r).length + '"><img src="' + r[i] + '"/></td><td><span class="Hidove-imageucode-tip">' + i + '</span><input type="text" class="form-control" onfocus="this.select();" value="[![' + r[i] + "](" + r[i] + ")](" + r[i] + ')"></td></tr>';
                else n = n + '<tr><td><span class="Hidove-imageucode-tip">' + i + '</span><input type="text" class="form-control" onfocus="this.select();" value="' + r[i] + '"></td></tr>', l = l + '<tr><td><span class="Hidove-imageucode-tip">' + i + '</span><input type="text" class="form-control" onfocus="this.select();" value="&lt;img src=&quot;' + r[i] + '&quot;/&gt;"></td></tr>', p = p + '<tr><td><span class="Hidove-imageucode-tip">' + i + '</span><input type="text" class="form-control" onfocus="this.select();" value="[img]' + r[i] + '[/img]"></td></tr>', c = c + '<tr><td><span class="Hidove-imageucode-tip">' + i + '</span><input type="text" class="form-control" onfocus="this.select();" value="![](' + r[i] + ')"></td></tr>', d = d + '<tr><td><span class="Hidove-imageucode-tip">' + i + '</span><input type="text" class="form-control" onfocus="this.select();" value="[![' + r[i] + "](" + r[i] + ")](" + r[i] + ')"></td></tr>';
            n += "</tr>", l += "</tr>", p += "</tr>", c += "</tr>", d += "</tr>", $("#urlcodes").append(n), $("#htmlcodes").append(l), $("#bbcodes").append(p), $("#markdowncodes").append(c), $("#markdowncodes2").append(d)
        } else spop({
            template: a.msg,
            autoclose: spopTimeOut,
            style: "error",
            position: "top-center"
        })
    })
}
fileinput();