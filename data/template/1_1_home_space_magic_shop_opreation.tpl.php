<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('space_magic_shop_opreation');
0
|| checktplrefresh('./template/default/home/space_magic_shop_opreation.htm', './template/default/common/userabout.htm', 1530437805, '1', './data/template/1_1_home_space_magic_shop_opreation.tpl.php', './template/default', 'home/space_magic_shop_opreation')
;?>
<?php $_G['home_tpl_titles'] = array('道具');?><?php include template('common/header'); if(empty($_GET['infloat'])) { ?>
<div id="pt" class="bm cl">
<div class="z"><a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em> <?php echo $navigation;?></div>
</div>
<div id="ct" class="ct2_a wp cl">
<div class="mn">
<div class="bm bw0">
<?php } ?>

<form id="magicform" method="post" action="home.php?mod=magic&amp;action=shop&amp;infloat=yes"<?php if($_G['inajax']) { ?> onsubmit="ajaxpost('magicform', 'return_<?php echo $_GET['handlekey'];?>', 'return_<?php echo $_GET['handlekey'];?>', 'onerror');return false;"<?php } ?>>
<div class="f_c">
<h3 class="flb">
<em id="return_<?php echo $_GET['handlekey'];?>">
<?php if($operation == 'buy') { ?>
购买道具
<?php } elseif($operation == 'give') { ?>
赠送道具
<?php } ?>
</em>
<span><?php if(!empty($_GET['infloat'])) { ?><a href="javascript:;" class="flbc" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');return false;" title="关闭">关闭</a><?php } ?></span>
</h3>
<div class="c">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<?php if(!empty($_GET['infloat'])) { ?><input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" /><?php } ?>
<input type="hidden" name="operation" value="<?php echo $operation;?>" />
<input type="hidden" name="mid" value="<?php echo $_GET['mid'];?>" />
<?php if(!empty($_GET['idtype']) && !empty($_GET['id'])) { ?>
<input type="hidden" name="idtype" value="<?php echo $_GET['idtype'];?>" />
<input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
<?php } if($operation == 'buy') { ?>
<dl class="xld cl">
<dd class="m">
<div class="mg_img"><img src="<?php echo $magic['pic'];?>" alt="" /></div>
</dd>
<dt class="z">
<div class="mbm pbm bbda">
<p><?php echo $magic['name'];?></p>
<p class="mtn xw0 xg1"><?php echo $magic['description'];?></p>
<p class="mtm xw0 mbn">售价: <span<?php if($magic['discountprice'] && $magic['price'] != $magic['discountprice']) { ?> style="text-decoration:line-through;"<?php } ?>><?php echo $_G['setting']['extcredits'][$magic['credit']]['title'];?> <span class="xi1 xw1 xs2" id="magicprice"><?php echo $magic['price'];?></span> <?php echo $_G['setting']['extcredits'][$magic['credit']]['unit'];?></span></p>
<?php if($magic['discountprice'] && $magic['price'] != $magic['discountprice']) { ?>
<p class="xw0 mbn">折扣价: <?php echo $_G['setting']['extcredits'][$magic['credit']]['title'];?> <span class="xi1 xw1 xs2" id="discountprice"><?php echo $magic['discountprice'];?></span> <?php echo $_G['setting']['extcredits'][$magic['credit']]['unit'];?></p>
<?php } ?>
<p class="xw0 xg1">我目前有<?php echo $_G['setting']['extcredits'][$magic['credit']]['title'];?> <?php echo getuserprofile('extcredits'.$magic['credit']); ?> <?php echo $_G['setting']['extcredits'][$magic['credit']]['unit'];?></p>
<p class="mtm xw0 mbn">重量: <span class="xi1 xw1 xs2" id="magicweight"><?php echo $magic['weight'];?></span></p>
<p class="xw0 xg1">我的道具包可用容量 <?php echo $allowweight;?></p>
</div>
<div class="xw0">
<p class="mtn xw0">库存: <span class="xi1 xw1 xs2"><?php echo $magic['num'];?></span> 张</p>
<?php if($useperoid !== true) { ?>
<p class="xi1 mtn"><?php if($magic['useperoid'] == 1) { ?>今天<?php } elseif($magic['useperoid'] == 2) { ?>本周<?php } elseif($magic['useperoid'] == 3) { ?>本月<?php } elseif($magic['useperoid'] == 4) { ?>24 小时内<?php } if($useperoid > 0) { ?>您还能使用 <?php echo $useperoid;?> 次本道具<?php } else { ?>您无法再使用本道具了<?php } ?></p>
<?php } if(!$useperm) { ?><p class="xi1 mtn">您无权使用此道具</p><?php } ?>
<p class="mtn">购买 <input id="magicnum" name="magicnum" type="text" size="2" autocomplete="off" value="1" class="px pxs" onkeyup="compute();" /> 张</p>
</div>
</dt>
</dl>
<input type="hidden" name="operatesubmit" value="yes" />
<?php } elseif($operation == 'give') { ?>
<table cellspacing="0" cellpadding="0" class="tfm">
<tr>
<th>&nbsp;</th>
<td>赠送"<?php echo $magic['name'];?>"</td>
</tr>
<tr>
<th>赠送给</th>
<td class="hasd cl">
<input type="text" id="selectedusername" name="tousername" size="12" autocomplete="off" value="" class="px p_fre" style="margin-right: 0;" />
<?php if($buddyarray) { ?>
<a href="javascript:;" onclick="showselect(this, 'selectedusername', 'selectusername')" class="dpbtn">&nabla;</a>
<ul id="selectusername" style="display:none"><?php if(is_array($buddyarray)) foreach($buddyarray as $buddy) { ?><li><?php echo $buddy['fusername'];?></li>
<?php } ?>
</ul>
<?php } ?>
</td>
</tr>
<tr>
<th>数量</th>
<td><input name="magicnum" type="text" size="12" autocomplete="off" value="1" class="px p_fre" /></td>
</tr>
<tr>
<th>赠送留言</th>
<td><textarea name="givemessage" rows="3" class="pt">送您一个<?php echo $magic['name'];?>，<?php echo $magic['description'];?>，希望您能喜欢 </textarea></td>
</tr>
</table>
<input type="hidden" name="operatesubmit" value="yes" />
<?php } ?>
</div>
</div>
<?php if(empty($_GET['infloat'])) { ?><div class="m_c"><?php } ?>
<div class="o pns">
<?php if($operation == 'buy') { ?>
<button class="pn pnc" type="submit" name="operatesubmit" id="operatesubmit" value="true"><span>购买</span></button>
<?php } elseif($operation == 'give') { ?>
<button class="pn pnc" type="submit" name="operatesubmit" id="operatesubmit" value="true" onclick="return confirmMagicOp(e)"><span>赠送</span></button>
<?php } ?>
</div>
<?php if(empty($_GET['infloat'])) { ?></div><?php } ?>
</form>

<script type="text/javascript" reload="1">
function succeedhandle_<?php echo $_GET['handlekey'];?>(url, msg) {
hideWindow('<?php echo $_GET['handlekey'];?>');
<?php if(!$location) { ?>
showDialog(msg, 'notice', null, function () { location.href=url; }, 0);
<?php } else { ?>
showWindow('<?php echo $_GET['handlekey'];?>', 'home.php?<?php echo $querystring;?>');
<?php } ?>
showCreditPrompt();
}
function confirmMagicOp(e) {
e = e ? e : window.event;
showDialog('确认该操作', 'confirm', '', 'ajaxpost(\'magicform\', \'return_magics\', \'return_magics\', \'onerror\');');
doane(e);
return false;
}
function compute() {
var totalcredit = <?php echo getuserprofile('extcredits'.$magic['credit']); ?>;
var totalweight = <?php echo $allowweight;?>;
var magicprice = $('magicprice').innerHTML;
if($('discountprice')) {
magicprice = $('discountprice').innerHTML;
}
if(isNaN(parseInt($('magicnum').value))) {
$('magicnum').value = 0;
return;
}
if(!$('magicnum').value || totalcredit < 1 || totalweight < 1) {
$('magicnum').value = 0;
return;
}
var curprice = $('magicnum').value * magicprice;
var curweight = $('magicnum').value * $('magicweight').innerHTML;
if(curprice > totalcredit) {
$('magicnum').value = parseInt(totalcredit / magicprice);
} else if(curweight > totalweight) {
$('magicnum').value = parseInt(totalweight / $('magicweight').innerHTML);
}
$('magicnum').value = parseInt($('magicnum').value);
}
</script>

<?php if(empty($_GET['infloat'])) { ?>
</div></div>
<div class="appl"><?php if(!empty($_G['setting']['pluginhooks']['global_userabout_top'][$_G['basescript'].'::'.CURMODULE])) echo $_G['setting']['pluginhooks']['global_userabout_top'][$_G['basescript'].'::'.CURMODULE];?>
<ul><?php if(is_array($_G['setting']['spacenavs'])) foreach($_G['setting']['spacenavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>			
<?php echo $nav['code'];?>
<?php } } ?>
</ul>
<?php if(!empty($_G['setting']['pluginhooks']['global_userabout_bottom'][$_G['basescript'].'::'.CURMODULE])) echo $_G['setting']['pluginhooks']['global_userabout_bottom'][$_G['basescript'].'::'.CURMODULE];?></div>
</div>
<?php } include template('common/footer'); ?>