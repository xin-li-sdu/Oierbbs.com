<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('space_blog_view');
0
|| checktplrefresh('./template/default/home/space_blog_view.htm', './template/default/home/space_header.htm', 1530580871, 'diy', './data/template/1_diy_home_space_blog_view.tpl.php', './template/default', 'home/space_blog_view')
|| checktplrefresh('./template/default/home/space_blog_view.htm', './template/default/common/seccheck.htm', 1530580871, 'diy', './data/template/1_diy_home_space_blog_view.tpl.php', './template/default', 'home/space_blog_view')
|| checktplrefresh('./template/default/home/space_blog_view.htm', './template/default/home/space_userabout.htm', 1530580871, 'diy', './data/template/1_diy_home_space_blog_view.tpl.php', './template/default', 'home/space_blog_view')
|| checktplrefresh('./template/default/home/space_blog_view.htm', './template/default/common/header_common.htm', 1530580871, 'diy', './data/template/1_diy_home_space_blog_view.tpl.php', './template/default', 'home/space_blog_view')
|| checktplrefresh('./template/default/home/space_blog_view.htm', './template/default/home/space_diy.htm', 1530580871, 'diy', './data/template/1_diy_home_space_blog_view.tpl.php', './template/default', 'home/space_blog_view')
|| checktplrefresh('./template/default/home/space_blog_view.htm', './template/default/home/space_header_personalnv.htm', 1530580871, 'diy', './data/template/1_diy_home_space_blog_view.tpl.php', './template/default', 'home/space_blog_view')
;?>
<?php $_G['home_tpl_titles'] = array($blog['subject'], '日志');
$_G['home_tpl_spacemenus'][] = "<a href=\"home.php?mod=space&amp;uid=$space[uid]&amp;do=$do&amp;view=me\">TA 的所有日志</a>";
$_G['home_tpl_spacemenus'][] = "<a href=\"home.php?mod=space&amp;uid=$space[uid]&amp;do=blog&amp;id=$blog[blogid]\">查看日志</a>";
$friendsname = array(1 => '仅好友可见',2 => '指定好友可见',3 => '仅自己可见',4 => '凭密码可见');?><?php if($_G['setting']['homepagestyle']) { $_G[cookie][extstyle] = false;?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2017 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_1_common.css?<?php echo VERHASH;?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_1_home_space.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>', CSSPATH = '<?php echo $_G['setting']['csspath'];?>', DYNAMICURL = '<?php echo $_G['dynamicurl'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php if(empty($_GET['diy'])) { $_GET['diy'] = '';?><?php } if(!isset($topic)) { $topic = array();?><?php } ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href='<?php echo $_G['setting']['csspath'];?><?php echo STYLEID;?>_css_space.css?<?php echo VERHASH;?>' />
<link id="style_css" rel="stylesheet" type="text/css" href="<?php echo STATICURL;?>space/<?php if($space['theme']) { ?><?php echo $space['theme'];?><?php } else { ?>t1<?php } ?>/style.css?<?php echo VERHASH;?>">
<style id="diy_style"><?php echo $space['spacecss'];?></style>
</head>

<body id="space" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>

<?php if($space['self'] && $_GET['diy'] == 'yes' && $do == 'index' ) { ?>
<link rel="stylesheet" type="text/css" href='<?php echo $_G['setting']['csspath'];?><?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>' /><div id="controlpanel" class="cl">
<div id="controlheader" class="cl">
<p class="y">
<span id="navcancel"><a href="javascript:;" onclick="spaceDiy.cancel();return false;">关闭</a></span>
<span id="navsave"><a href="javascript:;" onclick="javascript:spaceDiy.save();return false;">保存</a></span>
<span id="button_redo" class="unusable"><a href="javascript:;" onclick="spaceDiy.redo();return false;" title="重做" onfocus="this.blur();">重做</a></span>
<span id="button_undo" class="unusable"><a href="javascript:;" onclick="spaceDiy.undo();return false;" title="撤销" onfocus="this.blur();">撤销</a></span>
</p>
<ul id="controlnav">
<li id="navstart" class="current"><a href="javascript:" onclick="spaceDiy.getdiy('start');this.blur();return false;">开始</a></li>
<li id="navlayout"><a href="javascript:;" onclick="spaceDiy.getdiy('layout');this.blur();return false;">版式/布局</a></li>
<li id="navstyle"><a href="javascript:;" onclick="spaceDiy.getdiy('style');this.blur();return false;">风格</a></li>
<li id="navblock"><a href="javascript:;" onclick="spaceDiy.getdiy('block');this.blur();return false;">模块</a></li>
<li id="navdiy"><a href="javascript:;" onclick="spaceDiy.getdiy('diy');this.blur();return false;">自定义装扮</a></li>
</ul>
</div>
<div id="controlcontent" class="cl">
<ul id="contentstart" class="content">
  <li><a href="javascript:;" onclick="spaceDiy.getdiy('layout');return false;"><img src="<?php echo STATICURL;?>image/diy/layout.png" />版式</a></li>
  <li><a href="javascript:;" onclick="spaceDiy.getdiy('style');return false;"><img src="<?php echo STATICURL;?>image/diy/style.png" />风格</a></li>
  <li><a href="javascript:;" onclick="spaceDiy.getdiy('block');return false;"><img src="<?php echo STATICURL;?>image/diy/module.png" />添加模块</a></li>
  <li><a href="javascript:;" onclick="spaceDiy.getdiy('diy', 'topicid', '<?php echo $topic['topicid'];?>');return false;"><img src="<?php echo STATICURL;?>image/diy/diy.png" />自定义</a></li>
</ul>
</div>
<div id="cpfooter"><table cellpadding="0" cellspacing="0" width="100%"><tr><td class="l">&nbsp;</td><td class="c">&nbsp;</td><td class="r">&nbsp;</td></tr></table></div>
</div>
<form method="post" autocomplete="off" name="diyform" action="home.php?mod=spacecp&amp;ac=index">
<input type="hidden" name="spacecss" value="" />
<input type="hidden" name="style" value="<?php echo $space['theme'];?>" />
<input type="hidden" name="layoutdata" value="" />
<input type="hidden" name="currentlayout" value="<?php echo $userdiy['currentlayout'];?>" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="diysubmit" value="true"/>
</form><?php } ?>

<div id="toptb" class="cl">
<?php if($_G['uid']) { ?>
<div class="y">
<a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" class="xw1" target="_blank" title="访问我的空间"><?php echo $_G['member']['username'];?></a>
<a href="javascript:;" id="myspace" class="showmenu cur1" onmouseover="showMenu(this.id);">快捷导航</a>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
<a href="home.php?mod=spacecp">设置</a>
<a href="home.php?mod=space&amp;do=pm" id="pm_ntc" target="_blank"<?php if($_G['member']['newpm']) { ?> class="new"<?php } ?>>消息<?php if($_G['member']['newpm']) { ?>(<?php echo $_G['member']['newpm'];?>)<?php } ?></a>
<a href="home.php?mod=space&amp;do=notice" id="myprompt" target="_blank"<?php if($_G['member']['newprompt']) { ?> class="new"<?php } ?>>提醒<?php if($_G['member']['newprompt']) { ?>(<?php echo $_G['member']['newprompt'];?>)<?php } ?></a><span id="myprompt_check"></span>
<?php if($_G['group']['allowmanagearticle'] || $_G['group']['allowdiy']|| getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3) || in_array($_G['uid'], $_G['setting']['ext_portalmanager'])) { ?><a href="portal.php?mod=portalcp">门户管理</a><?php } if($_G['uid'] && $_G['group']['radminid'] > 1) { ?><a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><?php echo $_G['setting']['navs']['2']['navname'];?>管理</a><?php } if($_G['uid'] && ($_G['group']['radminid'] == 1 || getstatus($_G['member']['allowadmincp'], 1))) { ?><a href="admin.php" target="_blank">管理中心</a><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra2'])) echo $_G['setting']['pluginhooks']['global_usernav_extra2'];?>
<a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a>
<?php if($space['self'] && $do == 'index') { ?><a id="diy-tg" href="javascript:openDiy();" title="装扮空间">DIY</a><?php } ?>
</div>
<?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
<div class="y">
<a id="loginuser" class="xw1"><?php echo dhtmlspecialchars($_G['cookie']['loginuser']); ?></a>
<a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)">激活</a>
<a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a>
</div>
<?php } elseif($_G['connectguest']) { ?>
<div class="y">
<a href="member.php?mod=connect" target="_blank">完善帐号信息</a> <a href="member.php?mod=connect&amp;ac=bind" target="_blank">绑定已有帐号</a>
</div>
<?php } else { ?>
<div class="y">
<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>"><?php echo $_G['setting']['reglinkname'];?></a>
<a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)">登录</a>
</div>
<?php } ?>
<div class="z">
<a href="./" title="<?php echo $_G['setting']['bbname'];?>" class="xw1"><?php echo $_G['setting']['bbname'];?></a>
<a href="home.php?mod=space&amp;do=home" id="navs" class="showmenu" onmouseover="showMenu(this.id);">返回首页</a>
</div>
</div>
<?php if($space['status'] == -1 && $_G['adminid'] == 1 ) { ?>
<p class="ptw xw1 xi1 hm"><img src="<?php echo IMGDIR;?>/locked.gif" alt="Locked" class="vm" /> 提示: 作者被禁止或删除 内容自动屏蔽，只有管理员可见</p>
<?php } ?>
<div id="hd" class="wp cl">

