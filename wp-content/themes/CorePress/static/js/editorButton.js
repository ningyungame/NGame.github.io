(function(b){b("#edit-slug-box").on("click","#btn-link-cntoen",function(a){b("#edit-slug-buttons button").click();a=b("#new-post-slug").val();void 0==a?alert("\u5148\u70b9\u51fb\u7f16\u8f91\u5728\u70b9\u51fb\u8f6c\u6362"):(a=b("#title").val(),b.post(ajaxobj.ajax_url,{action:"corepress_getfirstspell",text:a},function(a){a=JSON.parse(a);1==a.code&&b("#new-post-slug").val(a.data.toLowerCase())}))});tinymce.PluginManager.add("gh-addShortCode",function(a,f){a.on("click",function(a){var c=a.path[1];if("corepress-editbtn"==b(c).attr("id")){var d=b(a.path[2]).text(),e=b(a.path[2]).find("#corepress-editbtn").parent().find("code");editcode(d,e)}else"corepress-delbtn"==b(c).attr("id")&&layer.confirm("\u786e\u5b9a\u5220\u9664\u672c\u884c\u4ee3\u7801\uff1f",{title:"\u5220\u9664\u63d0\u793a",btn:["\u786e\u5b9a","\u53d6\u6d88"]},function(c){b(a.path[2]).remove();layer.close(c)});b(c).find("#corepress-editbtn").remove();b(c).find("#corepress-delbtn").remove();"PRE"==b(a.path[0])[0].tagName&&(b(a.path[0]).append('\x3cdiv id\x3d"corepress-editbtn" title\x3d"\u7f16\u8f91"\x3e\x3cspan class\x3d"dashicons dashicons-welcome-write-blog"\x3e\x3c/span\x3e\x3c/div\x3e'),b(a.path[0]).append('\x3cdiv id\x3d"corepress-delbtn" title\x3d"\u5220\u9664"\x3e\x3cspan class\x3d"dashicons dashicons-no"\x3e\x3c/span\x3e\x3c/div\x3e'))})})})(jQuery);