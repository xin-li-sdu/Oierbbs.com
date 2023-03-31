<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); if($thread['freemessage']) { ?>
<div id="postmessage_<?php echo $pid;?>" class="t_f"><?php echo $thread['freemessage'];?></div>
<?php } if(empty($_GET['archiver'])) { ?>
<div class="locked">
<a href="javascript:;" class="y viewpay" title="购买主题" onclick="showWindow('pay', 'forum.php?mod=misc&action=pay&tid=<?php echo $_G['tid'];?>&pid=<?php echo $post['pid'];?><?php if(!empty($_GET['from'])) { ?>&from=<?php echo $_GET['from'];?><?php } ?>')">购买主题</a>
<em class="right">
<?php if($thread['payers']) { ?>已有 <?php echo $thread['payers'];?> 人购买&nbsp; <?php } ?>
</em>
<?php if($_G['forum_thread']['price'] > 0) { ?>本主题需向作者支付 <strong><?php echo $thread['price'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?></strong> 才能浏览<?php } if($thread['endtime']) { ?><br />本主题购买截止日期为 <?php echo $thread['endtime'];?>，到期后将免费<?php } ?>
</div>
</div>
<?php } else { if($thread['payers']) { ?>已有 <?php echo $thread['payers'];?> 人购买&nbsp; <?php } if($_G['forum_thread']['price'] > 0) { ?>本主题需向作者支付 <strong><?php echo $thread['price'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?></strong> 才能浏览<?php } if($thread['endtime']) { ?><br />本主题购买截止日期为 <?php echo $thread['endtime'];?>，到期后将免费<?php } } ?>