<h2 id="spaceinfoshow"><?php space_merge($space, 'field_home'); $space[domainurl] = space_domain($space);getuserdiydata($space);$personalnv = isset($_G['blockposition']['nv']) ? $_G['blockposition']['nv'] : '';?><strong id="spacename" class="mbn">
<?php if($space['spacename']) { ?><?php echo $space['spacename'];?><?php } else { ?><?php echo $space['username'];?>的个人空间<?php } ?>
</strong>
<span class="xs0 xw0">
<a id="domainurl" href="<?php echo $space['domainurl'];?>" onclick="setCopy('<?php echo $space['domainurl'];?>', '空间地址复制成功');return false;"><?php echo $space['domainurl'];?></a>
<a href="javascript:;" onclick="addFavorite(location.href, document.title)">[收藏]</a>
<a id="domainurl" href="<?php echo $space['domainurl'];?>" onclick="setCopy('<?php echo $space['domainurl'];?>', '空间地址复制成功');return false;">[复制]</a>
<?php if(!$space['self']) { if(helper_access::check_module('share')) { ?>
<a id="share_space" href="home.php?mod=spacecp&amp;ac=share&amp;type=space&amp;id=<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">[分享]</a>
<?php } ?>
<a href="home.php?mod=rss&amp;uid=<?php echo $space['uid'];?>">[RSS]</a>
<?php } ?>
</span>
<span id="spacedescription" class="xs1 xw0 mtn"><?php echo $space['spacedescription'];?></span>
</h2><?php if($_G['adminid'] == 1 && empty($space['self'])) { $personalnv['items'] = array(); $personalnv['banitems'] = array(); $personalnv['nvhidden'] = 0;?><?php } $nvclass = !empty($personalnv['nvhidden']) ? ' class="mininv"' : '';?><div id="nv">
<ul<?php echo $nvclass;?>>
<?php if(empty($personalnv['nvhidden'])) { if(empty($personalnv['banitems']['index'])) { if($_G['adminid'] == 1 && $_G['setting']['allowquickviewprofile'] == 1) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=index&amp;view=admin"><?php if(!empty($personalnv['items']['index'])) { ?><?php echo $personalnv['items']['index'];?><?php } else { ?>空间首页<?php } ?></a></li>
<?php } else { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=index"><?php if(!empty($personalnv['items']['index'])) { ?><?php echo $personalnv['items']['index'];?><?php } else { ?>空间首页<?php } ?></a></li>
<?php } } if(empty($personalnv['banitems']['feed']) && helper_access::check_module('feed')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=home&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['feed'])) { ?><?php echo $personalnv['items']['feed'];?><?php } else { ?>动态<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['doing']) && helper_access::check_module('doing')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=doing&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['doing'])) { ?><?php echo $personalnv['items']['doing'];?><?php } else { ?>记录<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['blog']) && helper_access::check_module('blog')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=blog&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['blog'])) { ?><?php echo $personalnv['items']['blog'];?><?php } else { ?>日志<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['album']) && helper_access::check_module('album')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=album&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['album'])) { ?><?php echo $personalnv['items']['album'];?><?php } else { ?>相册<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['follow']) && helper_access::check_module('follow')) { ?>
<li><a href="home.php?mod=follow&amp;uid=<?php echo $space['uid'];?>&amp;do=view"><?php if(!empty($personalnv['items']['follow'])) { ?><?php echo $personalnv['items']['follow'];?><?php } else { ?>广播<?php } ?></a></li>
<?php } if($_G['setting']['allowviewuserthread'] !== false && (empty($personalnv['banitems']['topic']))) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=thread&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['topic'])) { ?><?php echo $personalnv['items']['topic'];?><?php } else { ?>主题<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['share']) && helper_access::check_module('share')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=share&amp;view=me&amp;from=space"><?php if(!empty($personalnv['items']['share'])) { ?><?php echo $personalnv['items']['share'];?><?php } else { ?>分享<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['wall']) && helper_access::check_module('wall')) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=wall"><?php if(!empty($personalnv['items']['wall'])) { ?><?php echo $personalnv['items']['wall'];?><?php } else { ?>留言板<?php } ?></a></li>
<?php } if(empty($personalnv['banitems']['profile'])) { ?>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=profile"><?php if(!empty($personalnv['items']['profile'])) { ?><?php echo $personalnv['items']['profile'];?><?php } else { ?>个人资料<?php } ?></a></li>
<?php } } ?>
</ul>
</div></div>

