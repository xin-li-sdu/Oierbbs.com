<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('pay');?><?php include template('common/header'); if(empty($_GET['infloat'])) { ?>
<div id="pt" class="bm cl">
<div class="z"><a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em> <?php echo $navigation;?></div>
</div>
<div id="ct" class="wp cl">
<div class="mn">
<div class="bm bw0">
<?php } ?>

<form id="payform" method="post" autocomplete="off" action="forum.php?mod=misc&amp;action=pay&amp;paysubmit=yes&amp;infloat=yes<?php if(!empty($_GET['from'])) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>"<?php if(!empty($_GET['infloat'])) { ?> onsubmit="ajaxpost('payform', 'return_<?php echo $_GET['handlekey'];?>', 'return_<?php echo $_GET['handlekey'];?>', 'onerror');return false;"<?php } ?>>
<div class="f_c">
<h3 class="flb">
<em id="return_<?php echo $_GET['handlekey'];?>">购买主题</em>
<span>
<?php if(!empty($_GET['infloat'])) { ?><a href="javascript:;" class="flbc" onclick="hideWindow('<?php echo $_GET['handlekey'];?>')" title="关闭">关闭</a><?php } ?>
</span>
</h3>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>" />
<input type="hidden" name="tid" value="<?php echo $_G['tid'];?>" />
<?php if(!empty($_GET['infloat'])) { ?><input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" /><?php } ?>
<div class="c">
<table class="list" cellspacing="0" cellpadding="0" style="width:200px">
<tr>
<th>作者</th>
<td><a href="home.php?mod=space&amp;uid=<?php echo $thread['authorid'];?>" target="_blank"><?php echo $thread['author'];?></a></td>
</tr>
<tr>
<th valign="top">售价(<?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?>)</th>
<td><?php echo $thread['price'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?></td>
</tr>
<tr>
<th valign="top">作者所得(<?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?>)</th>
<td><?php echo $thread['netprice'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?></td>
</tr>
<tr>
<th valign="top">购买后余额(<?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?>)</th>
<td><?php echo $balance;?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?></td>
</tr>
</table>
</div>
</div>
<div class="o pns">
<button type="submit" name="paysubmit" class="pn pnc" value="true"><span>提交</span></button>
</div>
</form>

<?php if(!empty($_GET['infloat'])) { ?>
<script type="text/javascript" reload="1">
function succeedhandle_<?php echo $_GET['handlekey'];?>(locationhref) {
<?php if(!empty($_GET['from'])) { ?>
location.href = locationhref;
<?php } else { ?>
ajaxget('forum.php?mod=viewthread&tid=<?php echo $_G['tid'];?>&viewpid=<?php echo $_GET['pid'];?>', 'post_<?php echo $_GET['pid'];?>');
hideWindow('<?php echo $_GET['handlekey'];?>');
showCreditPrompt();
<?php } ?>
}
</script>
<?php } if(empty($_GET['infloat'])) { ?>
</div>
</div>
</div>
<?php } include template('common/footer'); ?>