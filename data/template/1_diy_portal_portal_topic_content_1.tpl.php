<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('portal_topic_content_1');?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em> <?php echo $topic['title'];?>
</div>
</div>
<link id="style_css" rel="stylesheet" type="text/css" href="<?php echo STATICURL;?>topic/t1/style.css?<?php echo VERHASH;?>">
<style id="diy_style" type="text/css"></style>
<div id="widgets">
</div>
<div class="wp">
<!--[diy=diypage]-->
<div id="diypage" class="area">
<div id="frame1" class="frame move-span frame-1 cl">
<div class="frame-title title" id="frame1"><span class="titletext">框架</span></div>
<div id="frame1_left" class="column frame-1-c"></div>
</div>
</div>
<!--[/diy]-->
<?php if($topic['allowcomment']==1) { $data = &$topic;
$common_url = "portal.php?mod=comment&amp;id=$topicid&amp;idtype=topicid";
$form_url = "portal.php?mod=portalcp&amp;ac=comment";
$commentlist = portaltopicgetcomment($topicid);?><?php include template('portal/portal_comment'); } ?>
</div>
<script src="misc.php?mod=diyhelp&action=get&type=topic&diy=yes&topicid=<?php echo $topicid;?>&r=<?php echo random(4); ?>" type="text/javascript" type="text/javascript"></script><?php include template('common/footer'); ?>