<?php if(!empty($_G['setting']['plugins']['jsmenu'])) { ?>
<ul class="p_pop h_pop" id="plugin_menu" style="display: none"><?php if(is_array($_G['setting']['plugins']['jsmenu'])) foreach($_G['setting']['plugins']['jsmenu'] as $module) { ?>     <?php if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?>
     <li><?php echo $module['url'];?></li>
     <?php } } ?>
</ul>
<?php } ?>
<?php echo $_G['setting']['menunavs'];?><?php $mnid = getcurrentnav();?><ul id="navs_menu" class="p_pop topnav_pop" style="display:none;"><?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { $nav_showmenu = strpos($nav['nav'], 'onmouseover="showMenu(');?>    <?php $nav_navshow = strpos($nav['nav'], 'onmouseover="navShow(')?>    <?php if($nav_hidden !== false || $nav_navshow !== false) { $nav['nav'] = preg_replace("/onmouseover\=\"(.*?)\"/i", '',$nav['nav'])?>    <?php } ?>
    <?php if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><li <?php echo $nav['nav'];?>></li><?php } } ?>
</ul>
<ul id="myspace_menu" class="p_pop" style="display:none;">
    <li><a href="home.php?mod=space">我的空间</a></li><?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
<li><?php echo $nav['code'];?></li>
<?php } } ?>
</ul>
<div id="ct" class="ct2 wp cl">
<div class="mn">
<div class="bm">
<div class="bm_h">
<?php if($space['self']) { ?><span class="xi2 y"> <a href="home.php?mod=spacecp&amp;ac=blog" class="addnew">发表新日志</a></span><?php } ?>
<h1 class="mt">日志</h1>
</div>
<div class="bm_c">
<?php } else { include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>"><?php echo $space['username'];?></a> <em>&rsaquo;</em>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=blog&amp;view=me">日志</a>
</div>
</div>
<style id="diy_style" type="text/css"></style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div><?php include template('home/space_menu'); ?><div id="ct" class="ct1 wp cl">
<div class="mn">
<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
<div class="bm bw0">
<div class="bm_c">
<?php } ?>

