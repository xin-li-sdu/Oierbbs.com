<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('space_magic');
0
|| checktplrefresh('./template/default/home/space_magic.htm', './template/default/home/space_magic_shop.htm', 1530531301, '1', './data/template/1_1_home_space_magic.tpl.php', './template/default', 'home/space_magic')
|| checktplrefresh('./template/default/home/space_magic.htm', './template/default/home/space_magic_mybox.htm', 1530531301, '1', './data/template/1_1_home_space_magic.tpl.php', './template/default', 'home/space_magic')
|| checktplrefresh('./template/default/home/space_magic.htm', './template/default/home/space_magic_log.htm', 1530531301, '1', './data/template/1_1_home_space_magic.tpl.php', './template/default', 'home/space_magic')
;?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="home.php?mod=magic">道具</a>
</div>
</div>
<div id="ct" class="ct2_a wp cl">
<div class="mn">
<div class="bm bw0">
<h1 class="mt">
<img src="<?php echo STATICURL;?>image/feed/magic.gif" alt="道具" class="vm" />
<?php if($action == 'shop') { ?>道具商店
<?php } elseif($action == 'mybox') { ?>我的道具
<?php } elseif($action == 'log') { ?>道具记录
<?php } else { ?>道具<?php } ?>
</h1>
<?php if(!$_G['setting']['magicstatus'] && $_G['adminid'] == 1) { ?>
<div class="emp">道具系统已关闭，仅管理员可以正常使用</div>
<?php } if($action == 'shop') { ?><ul class="tb cl">
<li <?php echo $subactives['index'];?>><a href="home.php?mod=magic&amp;action=shop">默认</a></li>
<li <?php echo $subactives['hot'];?>><a href="home.php?mod=magic&amp;action=shop&amp;operation=hot">热门</a></li>
</ul>
<div class="tbmu">
<?php if($_G['group']['maxmagicsweight']) { ?>
我的道具包容量: <span class="xi1"><?php echo $totalweight;?></span>/<?php echo $_G['group']['maxmagicsweight'];?><span class="pipe">|</span>
<?php } if($magiccredits) { if($_G['group']['magicsdiscount']) { ?>可享受 <strong class="xi1"><?php echo $_G['group']['magicsdiscount'];?></strong> 折优惠<span class="pipe">|</span><?php } ?>
目前有<?php $i = 0;?><?php if(is_array($magiccredits)) foreach($magiccredits as $id) { if($i != 0) { ?>, <?php } ?><?php echo $_G['setting']['extcredits'][$id]['img'];?> <?php echo $_G['setting']['extcredits'][$id]['title'];?> <span class="xi1"><?php echo getuserprofile('extcredits'.$id);; ?></span> <?php echo $_G['setting']['extcredits'][$id]['unit'];?><?php $i++;?><?php } if(($_G['setting']['ec_ratio'] && ($_G['setting']['ec_tenpay_opentrans_chnid'] || $_G['setting']['ec_tenpay_bargainor'] || $_G['setting']['ec_account'])) || $_G['setting']['card']['open']) { ?>
<span class="pipe">|</span><a href="home.php?mod=spacecp&amp;ac=credit&amp;op=buy">充值</a>
<?php } if($_G['setting']['exchangestatus']) { ?>
<span class="pipe">|</span><a href="home.php?mod=spacecp&amp;ac=credit&amp;op=exchange">积分兑换</a>
<?php } } ?>
</div>
<?php if($magiclist) { ?>
<ul class="mtm mgcl cl"><?php if(is_array($magiclist)) foreach($magiclist as $key => $magic) { ?><li>
<div id="magic_<?php echo $magic['identifier'];?>_menu" class="tip tip_4" style="display:none">
<div class="tip_horn"></div>
<div class="tip_c" style="text-align:left"><?php echo $magic['description'];?></div>
</div>
<div id="magic_<?php echo $magic['identifier'];?>" class="mg_img" onmouseover="showMenu({'ctrlid':this.id, 'menuid':'magic_<?php echo $magic['identifier'];?>_menu', 'pos':'12!'});">
<img src="<?php echo $magic['pic'];?>" alt="<?php echo $magic['name'];?>" />
</div>
<p><strong><?php echo $magic['name'];?></strong></p>
<p>
<?php if($_G['setting']['extcredits'][$magic['credit']]['unit']) { ?>
<?php echo $_G['setting']['extcredits'][$magic['credit']]['title'];?> <strong class="xi1 xw1 xs2"><?php echo $magic['price'];?></strong> <?php echo $_G['setting']['extcredits'][$magic['credit']]['unit'];?>/张
<?php } else { ?>
<strong class="xi1 xw1 xs2"><?php echo $magic['price'];?></strong> <?php echo $_G['setting']['extcredits'][$magic['credit']]['title'];?>/张
<?php } if($operation == 'hot') { ?><em class="xg1">(已售出 <?php echo $magic['salevolume'];?> 张)</em><?php } ?>
</p>

<p class="mtn">
<?php if($magic['num'] > 0) { ?>
<a href="home.php?mod=magic&amp;action=shop&amp;operation=buy&amp;mid=<?php echo $magic['identifier'];?>" onclick="showWindow('magics', this.href);return false;" class="xi2 xw1">购买</a>
<?php if($_G['group']['allowmagics'] > 1) { ?>
<em class="pipe">|</em> <a href="home.php?mod=magic&amp;action=shop&amp;operation=give&amp;mid=<?php echo $magic['identifier'];?>" onclick="showWindow('magics', this.href);return false;" class="xi2">赠送</a>
<?php } } else { ?>
<span class="xg1">此道具缺货</span>
<?php } ?>
</p>
</li>
<?php } ?>
</ul>
<?php if($multipage) { ?><div class="pgs cl mtm"><?php echo $multipage;?></div><?php } } else { ?>
<p class="emp">暂无数据</p>
<?php } } elseif($action == 'mybox') { if($_G['group']['magicsdiscount'] || $_G['group']['maxmagicsweight']) { if($_G['group']['maxmagicsweight']) { ?>
<p class="tbmu">我的道具包容量: <span class="xi1"><?php echo $totalweight;?></span>/<?php echo $_G['group']['maxmagicsweight'];?></p>
<?php } } if($mymagiclist) { ?>
<ul class="mtm mgcl cl"><?php if(is_array($mymagiclist)) foreach($mymagiclist as $key => $mymagic) { ?><li>
<div id="magic_<?php echo $mymagic['identifier'];?>_menu" class="tip tip_4" style="display:none">
<div class="tip_horn"></div>
<div class="tip_c" style="text-align:left"><?php echo $mymagic['description'];?></div>
</div>
<div id="magic_<?php echo $mymagic['identifier'];?>" class="mg_img" onmouseover="showMenu({'ctrlid':this.id, 'menuid':'magic_<?php echo $mymagic['identifier'];?>_menu', 'pos':'12!'});">

<img src="<?php echo $mymagic['pic'];?>" alt="<?php echo $mymagic['name'];?>" />

</div>
<p><strong><?php echo $mymagic['name'];?></strong></p>
<p>数量: <font class="xi1 xw1"><?php echo $mymagic['num'];?></font>, 总重量: <font class="xi1"><?php echo $mymagic['weight'];?></font></p>
<p class="mtn">
<?php if($mymagic['useevent']) { ?>
<a href="home.php?mod=magic&amp;action=mybox&amp;operation=use&amp;magicid=<?php echo $mymagic['magicid'];?>" onclick="showWindow('magics', this.href, 'get', 0);return false;" class="xi2"><strong>使用</strong></a><em class="pipe">|</em>
<?php } if($_G['group']['allowmagics'] > 1) { ?>
<a href="home.php?mod=magic&amp;action=mybox&amp;operation=give&amp;magicid=<?php echo $mymagic['magicid'];?>" onclick="showWindow('magics', this.href, 'get', 0);return false;" class="xi2">赠送</a><em class="pipe">|</em>
<?php } if($_G['setting']['magicdiscount']) { ?>
<a href="home.php?mod=magic&amp;action=mybox&amp;operation=sell&amp;magicid=<?php echo $mymagic['magicid'];?>" onclick="showWindow('magics', this.href, 'get', 0);return false;" class="xi2">出售</a>
<?php } else { ?>
<a href="home.php?mod=magic&amp;action=mybox&amp;operation=drop&amp;magicid=<?php echo $mymagic['magicid'];?>" onclick="showWindow('magics', this.href, 'get', 0);return false;" class="xi2">丢弃</a>
<?php } ?>
</p>
</li>
<?php } ?>
</ul>
<?php if($multipage) { ?><div class="pgs cl mtm"><?php echo $multipage;?></div><?php } } else { ?>
<p class="emp">暂无数据</p>
<?php } } elseif($action == 'log') { ?><ul class="mbm tb cl">
<li <?php echo $subactives['uselog'];?>><a href="home.php?mod=magic&amp;action=log&amp;operation=uselog">使用记录</a></li>
<li <?php echo $subactives['buylog'];?>><a href="home.php?mod=magic&amp;action=log&amp;operation=buylog">购买记录</a></li>
<li <?php echo $subactives['givelog'];?>><a href="home.php?mod=magic&amp;action=log&amp;operation=givelog">赠送记录</a></li>
<li <?php echo $subactives['receivelog'];?>><a href="home.php?mod=magic&amp;action=log&amp;operation=receivelog">获赠记录</a></li>
</ul>
<?php if($operation == 'uselog') { if($loglist) { ?>
<table summary="使用记录" cellspacing="0" cellpadding="0" class="dt">
<tr>
<th>名称</th>
<th width="20%">使用时间</th>
<th width="20%">使用对象</th>
</tr><?php if(is_array($loglist)) foreach($loglist as $log) { ?><tr>
<td><?php echo $log['name'];?></td>
<td><?php echo $log['dateline'];?></td>
<td>
<?php if($log['idtype'] == 'uid') { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $log['targetid'];?>" target="_blank">查看对象</a>
<?php } elseif($log['idtype'] == 'tid') { ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $log['targetid'];?>" target="_blank">查看对象</a>
<?php } elseif($log['idtype'] == 'pid') { ?>
<a href="forum.php?mod=redirect&amp;pid=<?php echo $log['targetid'];?>&amp;goto=findpost" target="_blank">查看对象</a>
<?php } elseif($log['idtype'] == 'sell') { ?>
出售
<?php } elseif($log['idtype'] == 'drop') { ?>
丢弃
<?php } ?>
</td>
</tr>
<?php } ?>
</table>
<?php if($multipage) { ?><div class="pgs cl mtm"><?php echo $multipage;?></div><?php } } else { ?>
<p class="emp">暂无数据</p>
<?php } } elseif($operation == 'buylog') { if($loglist) { ?>
<table summary="购买记录" cellspacing="0" cellpadding="0" class="dt">
<tr>
<th>名称</th>
<th width="20%">购买时间</th>
<th width="20%">购买数量</th>
<th width="20%">购买价格</th>
</tr><?php if(is_array($loglist)) foreach($loglist as $log) { ?><tr>
<td><?php echo $log['name'];?></td>
<td><?php echo $log['dateline'];?></td>
<td><?php echo $log['amount'];?></td>
<td><?php echo $log['price'];?> <?php echo $_G['setting']['extcredits'][$log['credit']]['unit'];?><?php echo $_G['setting']['extcredits'][$log['credit']]['title'];?></td>
</tr>
<?php } ?>
</table>
<?php if($multipage) { ?><div class="pgs cl mtm"><?php echo $multipage;?></div><?php } } else { ?>
<p class="emp">暂无数据</p>
<?php } } elseif($operation == 'givelog') { if($loglist) { ?>
<table summary="赠送记录" cellspacing="0" cellpadding="0" class="dt">
<tr>
<th>名称</td>
<th width="20%">赠送时间</th>
<th width="20%">赠送数量</th>
<th width="20%">赠送给</th>
</tr><?php if(is_array($loglist)) foreach($loglist as $log) { ?><tr>
<td><?php echo $log['name'];?></td>
<td><?php echo $log['dateline'];?></td>
<td><?php echo $log['amount'];?></td>
<td><a href="home.php?mod=space&amp;uid=<?php echo $log['targetuid'];?>" target="_blank"><?php echo $log['username'];?></a></td>
</tr>
<?php } ?>
</table>
<?php if($multipage) { ?><div class="pgs cl mtm"><?php echo $multipage;?></div><?php } } else { ?>
<p class="emp">暂无数据</p>
<?php } } elseif($operation == 'receivelog') { if($loglist) { ?>
<table summary="获赠记录" cellspacing="0" cellpadding="0" class="dt">
<tr>
<th>名称</th>
<th width="20%">获赠时间</th>
<th width="20%">获赠数量</th>
<th width="20%">赠送人</th>
</tr><?php if(is_array($loglist)) foreach($loglist as $log) { ?><tr>
<td><a href="home.php?mod=magic&amp;action=index&amp;operation=buy&amp;magicid=<?php echo $log['magicid'];?>" target="_blank"><?php echo $log['name'];?></a></td>
<td><?php echo $log['dateline'];?></td>
<td><?php echo $log['amount'];?></td>
<td><a href="home.php?mod=space&amp;uid=<?php echo $log['uid'];?>" target="_blank"><?php echo $log['username'];?></a></td>
</tr>
<?php } ?>
</table>
<?php if($multipage) { ?><div class="pgs cl mtm"><?php echo $multipage;?></div><?php } } else { ?>
<p class="emp">暂无数据</p>
<?php } } } ?>
</div>
</div>
<div class="appl">
<div class="tbn">
<h2 class="mt bbda">道具</h2>
<ul>
<?php if($_G['group']['allowmagics']) { ?><li<?php echo $actives['shop'];?>><a href="home.php?mod=magic&amp;action=shop">道具商店</a></li><?php } ?>
<li<?php echo $actives['mybox'];?>><a href="home.php?mod=magic&amp;action=mybox">我的道具</a></li>
<li<?php echo $actives['log'];?>><a href="home.php?mod=magic&amp;action=log&amp;operation=uselog">道具记录</a></li>
<?php if(!empty($_G['setting']['pluginhooks']['magic_nav_extra'])) echo $_G['setting']['pluginhooks']['magic_nav_extra'];?>
</ul>
</div>
</div>
</div><?php include template('common/footer'); ?>