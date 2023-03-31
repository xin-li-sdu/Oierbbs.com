<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('spacecp_blog');
0
|| checktplrefresh('./template/default/home/spacecp_blog.htm', './template/default/home/editor_image_menu.htm', 1530519740, '1', './data/template/1_1_home_spacecp_blog.tpl.php', './template/default', 'home/spacecp_blog')
|| checktplrefresh('./template/default/home/spacecp_blog.htm', './template/default/common/seccheck.htm', 1530519740, '1', './data/template/1_1_home_spacecp_blog.tpl.php', './template/default', 'home/spacecp_blog')
|| checktplrefresh('./template/default/home/spacecp_blog.htm', './template/default/common/upload.htm', 1530519740, '1', './data/template/1_1_home_spacecp_blog.tpl.php', './template/default', 'home/spacecp_blog')
;?><?php include template('common/header'); if($_GET['op'] == 'delete') { ?>
<h3 class="flb">
<em>删除日志</em>
<?php if($_G['inajax']) { ?><span><a href="javascript:;" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');return false;" class="flbc" title="关闭">关闭</a></span><?php } ?>
</h3>
<form method="post" autocomplete="off" action="home.php?mod=spacecp&amp;ac=blog&amp;op=delete&amp;blogid=<?php echo $blogid;?>">
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>" />
<input type="hidden" name="deletesubmit" value="true" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<div class="c">确定删除指定的日志吗？?</div>
<p class="o pns">
<button type="submit" name="btnsubmit" value="true" class="pn pnc"><strong>确定</strong></button>
</p>
</form>
<?php } elseif($_GET['op'] == 'stick') { ?>
<h3 class="flb">
<em><?php if($stickflag) { ?>置顶日志<?php } else { ?>取消置顶日志<?php } ?></em>
<?php if($_G['inajax']) { ?><span><a href="javascript:;" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');return false;" class="flbc" title="关闭">关闭</a></span><?php } ?>
</h3>
<form method="post" autocomplete="off" action="home.php?mod=spacecp&amp;ac=blog&amp;op=stick&amp;blogid=<?php echo $blogid;?>">
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>" />
<input type="hidden" name="sticksubmit" value="true" />
<input type="hidden" name="stickflag" value="<?php echo $stickflag;?>" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<div class="c"><?php if($stickflag) { ?>确定置顶指定的日志吗？<?php } else { ?>确定要取消置顶指定的日志吗？<?php } ?>?</div>
<p class="o pns">
<button type="submit" name="btnsubmit" value="true" class="pn pnc"><strong>确定</strong></button>
</p>
</form>

<?php } elseif($_GET['op'] == 'addoption') { ?>
<h3 class="flb">
<em>创建分类</em>
<?php if($_G['inajax']) { ?><span><a href="javascript:;" onclick="blogCancelAddOption('<?php echo $_GET['oid'];?>');hideWindow('<?php echo $_GET['handlekey'];?>');return false;" class="flbc" title="关闭">关闭</a></span><?php } ?>
</h3>
<div class="c">
<p class="mtm mbm"><label for="newsort">名称: <input type="text" name="newsort" id="newsort" class="px" size="30" /></label></p>
</div>
<p class="o pns">
<button type="button" name="btnsubmit" value="true" class="pn pnc" onclick="if(blogAddOption('newsort', '<?php echo $_GET['oid'];?>'))hideWindow('<?php echo $_GET['handlekey'];?>');"><strong>创建</strong></button>
</p>
<script type="text/javascript">
$('newsort').focus();
</script>

<?php } elseif($_GET['op'] == 'edithot') { ?>
<h3 class="flb">
<em>调整热度</em>
<?php if($_G['inajax']) { ?><span><a href="javascript:;" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');return false;" class="flbc" title="关闭">关闭</a></span><?php } ?>
</h3>
<form method="post" autocomplete="off" action="home.php?mod=spacecp&amp;ac=blog&amp;op=edithot&amp;blogid=<?php echo $blogid;?>">
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>" />
<input type="hidden" name="hotsubmit" value="true" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<div class="c">
新的热度:<input type="text" name="hot" value="<?php echo $blog['hot'];?>" size="10" class="px" />
</div>
<p class="o pns">
<button type="submit" name="btnsubmit" value="true" class="pn pnc"><strong>确定</strong></button>
</p>
</form>
<?php } else { ?>
<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<?php if($space['self']) { ?>
<a href="home.php?mod=space&amp;do=blog">日志</a>
<?php } else { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>"><?php echo $space['username'];?> 的个人空间</a> <em>&rsaquo;</em>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=blog&amp;view=we">日志</a>
<?php } ?>
<em>&rsaquo;</em>
<?php if($blog['blogid']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $blog['uid'];?>&amp;do=blog&amp;id=<?php echo $blog['blogid'];?>"><?php echo $blog['subject'];?></a> <em>&rsaquo;</em> 编辑日志
<?php } else { ?>
发表日志
<?php } ?>
</div>
</div>

<div id="ct" class="wp cl">
<div class="mn">
<div class="bm cl">
<div class="bm_h">
<h1>
<span class="y xs1 xw0"><a href="javascript:history.go(-1);">返回上一页</a></span>
<?php if($blog['blogid']) { ?>编辑日志<?php } else { ?>发表日志<?php } ?>
</h1>
</div>
<div class="bm_c">
<script src="<?php echo STATICURL;?>image/editor/editor_function.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>home_blog.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<form id="ttHtmlEditor" method="post" autocomplete="off" action="home.php?mod=spacecp&amp;ac=blog&amp;blogid=<?php echo $blog['blogid'];?><?php if($_GET['modblogkey']) { ?>&amp;modblogkey=<?php echo $_GET['modblogkey'];?><?php } ?>" onsubmit="validate(this);" enctype="multipart/form-data">

<?php if(!empty($_G['setting']['pluginhooks']['spacecp_blog_top'])) echo $_G['setting']['pluginhooks']['spacecp_blog_top'];?>
<table cellspacing="0" cellpadding="0" class="tfm">
<tr>
<td><input type="text" id="subject" name="subject" value="<?php echo $blog['subject'];?>" size="60" <?php if($_GET['op'] != 'edit') { ?>onblur="relatekw();"<?php } ?> class="px" style="width: 63%;" /></td>
</tr>
<tr>
<td><div id="icoImg_image_menu" style="display: none" unselectable="on">
<table width="100%" cellpadding="0" cellspacing="0" class="fwin"><tr><td class="t_l"></td><td class="t_c"></td><td class="t_r"></td></tr><tr><td class="m_l">&nbsp;&nbsp;</td><td class="m_c"><div class="mtm mbm">
<ul class="tb tb_s cl" id="icoImg_image_ctrl" style="margin-top:0;margin-bottom:0;">
<li class="y"><span class="flbc" onclick="hideAttachMenu('icoImg_image_menu')">关闭</span></li>
<?php if($_G['basescript'] == 'home' && $_G['group']['allowupload'] || $_G['basescript'] == 'portal') { ?>
<li class="current" id="icoImg_btn_imgattachlist"><a href="javascript:;" hidefocus="true" onclick="switchImagebutton('imgattachlist');">上传图片</a></li>
<?php } if(helper_access::check_module('album')) { ?>
<li id="icoImg_btn_albumlist" <?php if($_G['basescript'] == 'home' && !$_G['group']['allowupload']) { ?> class="current"<?php } ?>><a href="javascript:;" hidefocus="true" onclick="switchImagebutton('albumlist');">相册图片</a></li>
<?php } ?>
<li id="icoImg_btn_www" <?php if($_G['basescript'] == 'home' && !$_G['group']['allowupload'] && !helper_access::check_module('album')) { ?> class="current"<?php } ?>><a href="javascript:;" hidefocus="true" onclick="switchImagebutton('www');">网络图片</a></li>
</ul>
<div class="p_opt popupfix" unselectable="on" id="icoImg_www" <?php if($_G['basescript'] == 'home' && ($_G['group']['allowupload'] || helper_access::check_module('album')) || $_G['basescript'] == 'portal') { ?> style="display: none"<?php } ?>>
<table cellpadding="0" cellspacing="0" width="100%">
<tr class="xg1">
<th>请输入图片地址</th>
<th>宽(可选)</th>
<th>高(可选)</th>
</tr>
<tr>
<td width="74%"><input type="text" id="icoImg_image_param_1" onchange="loadimgsize(this.value)" style="width: 95%;" value="" class="px" autocomplete="off" /></td>
<td width="13%"><input id="icoImg_image_param_2" size="3" value="" class="px p_fre" autocomplete="off" /></td>
<td width="13%"><input id="icoImg_image_param_3" size="3" value="" class="px p_fre" autocomplete="off" /></td>
</tr>
<tr>
<td colspan="3" class="pns ptn">
<button type="button" class="pn pnc" onclick="insertWWWImg();"><strong>提交</strong></button>
</td>
</tr>
</table>
</div>
<div class="p_opt" unselectable="on" id="icoImg_imgattachlist"<?php if($_G['basescript'] == 'home' && !$_G['group']['allowupload']) { ?> style="display: none;"<?php } ?>>
<div class="pbm bbda cl">
<div id="uploadPanel" class="y">
<?php if($_G['basescript'] != 'portal') { ?>
上传到:
<select name="savealbumid" id="savealbumid" class="ps vm" onchange="if(this.value == '-1') {selectCreateTab(0);}">
<option value="0">默认相册</option><?php if(is_array($albums)) foreach($albums as $value) { ?><option value="<?php echo $value['albumid'];?>"><?php echo $value['albumname'];?></option>
<?php } ?>
<option value="-1" style="color:red;">+创建新相册</option>
</select>
<?php } ?>
</div>
<div id="createalbum" class="y" style="display:none">
<input type="text" name="newalbum" id="newalbum" class="px vm" value="请输入相册名称"  onfocus="if(this.value == '请输入相册名称') {this.value = '';}" onblur="if(this.value == '') {this.value = '请输入相册名称';}" />
<button type="button" class="pn pnc" onclick="createNewAlbum();"><span>创建</span></button>
<button type="button" class="pn" onclick="selectCreateTab(1);"><span>取消</span></button>
</div>
<span id="imgSpanButtonPlaceholder"></span>
</div>
<div class="upfilelist upfl bbda">
<div id="imgattachlist">
<?php if($_G['basescript'] == 'portal') { ?><?php echo $article['attachs'];?><?php } ?>
</div>
<div class="fieldset flash" id="imgUploadProgress"></div>
</div>
<p class="notice">点击图片添加到编辑器内容中</p>
</div>
<?php if(helper_access::check_module('album')) { ?>
<div class="p_opt" unselectable="on" id="icoImg_albumlist" <?php if($_G['basescript'] == 'home' && $_G['group']['allowupload'] || $_G['basescript'] == 'portal') { ?> style="display: none;"<?php } ?>>
<div class="upfilelist pbm bbda">
选择相册:
<select name="view_albumid" onchange="picView(this.value, 'albumphoto')" class="ps">
<option value="none">选择相册</option>
<option value="0">默认相册</option><?php if(is_array($albums)) foreach($albums as $value) { ?><option value="<?php echo $value['albumid'];?>"><?php echo $value['albumname'];?></option>
<?php } ?>
</select>
<div id="albumphoto"></div>
</div>
<p class="notice">点击图片添加到编辑器内容中</p>
</div>
<?php } ?>
</div></td><td class="m_r"></td></tr><tr><td class="b_l"></td><td class="b_c"></td><td class="b_r"></td></tr></table>
</div>


<div id="icoAttach_attach_menu" style="display: none" unselectable="on">
<table width="100%" cellpadding="0" cellspacing="0" class="fwin">
<tr>
<td class="t_l"></td>
<td class="t_c"></td>
<td class="t_r"></td>
</tr>
<tr>
<td class="m_l">&nbsp;&nbsp;</td>
<td class="m_c">
<div class="mtm mbm">
<ul class="tb tb_s cl" id="icoAttach_attach_ctrl" style="margin-top:0;margin-bottom:0;">
<li class="y"><span class="flbc" onclick="hideAttachMenu('icoAttach_attach_menu')">关闭</span></li>
<li class="current" id="icoAttach_btn_attachlist"><a href="javascript:;" hidefocus="true" onclick="switchAttachbutton('attachlist');">上传附件</a></li>
</ul>
<div class="p_opt post_tablelist" unselectable="on" id="icoAttach_attachlist">
<div class="pbm bbda">
<span id="spanButtonPlaceholder"></span>
</div>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="attach_tblheader" class="mtn bbs" style="display: none;">
<tr>
<td class="atnu"></td>
<td class="atna pbn">文件名</td>
<td class="atds pbn">文件大小</td>
<td class="attc"></td>
</tr>
</table>
<div class="upfl">
<div id="attachlist"></div>
<div class="fieldset flash" id="fsUploadProgress"></div>
</div>
<div class="notice upnf">
<p id="attach_notice">点击文件名将附件添加到文章中</p>
</div>
</div>
</div>
</td>
<td class="m_r"></td>
</tr>
<tr>
<td class="b_l"></td>
<td class="b_c"></td>
<td class="b_r"></td>
</tr>
</table>
</div>

<iframe name="attachframe" id="attachframe" style="display: none;"></iframe>

<?php if($_G['basescript'] == 'home' && empty($_G['setting']['pluginhooks']['spacecp_blog_upload_extend']) || $_G['basescript'] == 'portal' && empty($_G['setting']['pluginhooks']['portalcp_top_upload_extend'])) { if(empty($_G['uploadjs'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>upload.js?<?php echo VERHASH;?>" type="text/javascript"></script><?php $_G['uploadjs'] = 1;?><?php } ?><script type="text/javascript">
var attachUpload = new SWFUpload({
// Backend Settings
upload_url: "<?php echo $_G['siteurl'];?>misc.php?mod=swfupload&action=swfupload&operation=<?php if($_G['basescript'] == 'portal') { ?>portal<?php } else { ?>album<?php } ?>",
post_params: {"uid" : "<?php echo $_G['uid'];?>", "hash":"<?php echo $swfconfig['hash'];?>"<?php if($_G['basescript'] == 'portal') { ?>,"aid":<?php echo $aid;?>,"catid":<?php echo $catid;?><?php } ?>},

// File Upload Settings
file_size_limit : "<?php echo $swfconfig['max'];?>",	// 100MB
<?php if($_G['basescript'] == 'portal') { ?>
file_types : "<?php echo $swfconfig['attachexts']['ext'];?>",
file_types_description : "<?php echo $swfconfig['attachexts']['depict'];?>",
<?php } else { ?>
file_types : "<?php echo $swfconfig['imageexts']['ext'];?>",
file_types_description : "<?php echo $swfconfig['imageexts']['depict'];?>",
<?php } ?>
file_upload_limit : 0,
file_queue_limit : 0,

// Event Handler Settings (all my handlers are in the Handler.js file)
swfupload_preload_handler : preLoad,
swfupload_load_failed_handler : loadFailed,
file_dialog_start_handler : fileDialogStart,
file_queued_handler : fileQueued,
file_queue_error_handler : fileQueueError,
file_dialog_complete_handler : fileDialogComplete,
upload_start_handler : uploadStart,
upload_progress_handler : uploadProgress,
upload_error_handler : uploadError,
upload_success_handler : uploadSuccess,
upload_complete_handler : uploadComplete,

// Button Settings
button_image_url : "<?php echo IMGDIR;?>/uploadbutton.png",
button_placeholder_id : "spanButtonPlaceholder",
button_width: 100,
button_height: 25,
button_cursor:SWFUpload.CURSOR.HAND,
button_window_mode: "transparent",

custom_settings : {
progressTarget : "fsUploadProgress",
uploadSource: 'portal',
uploadType: 'attach',
imgBoxObj: $('attachlist')
//thumbnail_height: 400,
//thumbnail_width: 400,
//thumbnail_quality: 100
},

// Debug Settings
debug: false
});
var upload = new SWFUpload({
// Backend Settings
upload_url: "<?php echo $_G['siteurl'];?>misc.php?mod=swfupload&action=swfupload&operation=<?php if($_G['basescript'] == 'portal') { ?>portal<?php } else { ?>album<?php } ?>",
post_params: {"uid" : "<?php echo $_G['uid'];?>", "hash":"<?php echo $swfconfig['hash'];?>"<?php if($_G['basescript'] == 'portal') { ?>,"aid":<?php echo $aid;?>,"catid":<?php echo $catid;?><?php } ?>},

// File Upload Settings
file_size_limit : "<?php echo $swfconfig['max'];?>",	// 100MB
file_types : "<?php echo $swfconfig['imageexts']['ext'];?>",
file_types_description : "<?php echo $swfconfig['imageexts']['depict'];?>",
file_upload_limit : 0,
file_queue_limit : 0,

// Event Handler Settings (all my handlers are in the Handler.js file)
swfupload_preload_handler : preLoad,
swfupload_load_failed_handler : loadFailed,
file_dialog_start_handler : fileDialogStart,
file_queued_handler : fileQueued,
file_queue_error_handler : fileQueueError,
file_dialog_complete_handler : fileDialogComplete,
upload_start_handler : uploadStart,
upload_progress_handler : uploadProgress,
upload_error_handler : uploadError,
upload_success_handler : uploadSuccess,
upload_complete_handler : uploadComplete,

// Button Settings
button_image_url : "<?php echo IMGDIR;?>/uploadbutton.png",
button_placeholder_id : "imgSpanButtonPlaceholder",
button_width: 100,
button_height: 25,
button_cursor:SWFUpload.CURSOR.HAND,
button_window_mode: "transparent",

custom_settings : {
progressTarget : "imgUploadProgress",
uploadSource: 'portal',
uploadType: <?php if($_G['basescript'] == 'portal') { ?>'portal'<?php } else { ?>'blog'<?php } ?>,
imgBoxObj: $('imgattachlist')
//thumbnail_height: 400,
//thumbnail_width: 400,
//thumbnail_quality: 100
},

// Debug Settings
debug: false
});
</script>
<?php } else { if($_G['basescript'] == 'home') { ?>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_blog_upload_extend'])) echo $_G['setting']['pluginhooks']['spacecp_blog_upload_extend'];?>
<?php } elseif($_G['basescript'] == 'portal') { ?>
<?php if(!empty($_G['setting']['pluginhooks']['portalcp_top_upload_extend'])) echo $_G['setting']['pluginhooks']['portalcp_top_upload_extend'];?>
<?php } } ?>
<script type="text/javascript">
function switchImagebutton(btn) {
switchButton(btn, 'image');
$('icoImg_image_menu').style.height = '';
doane();
}
function hideAttachMenu(id) {
if($(id)) {
$(id).style.visibility = 'hidden';
}
}

function insertWWWImg() {
var urlObj = $('icoImg_image_param_1');
if(urlObj.value != '') {
var widthObj = $('icoImg_image_param_2');
var heightObj = $('icoImg_image_param_3');
insertImage(urlObj.value, null, widthObj.value, heightObj.value);
urlObj.value = widthObj.value = heightObj.value = '';
}
}
//note 选择图片
function picView(albumid, listid) {
if(albumid == 'none') {
$(listid).innerHTML = '';
} else {
ajaxget('home.php?mod=misc&ac=ajax&op=album&id='+albumid+'&ajaxdiv=albumpic_body', listid);
}
}
function createNewAlbum() {
var inputObj = $('newalbum');
if(inputObj.value == '' || inputObj.value == '请输入相册名称') {
inputObj.value = '请输入相册名称';
} else {
var x = new Ajax();
x.get('home.php?mod=misc&ac=ajax&op=createalbum&inajax=1&name=' + inputObj.value, function(s){
var aid = parseInt(s);
var albumList = $('savealbumid');
var haveoption = false;
for(var i = 0; i < albumList.options.length; i++) {
if(albumList.options[i].value == aid) {
albumList.selectedIndex = i;
haveoption = true;
break;
}
}
if(!haveoption) {
var oOption = document.createElement("OPTION");
oOption.text = trim(inputObj.value);
oOption.value = aid;
albumList.options.add(oOption);
albumList.selectedIndex = albumList.options.length-1;
}
inputObj.value = ''
});
selectCreateTab(1)
}
}
function selectCreateTab(flag) {
var vwObj = $('uploadPanel');
var opObj = $('createalbum');
var selObj = $('savealbumid');
if(flag) {
vwObj.style.display = '';
opObj.style.display = 'none';
selObj.value = selObj.options[0].value;
} else {
vwObj.style.display = 'none';
opObj.style.display = '';
}
}
</script>
<textarea class="pt" name="message" id="uchome-ttHtmlEditor" style="height:100%;width:100%;display:none;border:0"><?php echo $blog['message'];?></textarea>
<div style="border:1px solid #C5C5C5;height:400px;"><iframe src='home.php?mod=editor&charset=<?php echo CHARSET;?>&allowhtml=<?php echo $allowhtml;?>&doodle=<?php if($_G['setting']['magicstatus'] && !empty($_G['setting']['magics']['doodle'])) { ?>1<?php } ?>' name="uchome-ifrHtmlEditor" id="uchome-ifrHtmlEditor" scrolling="no" border="0" frameborder="0" style="width:100%;height:100%;position:relative;"></iframe></div>
</td>
</tr>
</table>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_blog_middle'])) echo $_G['setting']['pluginhooks']['spacecp_blog_middle'];?>
<table cellspacing="0" cellpadding="0" width="100%" class="tfm">

<?php if($_G['setting']['blogcategorystat'] && $categoryselect) { ?>
<tr>
<th>站点分类</th>
<td>
<?php echo $categoryselect;?>
(选择一个站点分类，可以让您的日志被更多的人浏览到)
</td>
</tr>
<?php } ?>

<tr>
<th>个人分类</th>
<td>
<select name="classid" id="classid" onchange="addSort(this)" >
<option value="0">------</option><?php if(is_array($classarr)) foreach($classarr as $value) { if($value['classid'] == $blog['classid']) { ?>
<option value="<?php echo $value['classid'];?>" selected><?php echo $value['classname'];?></option>
<?php } else { ?>
<option value="<?php echo $value['classid'];?>"><?php echo $value['classname'];?></option>
<?php } } if(!$blog['uid'] || $blog['uid']==$_G['uid']) { ?><option value="addoption" style="color:red;">+新建分类</option><?php } ?>
</select>
</td>
</tr>
<tr>
<th>标签</th>
<td class="pns"><input type="text" class="px vm" size="40" id="tag" name="tag" value="<?php echo $blog['tag'];?>" /> <button type="button" name="clickbutton[]" onclick="relatekw();" class="pn vm"><em>自动获取</em></button></td>
</tr>

<?php if($blog['uid'] && $blog['uid']!=$_G['uid']) { $selectgroupstyle='display:none';?></table>
<table style="display:none;">
<?php } ?>

<tr>
<th>隐私设置</th>
<td>
<select name="friend" onchange="passwordShow(this.value);" class="ps">
<option value="0"<?php echo $friendarr['0'];?>>全站用户可见</option>
<option value="1"<?php echo $friendarr['1'];?>>仅好友可见</option>
<option value="2"<?php echo $friendarr['2'];?>>指定好友可见</option>
<option value="3"<?php echo $friendarr['3'];?>>仅自己可见</option>
<option value="4"<?php echo $friendarr['4'];?>>凭密码可见</option>
</select>
<label><input type="checkbox" name="noreply" value="1" class="pc"<?php if($blog['noreply']) { ?> checked="checked"<?php } ?>> 不允许评论</label>
</td>
</tr>
<tbody id="span_password" style="<?php echo $passwordstyle;?>">
<tr>
<th>密码</th>
<td class="pns"><input type="text" name="password" value="<?php echo $blog['password'];?>" size="10" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" class="px" /></td>
</tr>
</tbody>

<?php if($blog['uid'] && $blog['uid']!=$_G['uid']) { ?>
</table>
<table cellspacing="0" cellpadding="0" width="100%" class="tfm">
<?php } ?>

<tbody id="tb_selectgroup" style="<?php echo $selectgroupstyle;?>">
<tr>
<th>指定好友</th>
<td>
<select name="selectgroup" onchange="getgroup(this.value);" class="ps">
<option value="">从好友组选择好友</option><?php if(is_array($groups)) foreach($groups as $key => $value) { ?><option value="<?php echo $key;?>"><?php echo $value;?></option>
<?php } ?>
</select>
<p class="d">多次选择会累加到下面的好友名单</p>
</td>
</tr>
<tr>
<th>&nbsp;</th>
<td>
<textarea name="target_names" id="target_names" rows="3" class="pt"><?php echo $blog['target_names'];?></textarea>
<p class="d">可以填写多个好友名，请用空格进行分割</p>
</td>
</tr>
</tbody>

<?php if(checkperm('manageblog')) { ?>
<tr>
<th>热度</th>
<td>
<input type="text" class="px" name="hot" id="hot" value="<?php echo $blog['hot'];?>" size="5" />
</td>
</tr>
<?php } if(helper_access::check_module('feed')) { ?>
<tr>
<th>动态选项</th>
<td>
<label for="makefeed"><input type="checkbox" name="makefeed" id="makefeed" value="1" class="pc"<?php if(ckprivacy('blog', 'feed')) { ?> checked="checked"<?php } ?>>发送动态 (<a href="home.php?mod=spacecp&amp;ac=privacy&amp;op=feed" target="_blank">更改默认配置</a>)</label>
</td>
</tr>
<?php } if($secqaacheck || $seccodecheck) { ?>
</table><?php $sectpl = '<table cellspacing="0" cellpadding="0" width="100%" class="tfm"><tr><th><sec></th><td class="pns"><sec><div class="d"><sec></div></td></tr></table>';?><?php $sechash = !isset($sechash) ? 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'] : $sechash.random(3);
$sectpl = str_replace("'", "\'", $sectpl);?><?php if($secqaacheck) { ?>
<span id="secqaa_q<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updatesecqaa('q<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } if($seccodecheck) { ?>
<span id="seccode_c<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updateseccode('c<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } ?><table cellspacing="0" cellpadding="0" width="100%" class="tfm">
<?php } ?>
<tr>
<th>&nbsp;</th>
<td>
<button type="submit" id="issuance" class="pn pnc"><strong>保存发布</strong></button>
</td>
</tr>
</table>
<input type="hidden" name="blogsubmit" value="true" />

<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
</form>
<script type="text/javascript">
function validate(obj) {
<?php if($_G['setting']['blogcategorystat'] && $_G['setting']['blogcategoryrequired']) { ?>
var catObj = $("catid");
if(catObj) {
if (catObj.value < 1) {
alert("请选择系统分类");
catObj.focus();
return false;
}
}
<?php } ?>
var makefeed = $('makefeed');
if(makefeed) {
if(makefeed.checked == false) {
if(!confirm("友情提醒：您确定此次发布不发送动态吗？\n有了动态，好友才能及时看到您的更新 ")) {
return false;
}
}
}

if($('seccode')) {
var code = $('seccode').value;
var x = new Ajax();
x.get('home.php?mod=spacecp&ac=common&op=seccode&inajax=1&code=' + code, function(s){
s = trim(s);
if(s.indexOf('succeed') == -1) {
alert(s);
$('seccode').focus();
   		return false;
} else {
edit_save();
return true;
}
});
} else {
edit_save();
return true;
}
}
</script>


<?php if(!empty($_G['setting']['pluginhooks']['spacecp_blog_bottom'])) echo $_G['setting']['pluginhooks']['spacecp_blog_bottom'];?>
</div>
</div>
</div>
</div>
<script type="text/javascript">
if($('subject')) {
$('subject').focus();
}
</script>
<?php } include template('common/footer'); ?>