<div class="vw mbm">
<div class="h pbm">
<h1 class="ph" <?php if($blog['magiccolor']) { ?> style="color: <?php echo $_G['colorarray'][$blog['magiccolor']];?>"<?php } ?>>
<?php echo $blog['subject'];?>
<?php if($blog['status'] == 1) { ?>
<span class="xi1">(待审核)</span>
<?php } ?>
</h1>
<p class="xg2">
<?php if($blog['friend']) { ?>
<span class="y"><?php echo $friendsname[$blog['friend']];?></span>
<?php } if($blog['hot']) { ?><strong class="hot">热度 <em><?php echo $blog['hot'];?></em></strong><?php } if($blog['friend']) { ?>
<span class="y"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=<?php echo $do;?>&amp;view=me&amp;friend=<?php echo $blog['friend'];?>" class="xg1"><?php echo $friendsname[$value['friend']];?></a></span>
<?php } if($blog['viewnum']) { ?><span class="xg1">已有 <?php echo $blog['viewnum'];?> 次阅读</span><?php } ?>
<span class="xg1"><?php echo dgmdate($blog[dateline]);?></span>

<?php if($classarr['classname']) { ?><span class="pipe">|</span><span class="xg1">个人分类:<a href="home.php?mod=space&amp;uid=<?php echo $blog['uid'];?>&amp;do=blog&amp;classid=<?php echo $blog['classid'];?>&amp;view=me"><?php echo $classarr['classname'];?></a></span><?php } if($blog['catname']) { ?><span class="pipe">|</span><span class="xg1">系统分类:<a href="home.php?mod=space&amp;do=blog&amp;view=all&amp;catid=<?php echo $blog['catid'];?>"><?php echo $blog['catname'];?></a></span><?php } if($blog['tag']) { ?>
<span class="pipe">|</span>
<span class="ptg xg1"><?php $tagi = 0;?><?php if(is_array($blog['tag'])) foreach($blog['tag'] as $var) { if($tagi) { ?>, <?php } ?><a href="misc.php?mod=tag&amp;id=<?php echo $var['0'];?>" target="_blank"><?php echo $var['1'];?></a><?php $tagi++;?><?php } ?>
</span>
<?php } ?>

</p>
<?php if(!empty($_G['setting']['pluginhooks']['space_blog_title'])) echo $_G['setting']['pluginhooks']['space_blog_title'];?>
</div>

<div id="blog_article" class="d cl"><?php echo adshow("blog/a_b");?><?php echo $blog['message'];?>
</div>
<?php if($blog['friend'] != 3 && !$blog['noreply']) { ?>
<div id="click_div"><?php include template('home/space_click'); ?></div>
<?php } if(!empty($_G['setting']['pluginhooks']['space_blog_share_method'])) { ?>
<div class="tshare cl">
<strong>!viewthread_share_to!:</strong>
<?php if(!empty($_G['setting']['pluginhooks']['space_blog_share_method'])) echo $_G['setting']['pluginhooks']['space_blog_share_method'];?>
</div>
<?php } ?>

