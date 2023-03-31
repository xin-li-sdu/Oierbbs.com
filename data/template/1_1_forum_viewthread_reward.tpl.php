<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class="rwd cl">
<div class="<?php if($_G['forum_thread']['price'] > 0) { ?>rusld<?php } elseif($_G['forum_thread']['price'] < 0) { ?>rsld<?php } ?> z">
<cite><?php echo $rewardprice;?></cite><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['title'];?>
</div>
<div class="rwdn">
<table cellspacing="0" cellpadding="0"><tr><td class="t_f" id="postmessage_<?php echo $post['pid'];?>"><?php echo $post['message'];?></td></tr></table>
<?php if($_G['forum_thread']['price'] > 0 && !$_G['forum_thread']['is_archived']) { ?>
<p class="pns mtw"><button name="answer" value="ture" class="pn" onclick="showWindow('reply', 'forum.php?mod=post&action=reply&fid=<?php echo $_G['fid'];?>&tid=<?php echo $_G['tid'];?><?php if($_GET['from']) { ?>&from=<?php echo $_GET['from'];?><?php } ?>')"><span>我来回答</span></button></p>
<?php } ?>
</div>
</div>

<?php if($post['attachment']) { ?>
<div class="locked">附件: <em><?php if($_G['uid']) { ?>您所在的用户组无法下载或查看附件<?php } elseif($_G['connectguest']) { ?>您需要 <a href="member.php?mod=connect" class="xi2">完善帐号信息</a> 或 <a href="member.php?mod=connect&amp;ac=bind" class="xi2">绑定已有帐号</a> 后才可以下载或查看<?php } else { ?>您需要 <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href);return false;">登录</a> 才可以下载或查看，没有帐号？<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" title="注册帐号"><?php echo $_G['setting']['reglinkname'];?></a><?php } ?></em></div>
<?php } elseif($post['imagelist'] || $post['attachlist']) { ?>
<div class="pattl">
<?php if($post['imagelist']) { ?>
 <?php echo showattach($post, 1); } if($post['attachlist']) { ?>
 <?php echo showattach($post); } ?>
</div>
<?php } $post['attachment'] = $post['imagelist'] = $post['attachlist'] = '';?><?php if($bestpost) { ?>
<div class="rwdbst">
<h3 class="psth">最佳答案</h3>
<div class="pstl">
<div class="psta vm"><a href="home.php?mod=space&amp;uid=<?php echo $comment['authorid'];?>" c="1"><?php echo $bestpost['avatar'];?></a> <a href="home.php?mod=space&amp;uid=<?php echo $bestpost['authorid'];?>" class="xi2 xw1"><?php echo $bestpost['author'];?></a></div>
<div class="psti">
<p class="xi2"><a href="javascript:;" onclick="window.open('forum.php?mod=redirect&goto=findpost&ptid=<?php echo $bestpost['tid'];?>&pid=<?php echo $bestpost['pid'];?>')">查看完整内容</a></p>
<div class="mtn"><?php echo $bestpost['message'];?></div>
</div>
</div>
</div>
<?php } ?>