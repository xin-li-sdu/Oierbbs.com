<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('space_trade');
0
|| checktplrefresh('./template/default/home/space_trade.htm', './template/default/home/space_thread_nav.htm', 1530859956, 'diy', './data/template/1_diy_home_space_trade.tpl.php', './template/default', 'home/space_trade')
;?><?php include template('common/header'); $_G['home_tpl_spacemenus'][] = "<a href=\"home.php?mod=space&amp;do=trade\">商品</a>";?><?php if($_GET['view'] == 'eccredit') { $_G['home_tpl_spacemenus'][] = "<a href=\"home.php?mod=space&amp;uid=$space[uid]&amp;do=$do&amp;view=eccredit\">TA 的信用评价</a>";?><?php } else { $_G['home_tpl_spacemenus'][] = "<a href=\"home.php?mod=space&amp;uid=$space[uid]&amp;do=$do&amp;view=onlyuser\">TA 的所有商品</a>";?><?php } ?>

<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="home.php?mod=space&amp;do=thread">帖子</a> <em>&rsaquo;</em>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=trade&amp;view=me">商品</a>
</div>
</div>

<style id="diy_style" type="text/css"></style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

<div id="ct" class="ct2_a wp cl">
<div class="mn">
<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
<div class="bm bw0">
<?php if((!$_G['uid'] && !$space['uid']) || $space['self']) { ?>
<h1 class="mt"><img alt="trade" src="<?php echo IMGDIR;?>/tradesmall.gif" class="vm" /> 商品</h1>
<?php } if($space['self']) { ?>
<ul class="tb cl">
<li<?php echo $actives['we'];?>><a href="home.php?mod=space&amp;do=trade&amp;view=we">好友出售的商品</a></li>
<li<?php echo $actives['me'];?>><a href="home.php?mod=space&amp;do=trade&amp;view=me">我的商品</a></li>
<li<?php echo $actives['tradelog'];?>><a href="home.php?mod=space&amp;do=trade&amp;view=tradelog">交易记录</a></li>
<li><a href="home.php?mod=space&amp;do=trade&amp;view=eccredit" target="_blank">信用评价</a></li>
<?php if($_G['group']['allowposttrade']) { ?>
<li class="o">
<?php if($_G['setting']['tradeforumid']) { ?>
<a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['setting']['tradeforumid'];?>&amp;special=2">发起新交易</a>
<?php } else { ?>
<a href="forum.php?mod=misc&amp;action=nav&amp;special=2" onclick="showWindow('nav', this.href)">发起新交易</a>
<?php } ?>
</li>
<?php } ?>
</ul>
<?php } else { include template('home/space_menu'); ?><p class="tbmu cl">
<span class="y">
<?php if($_GET['view']=='me') { $actives[onlyuser]=' class="a"';?><?php } if($space['uid'] > 0) { ?>
<a href="home.php?mod=space&amp;do=trade&amp;view=onlyuser"<?php echo $actives['onlyuser'];?>>出售的商品</a><span class="pipe">|</span>
<a href="home.php?mod=space&amp;do=trade&amp;view=eccredit"<?php echo $actives['eccredit'];?>>信用评价</a>
<?php } ?>
</span>
</p>
<?php } if($_GET['view'] == 'tradelog' && $space['uid'] > 0) { ?>
<p class="tbmu bw0">
<a href="home.php?mod=space&amp;do=trade&amp;view=tradelog" <?php echo $orderactives['sell'];?>>卖家交易</a><span class="pipe">|</span>
<a href="home.php?mod=space&amp;do=trade&amp;view=tradelog&amp;type=buy" <?php echo $orderactives['buy'];?>>买家交易</a>
</p>
<?php } if($userlist) { ?>
<p class="tbmu">
按好友查看
<select name="fuidsel" onchange="fuidgoto(this.value);" class="ps">
<option value="">全部好友</option><?php if(is_array($userlist)) foreach($userlist as $value) { ?><option value="<?php echo $value['fuid'];?>"<?php echo $fuid_actives[$value['fuid']];?>><?php echo $value['fusername'];?></option>
<?php } ?>
</select>
</p>
<?php } if($_GET['view'] == 'tradelog') { $selltrades = array('all' => '全部交易', 'trading' => '进行中的', 'attention' => '关注的', 'eccredit' => '评价过的', 'success' => '成功的', 'refund' => '退款的', 'closed' => '失败的', 'unstart' => '未生效的');?><div class="tl tlog">
<table id="list_trade_selles" cellspacing="0" cellpadding="0">
<tr class="th">
<td width="90">商品名称</td>
<td>&nbsp;</td>
<td class="by"><?php if($viewtype == 'sell') { ?>买家<?php } else { ?>卖家<?php } ?></td>
<td class="by">交易金额</td>
<td>
<select onchange="filterTrade(this.value)"><?php if(is_array($selltrades)) foreach($selltrades as $key => $langstr) { ?><option value="<?php echo $key;?>" <?php if($filter == $key) { ?> selected="selected"<?php } ?>><?php echo $langstr;?></option>
<?php } ?>
</select>
<script type="text/javascript">
function filterTrade(value) {
window.location = 'home.php?mod=space&do=trade&view=tradelog&type=<?php echo $viewtype;?>&filter='+value;
}
</script>
</td>
<?php if($filter == 'success' || $filter == 'refund' || $filter == 'eccredit') { ?><td>信用评价</td><?php } ?>
</tr>
<tbody>
<?php if($tradeloglist) { if(is_array($tradeloglist)) foreach($tradeloglist as $tradelog) { ?><tr>
<td>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $tradelog['tid'];?>&amp;do=tradeinfo&amp;pid=<?php echo $tradelog['pid'];?>"><?php if($tradelog['aid']) { ?><img src="<?php echo getforumimg($tradelog['aid']); ?>" width="90" /><?php } else { ?><img src="<?php echo IMGDIR;?>/nophotosmall.gif" /><?php } ?></a>
</td>
<td>
<a href="forum.php?mod=trade&amp;orderid=<?php echo $tradelog['orderid'];?>"><?php echo $tradelog['subject'];?></a><br />
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $tradelog['tid'];?>&amp;do=tradeinfo&amp;pid=<?php echo $tradelog['pid'];?>" class="xg1"><?php echo $tradelog['threadsubject'];?></a>
</td>
<td>
<?php if($item == 'selltrades') { if($tradelog['buyerid']) { ?><a target="_blank" href="home.php?mod=space&amp;uid=<?php echo $tradelog['buyerid'];?>"><?php echo $tradelog['buyer'];?></a><?php } else { ?><?php echo $tradelog['buyer'];?><?php } } else { ?>
<a target="_blank" href="home.php?mod=space&amp;uid=<?php echo $tradelog['sellerid'];?>"><?php echo $tradelog['seller'];?></a>
<?php } ?>
</td>
<td>
<?php if($tradelog['price'] > 0) { ?>
<?php echo $tradelog['price'];?> 元<br/>
<?php } if($tradelog['credit'] > 0) { ?>
<?php echo $extcredits[$creditid]['title'];?> <?php echo $tradelog['credit'];?> <?php echo $extcredits[$creditid]['unit'];?>
<?php } ?>
</td>
<td>
<cite><a target="_blank" href="forum.php?mod=trade&amp;orderid=<?php echo $tradelog['orderid'];?>">
<?php if($tradelog['attend']) { ?>
<b><?php echo $tradelog['status'];?></b>
<?php } else { ?>
<?php echo $tradelog['status'];?>
<?php } ?>
</a></cite>
<em><?php echo $tradelog['lastupdate'];?></em>
</td>
<?php if($filter == 'success' || $filter == 'refund' || $filter == 'eccredit') { ?>
<td>
<?php if($tradelog['ratestatus'] == 3) { ?>
双方已评
<?php } elseif(($item == 'buytrades' && $tradelog['ratestatus'] == 1) || ($item == 'selltrades' && $tradelog['ratestatus'] == 2)) { ?>
等待对方评价
<?php } else { if(($item == 'buytrades' && $tradelog['ratestatus'] == 2) || ($item == 'selltrades' && $tradelog['ratestatus'] == 1)) { ?>对方已评<br /><?php } if($item == 'buytrades') { ?>
<a href="home.php?mod=spacecp&amp;ac=eccredit&amp;op=rate&amp;orderid=<?php echo $tradelog['orderid'];?>&amp;type=0" target="_blank">评价</a>
<?php } else { ?>
<a href="home.php?mod=spacecp&amp;ac=eccredit&amp;op=rate&amp;orderid=<?php echo $tradelog['orderid'];?>&amp;type=1" target="_blank">评价</a>
<?php } } ?>
</td>
<?php } ?>
</tr>
<?php } } else { ?>
<td colspan="<?php if($filter == 'success' || $filter == 'refund' || $filter == 'eccredit') { ?>6<?php } else { ?>5<?php } ?>"><p class="emp">暂无数据</p></td></tr>
<?php } ?>
</tbody>
</table>
</div>
<?php } else { if($list) { ?>
<ul class="ml tradl cl"><?php if(is_array($list)) foreach($list as $key => $value) { ?><li class="bbda">
<p class="u xg1"><a href="home.php?mod=space&amp;uid=<?php echo $value['sellerid'];?>" title="<?php echo $value['seller'];?>" target="_blank"><?php echo $value['seller'];?></a></p>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $value['tid'];?>&amp;do=tradeinfo&amp;pid=<?php echo $value['pid'];?>" class="tn" target="_blank">
<?php if($value['displayorder'] > 0) { ?><em class="hot">推荐商品</em><?php } ?>
<img src="<?php if($value['aid']) { echo getforumimg($value['aid']); } else { ?><?php echo IMGDIR;?>/nophoto.gif<?php } ?>" alt="<?php echo $value['subject'];?>" />
</a>
<?php if($value['expiration'] && $value['expiration'] < $_G['timestamp'] || $value['closed']) { ?>
<p class="stat">- 交易结束 -</p>
<?php } else { if($value['price'] > 0) { ?>
<p class="p">&yen; <em class="xi1"><?php echo $value['price'];?></em></p>
<?php } if($_G['setting']['creditstransextra']['5'] != -1 && $value['credit']) { ?>
<p class="<?php if($value['price'] > 0) { ?>xg1<?php } else { ?>p<?php } ?>"><?php if($value['price'] > 0) { ?>附加 <?php } ?><em class="xi1"><?php echo $value['credit'];?></em> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['5']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['5']]['title'];?></p>
<?php } } ?>
<h4><a href="forum.php?mod=viewthread&amp;tid=<?php echo $value['tid'];?>&amp;do=tradeinfo&amp;pid=<?php echo $value['pid'];?>" title="<?php echo $value['subject'];?>" class="xi2" target="_blank"><?php echo $value['subject'];?></a></h4>
</li>
<?php } if($emptyli) { if(is_array($emptyli)) foreach($emptyli as $value) { ?><li class="bbda">&nbsp;</li>
<?php } } ?>
</ul>
<?php } else { ?>
<div class="emp">还没有相关的商品</div>
<?php } } ?>
</div>
<?php if($hiddennum) { ?>
<p class="mtm">本页有 <?php echo $hiddennum;?> 个商品因待审核而隐藏</p>
<?php } if($multi) { ?><div class="pgs cl"><?php echo $multi;?></div><?php } ?><br />
<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
</div>
<div class="appl"><div class="tbn">
<h2 class="mt bbda">帖子</h2>
<ul>
<li <?php echo $opactives['thread'];?>><a href="forum.php?mod=guide&amp;view=my">全部</a></li>
<li <?php echo $opactives['activity'];?>><a href="home.php?mod=space&amp;do=activity&amp;view=me">活动</a></li>
<li <?php echo $opactives['poll'];?>><a href="home.php?mod=space&amp;do=poll&amp;view=me">投票</a></li>
<li <?php echo $opactives['reward'];?>><a href="home.php?mod=space&amp;do=reward&amp;view=me">悬赏</a></li>
<li <?php echo $opactives['trade'];?>><a href="home.php?mod=space&amp;do=trade&amp;view=me">商品</a></li>
<?php if(!empty($_G['setting']['plugins']['space_thread'])) { if(is_array($_G['setting']['plugins']['space_thread'])) foreach($_G['setting']['plugins']['space_thread'] as $id => $module) { if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<?php if($_GET['id'] == $id) { ?> class="a"<?php } ?>><a href="home.php?mod=space&amp;do=plugin&amp;op=thread&amp;id=<?php echo $id;?>"><?php echo $module['name'];?></a></li><?php } } } ?>
</ul>
</div><div class="drag">
<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
</div>

</div>
</div>

<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>

<script type="text/javascript">
function fuidgoto(fuid) {
var parameter = fuid != '' ? '&fuid='+fuid : '';
window.location.href = 'home.php?mod=space&do=trade&view=we'+parameter;
}
</script><?php include template('common/footer'); ?>