<div class="o cl">
<a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=blog&amp;id=<?php echo $blog['blogid'];?>&amp;spaceuid=<?php echo $blog['uid'];?>&amp;handlekey=favoritebloghk_<?php echo $blog['blogid'];?>" id="a_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" class="oshr ofav">收藏</a>
<?php if(helper_access::check_module('share')) { ?><a href="home.php?mod=spacecp&amp;ac=share&amp;type=blog&amp;id=<?php echo $blog['blogid'];?>&amp;handlekey=sharebloghk_<?php echo $blog['blogid'];?>" id="a_share" onclick="showWindow(this.id, this.href, 'get', 0);" class="oshr">分享</a><?php } ?>
<a href="misc.php?mod=invite&amp;action=blog&amp;id=<?php echo $blog['blogid'];?>" id="a_invite" onclick="showWindow('invite', this.href, 'get', 0);" class="oshr oivt">邀请</a>
<?php if(($_G['uid'] == $blog['uid']) && $_G['setting']['magicstatus'] && ($_G['setting']['magics']['call'] || $_G['setting']['magics']['updateline'] || $_G['setting']['magics']['downdateline'] || $_G['setting']['magics']['hot'] || $_G['setting']['magics']['highlight'])) { ?>
<a href="javascript:;" id="usemagic" onmouseover="showMenu(this.id);">使用道具</a>
<span class="pipe">|</span>
<ul id="usemagic_menu" class="p_pop mgcmn" style="display:none;">
<?php if($_G['setting']['magics']['call']) { ?>
<li><a href="home.php?mod=magic&amp;mid=call&amp;idtype=blogid&amp;id=<?php echo $blog['blogid'];?>" id="a_magic_call" onclick="showWindow('magics', this.href, 'get', 0);"><img src="<?php echo STATICURL;?>image/magic/call.small.gif" alt="call" class="vm" /> <?php echo $_G['setting']['magics']['call'];?></a></li>
<?php } if($_G['setting']['magics']['updateline']) { ?>
<li><a href="home.php?mod=magic&amp;mid=updateline&amp;idtype=blogid&amp;id=<?php echo $blog['blogid'];?>" id="a_magic_updateline" onclick="showWindow('magics', this.href, 'get', 0);"><img src="<?php echo STATICURL;?>image/magic/updateline.small.gif" alt="updateline" class="vm" /> <?php echo $_G['setting']['magics']['updateline'];?></a></li>
<?php } if($_G['setting']['magics']['downdateline']) { ?>
<li><a href="home.php?mod=magic&amp;mid=downdateline&amp;idtype=blogid&amp;id=<?php echo $blog['blogid'];?>" id="a_magic_downdateline" onclick="showWindow('magics', this.href, 'get', 0);"><img src="<?php echo STATICURL;?>image/magic/downdateline.small.gif" alt="downdateline" class="vm" /> <?php echo $_G['setting']['magics']['downdateline'];?></a></li>
<?php } if($_G['setting']['magics']['hot']) { ?>
<li><a href="home.php?mod=magic&amp;mid=hot&amp;idtype=blogid&amp;id=<?php echo $blog['blogid'];?>" id="a_magic_hot" onclick="showWindow('magics', this.href, 'get', 0);"><img src="<?php echo STATICURL;?>image/magic/hot.small.gif" alt="hot" class="vm" /> <?php echo $_G['setting']['magics']['hot'];?></a></li>
<?php } if($_G['setting']['magics']['highlight']) { ?>
<li><a href="home.php?mod=magic&amp;mid=highlight&amp;idtype=blogid&amp;id=<?php echo $blog['blogid'];?>" id="a_magic_highlight" onclick="showWindow('magics', this.href, 'get', 0);"><img src="<?php echo STATICURL;?>image/magic/highlight.small.gif" alt="hot" class="vm" /> <?php echo $_G['setting']['magics']['highlight'];?></a></li>
<?php } ?>
</ul>
<?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['space_blog_op_extra'])) echo $_G['setting']['pluginhooks']['space_blog_op_extra'];?>
<?php if($_G['uid'] == $blog['uid'] || checkperm('manageblog')) { ?>
<a href="home.php?mod=spacecp&amp;ac=blog&amp;blogid=<?php echo $blog['blogid'];?>&amp;op=edit">编辑</a><span class="pipe">|</span>
<a href="home.php?mod=spacecp&amp;ac=blog&amp;blogid=<?php echo $blog['blogid'];?>&amp;op=delete&amp;handlekey=delbloghk_<?php echo $blog['blogid'];?>" id="blog_delete_<?php echo $blog['blogid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">删除</a><span class="pipe">|</span>
<?php } if(checkperm('manageblog')) { ?>
IP: <?php echo $blog['postip'];?><?php if($blog['port']) { ?>:<?php echo $blog['port'];?><?php } ?><span class="pipe">|</span>
<a href="home.php?mod=spacecp&amp;ac=blog&amp;blogid=<?php echo $blog['blogid'];?>&amp;op=edithot&amp;handlekey=bloghothk_<?php echo $blog['blogid'];?>" id="blog_hot_<?php echo $blog['blogid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">热度</a><span class="pipe">|</span>
<?php } if(helper_access::check_module('portal')) { if(!$blog['friend'] && !$blog['pushedaid'] && (getstatus($_G['member']['allowadmincp'], 2) || $_G['group']['allowmanagearticle'])) { ?>
<a href="portal.php?mod=portalcp&amp;ac=article&amp;from_idtype=blogid&amp;from_id=<?php echo $blog['blogid'];?>">生成文章</a><span class="pipe">|</span>
<?php } if($_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 5) || getstatus($_G['member']['allowadmincp'], 6)) { ?>
<a href="portal.php?mod=portalcp&amp;ac=portalblock&amp;op=recommend&amp;idtype=blogid&amp;id=<?php echo $blog['blogid'];?>" onclick="showWindow('recommend', this.href, 'get', 0)">模块推送</a><span class="pipe">|</span>
<?php } } if($_G['uid'] != $blog['uid']) { ?>
<a href="javascript:;" onclick="showWindow('miscreport<?php echo $blog['blogid'];?>', 'misc.php?mod=report&rtype=blog&uid=<?php echo $blog['uid'];?>&rid=<?php echo $blog['blogid'];?>', 'get', -1);return false;">举报</a>
<?php } ?>
</div>

</div>

