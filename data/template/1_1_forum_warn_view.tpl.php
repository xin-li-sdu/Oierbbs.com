<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('warn_view');?><?php include template('common/header'); if(empty($_GET['infloat'])) { ?>
<div id="pt" class="bm cl">
<div class="z"><a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em> <?php echo $navigation;?></div>
</div>
<div id="ct" class="wp cl">
<div class="mn">
<div class="bm bw0">
<?php } ?>

<div class="f_c">
<h3 class="flb">
<em id="return_<?php echo $_GET['handlekey'];?>"><?php echo $warnuser;?> 警告记录</em>
<span>
<?php if(!empty($_GET['infloat'])) { ?><a href="javascript:;" class="flbc" onclick="hideWindow('<?php echo $_GET['handlekey'];?>')" title="关闭">关闭</a><?php } ?>
</span>
</h3>
<div class="c floatwrap">
<table class="list" cellspacing="0" cellpadding="0">
<thead>
<tr>
<td>操作者</td>
<td>时间</td>
<td>理由</td>
</tr>
</thead><?php if(is_array($warnings)) foreach($warnings as $warning) { ?><tr>
<td><a href="home.php?mod=space&amp;uid=<?php echo $warning['operatorid'];?>"><?php echo $warning['operator'];?></a></td>
<td><?php echo $warning['dateline'];?></td>
<td><?php echo $warning['reason'];?></td>
</tr>
<?php } ?>
</table>
</div>
</div>
<div class="o pns">
<?php echo $warnuser;?> 已被累计警告 <?php echo $warnnum;?> 次，<?php echo $_G['setting']['warningexpiration'];?> 天内累计被警告 <?php echo $_G['setting']['warninglimit'];?> 次，将被自动禁止发帖 <?php echo $_G['setting']['warningexpiration'];?> 天
</div>

<?php if(empty($_GET['infloat'])) { ?>
</div>
</div>
</div>
<?php } include template('common/footer'); ?>