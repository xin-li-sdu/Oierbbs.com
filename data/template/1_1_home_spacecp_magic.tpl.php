<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('spacecp_magic');?><?php include template('common/header'); if(in_array($op, array('cancelflicker', 'cancelcolor'))) { ?>
<h3 class="flb">
<em id="return_<?php echo $_GET['handlekey'];?>">取消道具效果</em>
<?php if($_G['inajax']) { ?><span><a href="javascript:;" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');" class="flbc" title="关闭">关闭</a></span><?php } ?>
</h3>
<form method="post" autocomplete="off" id="cancelform" name="cancelform" action="home.php?mod=spacecp&amp;ac=magic&amp;op=<?php echo $op;?>&amp;id=<?php echo $_GET['id'];?>&amp;idtype=<?php echo $_GET['idtype'];?>" <?php if($_G['inajax']) { ?>onsubmit="ajaxpost(this.id, 'return_<?php echo $_GET['handlekey'];?>');"<?php } ?>>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>">
<input type="hidden" name="cancelsubmit" value="1" />
<?php if($_G['inajax']) { ?><input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" /><?php } ?>
<div class="c altw">
<p>您确定要取消道具 <?php echo $_G['setting']['magics']['flicker'];?> 的效果吗？</p>
</div>
<p class="o pns">
<button type="submit" class="pn pnc"><strong>确定</strong></button>
</p>
</form>
<?php } elseif($op == 'retiregift') { ?>
<h3 class="flb">
<em id="return_<?php echo $_GET['handlekey'];?>">回收红包</em>
<?php if($_G['inajax']) { ?><span><a href="javascript:;" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');" class="flbc" title="关闭">关闭</a></span><?php } ?>
</h3>
<form method="post" autocomplete="off" id="cancelform" name="cancelform" action="home.php?mod=spacecp&amp;ac=magic&amp;op=<?php echo $op;?>" <?php if($_G['inajax']) { ?>onsubmit="ajaxpost(this.id, 'return_<?php echo $_GET['handlekey'];?>');"<?php } ?>>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>">
<input type="hidden" name="cancelsubmit" value="1" />
<?php if($_G['inajax']) { ?><input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" /><?php } ?>
<div class="c altw">
<p>您确定要回收红包吗？(剩余 <?php echo $leftcredit;?> <?php echo $credittype;?>)</p>
</div>
<p class="o pns">
<button type="submit" class="pn pnc"><strong>确定</strong></button>
</p>
</form>
<?php } include template('common/footer'); ?>