<div class="ct_vw cl">
<div class="ct_vw_sd">
<?php if($otherlist) { ?>
<div class="mbm cl">
<h2 class="mbm ptn pbn bbs"><span class="xs1 xw0 y"><a href="home.php?mod=space&amp;uid=<?php echo $blog['uid'];?>&amp;do=blog&amp;view=me">全部</a></span>作者的其他最新日志</h2>
<ul class="xl xl1 cl"><?php if(is_array($otherlist)) foreach($otherlist as $value) { ?><li>&bull; <a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>&amp;do=blog&amp;id=<?php echo $value['blogid'];?>" target="_blank"><?php echo $value['subject'];?></a></li>
<?php } ?>
</ul>
</div>
<?php } if($newlist) { ?>
<div class="mbm cl">
<h2 class="mbm ptn pbn bbs">热门日志导读</h2>
<ul class="xl xl1 cl"><?php if(is_array($newlist)) foreach($newlist as $value) { ?><li><span class="xl1_elp">&bull; <a href="home.php?mod=space&amp;uid=<?php echo $value['uid'];?>&amp;do=blog&amp;id=<?php echo $value['blogid'];?>" target="_blank"><?php echo $value['subject'];?></a></span></li>
<?php } ?>
</ul>
</div>
<?php } ?>
</div>

<div class="ct_vw_mn">
<div id="div_main_content" class="mbm">
<h3 class="ptn pbn bbs">
<?php if(!empty($list)) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $blog['uid'];?>&amp;do=<?php echo $do;?>&amp;id=<?php echo $id;?>#quickcommentform_<?php echo $id;?>" onclick="if($('comment_message')){$('comment_message').focus();return false;}" class="y xi2 xw0">发表评论</a>
<?php } ?>
评论 (<span id="comment_replynum"><?php echo $blog['replynum'];?></span> 个评论)
</h3>
<?php if($cid) { ?>
<div class="i">
当前只显示与您操作相关的单个评论，<a href="home.php?mod=space&amp;uid=<?php echo $blog['uid'];?>&amp;do=blog&amp;id=<?php echo $blog['blogid'];?>">点击此处查看全部评论</a>
</div>
<?php } ?>
<div id="comment_ul" class="xld xlda"><?php if(is_array($list)) foreach($list as $k => $value) { include template('home/space_comment_li'); } ?>
</div>
</div>
<?php if($multi) { ?><div class="pgs cl mbm"><?php echo $multi;?></div><?php } if(!$blog['noreply'] && helper_access::check_module('blog')) { ?>
<form id="quickcommentform_<?php echo $id;?>" action="home.php?mod=spacecp&amp;ac=comment" method="post" autocomplete="off" onsubmit="ajaxpost('quickcommentform_<?php echo $id;?>', 'return_qcblog_<?php echo $id;?>');doane(event);">
<p>
<span id="comment_face" title="插入表情" onclick="showFace(this.id, 'comment_message');return false;" class="cur1"><img src="<?php echo IMGDIR;?>/facelist.gif" alt="facelist" class="vm" /></span>
<?php if(!empty($_G['setting']['pluginhooks']['space_blog_face_extra'])) echo $_G['setting']['pluginhooks']['space_blog_face_extra'];?>
<?php if($_G['setting']['magicstatus'] && !empty($_G['setting']['magics']['doodle'])) { ?>
<a id="a_magic_doodle" href="home.php?mod=magic&amp;mid=doodle&amp;showid=comment_doodle&amp;target=comment_message" onclick="showWindow(this.id, this.href, 'get', 0)"><img src="<?php echo STATICURL;?>image/magic/doodle.small.gif" alt="doodle" class="vm" /> <?php echo $_G['setting']['magics']['doodle'];?></a>
<?php } ?>
</p>
<div class="tedt mtn mbn">
<div class="area">
<?php if($_G['uid'] || $_G['group']['allowcomment']) { ?>
<textarea id="comment_message" onkeydown="ctrlEnter(event, 'commentsubmit_btn');" name="message" rows="3" class="pt"></textarea>
<?php } else { ?>
<div class="pt hm">您需要登录后才可以评论 <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)" class="xi2">登录</a> | <a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2"><?php echo $_G['setting']['reglinkname'];?></a></div>
<?php } ?>
</div>
</div>
<?php if($secqaacheck || $seccodecheck) { ?><?php
$sectpl = <<<EOF
<sec> <span id="sec<hash>" onclick="showMenu(this.id);"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>
EOF;
?>
<div class="mtm mbm sec"><?php $sechash = !isset($sechash) ? 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'] : $sechash.random(3);
$sectpl = str_replace("'", "\'", $sectpl);?><?php if($secqaacheck) { ?>
<span id="secqaa_q<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updatesecqaa('q<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } if($seccodecheck) { ?>
<span id="seccode_c<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updateseccode('c<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } ?></div>
<?php } ?>
<p class="pns">
<input type="hidden" name="referer" value="home.php?mod=space&amp;uid=<?php echo $blog['uid'];?>&amp;do=<?php echo $do;?>&amp;id=<?php echo $id;?>" />
<input type="hidden" name="id" value="<?php echo $id;?>" />
<input type="hidden" name="idtype" value="blogid" />
<input type="hidden" name="handlekey" value="qcblog_<?php echo $id;?>" />
<input type="hidden" name="commentsubmit" value="true" />
<input type="hidden" name="quickcomment" value="true" />
<button type="submit" name="commentsubmit_btn"value="true" id="commentsubmit_btn" class="pn"<?php if(!$_G['uid']&&!$_G['group']['allowcomment']) { ?> onclick="showWindow(this.id, this.form.action);return false;"<?php } ?>><strong>评论</strong></button>
<span id="return_qcblog_<?php echo $id;?>"></span>
</p>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
</form>
<script type="text/javascript">
function succeedhandle_qcblog_<?php echo $id;?>(url, msg, values) {
if(values['cid']) {
comment_add(values['cid']);
} else {
$('return_qcblog_<?php echo $id;?>').innerHTML = msg;
}
<?php if($sechash) { if($secqaacheck) { ?>
updatesecqaa('<?php echo $sechash;?>');
<?php } if($seccodecheck) { ?>
updateseccode('<?php echo $sechash;?>');
<?php } } ?>
}
</script>
<?php } ?>

<script type="text/javascript">
function addFriendCall(){
var el = $('friendinput');
if(!el || el.value == "")	return;
var s = '<input type="checkbox" name="fusername[]" class="pc" value="'+el.value+'" id="'+el.value+'" checked="checked">';
s += '<label for="'+el.value+'">'+el.value+'</label>';
s += '<br />';
$('friendscall').innerHTML += s;
el.value = '';
}
resizeImg('div_main_content','450');

var elems = selector('dd[class~=magicflicker]');
for(var i=0; i<elems.length; i++){
magicColor(elems[i]);
}
</script>

</div>
</div>

<?php if(!$_G['setting']['homepagestyle']) { ?><!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]--><?php } ?>


</div>
</div>
<?php if($_G['setting']['homepagestyle']) { ?>
</div>
<div class="sd"><div id="pcd" class="bm cl"><?php $encodeusername = rawurlencode($space[username]);?><div class="bm_c">
<div class="hm">
<p><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>" class="avtm"><?php echo avatar($space[uid],middle);?></a></p>
<h2 class="xs2"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>"><?php echo $space['username'];?></a></h2>
</div>
<ul class="xl xl2 cl ul_list">
<?php if($space['self']) { if($_G['setting']['homepagestyle']) { ?>
<li class="ul_diy"><a href="home.php?mod=space&amp;do=index&amp;diy=yes">装扮空间</a></li>
<?php } if(helper_access::check_module('wall')) { ?>
<li class="ul_msg"><a href="home.php?mod=space&amp;do=wall">查看留言</a></li>
<?php } ?>
<li class="ul_avt"><a href="home.php?mod=spacecp&amp;ac=avatar">编辑头像</a></li>
<li class="ul_profile"><a href="home.php?mod=spacecp&amp;ac=profile">更新资料</a></li>
<?php } else { if(helper_access::check_module('follow')) { ?>
<li class="ul_broadcast"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>">查看广播</a></li>
<?php } if(helper_access::check_module('follow') && $space['uid'] != $_G['uid']) { ?>
<li class="ul_flw"><?php $follow = 0;?><?php $follow = C::t('home_follow')->fetch_all_by_uid_followuid($_G['uid'], $space['uid']);?><?php if(!$follow) { ?>
<a id="followmod" onclick="showWindow(this.id, this.href, 'get', 0);" href="home.php?mod=spacecp&amp;ac=follow&amp;op=add&amp;hash=<?php echo FORMHASH;?>&amp;fuid=<?php echo $space['uid'];?>">收听TA</a>
<?php } else { ?>
<a id="followmod" onclick="showWindow(this.id, this.href, 'get', 0);" href="home.php?mod=spacecp&amp;ac=follow&amp;op=del&amp;fuid=<?php echo $space['uid'];?>">取消收听</a>
<?php } ?>
</li>
<?php } require_once libfile('function/friend');$isfriend=friend_check($space[uid]);?><?php if(!$isfriend) { ?>
<li class="ul_add"><a href="home.php?mod=spacecp&amp;ac=friend&amp;op=add&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=addfriendhk_<?php echo $space['uid'];?>" id="a_friend_li_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">加为好友</a></li>
<?php } else { ?>
<li class="ul_ignore"><a href="home.php?mod=spacecp&amp;ac=friend&amp;op=ignore&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=ignorefriendhk_<?php echo $space['uid'];?>" id="a_ignore_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">解除好友</a></li>
<?php } if(helper_access::check_module('wall')) { ?>
<li class="ul_contect"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=wall">给我留言</a></li>
<?php } ?>
<li class="ul_poke"><a href="home.php?mod=spacecp&amp;ac=poke&amp;op=send&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=propokehk_<?php echo $space['uid'];?>" id="a_poke_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">打个招呼</a></li>

<li class="ul_pm"><a href="home.php?mod=spacecp&amp;ac=pm&amp;op=showmsg&amp;handlekey=showmsg_<?php echo $space['uid'];?>&amp;touid=<?php echo $space['uid'];?>&amp;pmid=0&amp;daterange=2" id="a_sendpm_<?php echo $space['uid'];?>" onclick="showWindow('showMsgBox', this.href, 'get', 0)">发送消息</a></li>
<?php } ?>
</ul>
<?php if(checkperm('allowbanuser') || checkperm('allowedituser') || $_G['adminid'] == 1) { ?>
<hr class="da mtn m0">
<ul class="ptn xl xl2 cl">
<?php if(checkperm('allowbanuser') || checkperm('allowedituser')) { ?>
<li>
<?php if(checkperm('allowbanuser')) { ?>
<a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=ban&username=<?php echo $encodeusername;?>&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=ban&uid=<?php echo $space['uid'];?><?php } ?>" id="usermanageli" onmouseover="showMenu(this.id)" class="showmenu" target="_blank">用户管理</a>
<?php } else { ?>
<a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=search&username=<?php echo $encodeusername;?>&submit=yes&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=edit&uid=<?php echo $space['uid'];?><?php } ?>" id="usermanageli" onmouseover="showMenu(this.id)" class="showmenu" target="_blank">用户管理</a>
<?php } ?>
</li>
<?php } if($_G['adminid'] == 1) { ?>
<li><a href="forum.php?mod=modcp&amp;action=thread&amp;op=post&amp;do=search&amp;searchsubmit=1&amp;users=<?php echo $encodeusername;?>" id="umanageli" onmouseover="showMenu(this.id)" class="showmenu">内容管理</a></li>
<?php } ?>
</ul>
<?php if(checkperm('allowbanuser') || checkperm('allowedituser')) { ?>
<ul id="usermanageli_menu" class="p_pop" style="width: 80px; display:none;">
<?php if(checkperm('allowbanuser')) { ?>
<li><a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=ban&username=<?php echo $encodeusername;?>&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=ban&uid=<?php echo $space['uid'];?><?php } ?>" target="_blank">禁止用户</a></li>
<?php } if(checkperm('allowedituser')) { ?>
<li><a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=search&username=<?php echo $encodeusername;?>&submit=yes&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=edit&uid=<?php echo $space['uid'];?><?php } ?>" target="_blank">编辑用户</a></li>
<?php } ?>
</ul>
<?php } if($_G['adminid'] == 1) { ?>
<ul id="umanageli_menu" class="p_pop" style="width: 80px; display:none;">
<li><a href="forum.php?mod=modcp&amp;action=thread&amp;op=post&amp;searchsubmit=1&amp;do=search&amp;users=<?php echo $encodeusername;?>" target="_blank">管理帖子</a></li>
<?php if(helper_access::check_module('doing')) { ?>
<li><a href="admin.php?action=doing&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">管理记录</a></li>
<?php } if(helper_access::check_module('blog')) { ?>
<li><a href="admin.php?action=blog&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">管理日志</a></li>
<?php } if(helper_access::check_module('feed')) { ?>
<li><a href="admin.php?action=feed&amp;searchsubmit=1&amp;detail=1&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">管理动态</a></li>
<?php } if(helper_access::check_module('album')) { ?>
<li><a href="admin.php?action=album&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">管理相册</a></li>
<li><a href="admin.php?action=pic&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">管理图片</a></li>
<?php } if(helper_access::check_module('wall')) { ?>
<li><a href="admin.php?action=comment&amp;searchsubmit=1&amp;detail=1&amp;fromumanage=1&amp;authorid=<?php echo $space['uid'];?>" target="_blank">管理评论</a></li>
<?php } if(helper_access::check_module('share')) { ?>
<li><a href="admin.php?action=share&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">管理分享</a></li>
<?php } if(helper_access::check_module('group')) { ?>
<li><a href="admin.php?action=threads&amp;operation=group&amp;searchsubmit=1&amp;detail=1&amp;search=true&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">群组主题</a></li>
<li><a href="admin.php?action=prune&amp;searchsubmit=1&amp;detail=1&amp;operation=group&amp;fromumanage=1&amp;users=<?php echo $encodeusername;?>" target="_blank">群组帖子</a></li>
<?php } ?>
</ul>
<?php } } ?>
</div>
</div>
</div>
<script type="text/javascript">
function succeedhandle_followmod(url, msg, values) {
var fObj = $('followmod');
if(values['type'] == 'add') {
fObj.innerHTML = '取消收听';
fObj.href = 'home.php?mod=spacecp&ac=follow&op=del&fuid='+values['fuid'];
} else if(values['type'] == 'del') {
fObj.innerHTML = '收听TA';
fObj.href = 'home.php?mod=spacecp&ac=follow&op=add&hash=<?php echo FORMHASH;?>&fuid='+values['fuid'];
}
}
</script><?php } ?>
</div>
</div>

<?php if(!$_G['setting']['homepagestyle']) { ?>
<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>
<?php } if($_G['relatedlinks']) { ?>
<script type="text/javascript">
var relatedlink = [];<?php if(is_array($_G['relatedlinks'])) foreach($_G['relatedlinks'] as $key => $link) { ?>relatedlink[<?php echo $key;?>] = {'sname':'<?php echo $link['name'];?>', 'surl':'<?php echo $link['url'];?>'};
<?php } ?>
relatedlinks('blog_article');
</script>
<?php } if(!empty($_G['cookie']['clearUserdata']) && $_G['cookie']['clearUserdata'] == 'home') { ?>
<script type="text/javascript">saveUserdata('home', '')</script>
<?php } include template('common/footer'); ?>