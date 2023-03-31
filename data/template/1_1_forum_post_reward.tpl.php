<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class="exfm cl">
<?php if($_GET['action'] == 'newthread') { ?>
<label for="rewardprice">悬赏价格: </label>
<input type="text" name="rewardprice" id="rewardprice" class="px pxs" size="6" onkeyup="getrealprice(this.value)" value="<?php echo $_G['group']['minrewardprice'];?>" tabindex="1" />
<?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['title'];?>
, 税后支付 <strong id="realprice">0</strong> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['title'];?>
<p class="mtn xg1">
价格不能低于 <?php echo $_G['group']['minrewardprice'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['unit'];?>
<?php if($_G['group']['maxrewardprice'] > 0) { ?>, 不能高于 <?php echo $_G['group']['maxrewardprice'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['unit'];?><?php } ?>
, 您有 <?php echo getuserprofile('extcredits'.$_G['setting']['creditstransextra']['2']);; ?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['title'];?>
</p>
<?php } elseif($_GET['action'] == 'edit') { if($isorigauthor) { if($thread['price'] > 0) { ?>
<label for="rewardprice">悬赏价格:</label>
<input type="text" name="rewardprice" id="rewardprice" class="px pxs" onkeyup="getrealprice(this.value)" size="6" value="<?php echo $rewardprice;?>" tabindex="1" />
<?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['title'];?>
, 税后追加 <strong id="realprice">0</strong> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['title'];?>
<p class="mtn xg1">
价格不能低于 <?php echo $_G['group']['minrewardprice'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['unit'];?>
<?php if($_G['group']['maxrewardprice'] > 0) { ?>, 不能高于 <?php echo $_G['group']['maxrewardprice'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['unit'];?><?php } ?>
, 您有 <?php echo getuserprofile('extcredits'.$_G['setting']['creditstransextra']['2']);; ?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['title'];?>
</p>
<?php } else { ?>
已解决的悬赏
<input type="hidden" name="rewardprice" value="<?php echo $rewardprice;?>" tabindex="1" />
<?php } } else { if($thread['price'] > 0) { ?>
悬赏价格: <?php echo $rewardprice;?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['2']]['title'];?>
<?php } else { ?>
已解决的悬赏
<?php } } } if($_G['setting']['rewardexpiration'] > 0) { ?>
<p class="mtn xg1"><?php echo $_G['setting']['rewardexpiration'];?> 天后如果您仍未设置最佳答案，版主有权代为您选择</p>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['post_reward_extra'])) echo $_G['setting']['pluginhooks']['post_reward_extra'];?>
</div>

<script type="text/javascript" reload="1">
function getrealprice(price){
if(!price.search(/^\d+$/) ) {
n = Math.ceil(parseInt(price) + price * <?php echo $_G['setting']['creditstax'];?>);
if(price > 32767) {
$('realprice').innerHTML = '<b>售价不能高于 32767</b>';
}<?php if($_GET['action'] == 'edit') { ?>	else if(price < <?php echo $rewardprice;?>) {
$('realprice').innerHTML = '<b>不能降低悬赏积分</b>';
}<?php } ?> else if(price < <?php echo $_G['group']['minrewardprice'];?> || (<?php echo $_G['group']['maxrewardprice'];?> > 0 && price > <?php echo $_G['group']['maxrewardprice'];?>)) {
$('realprice').innerHTML = '<b>售价超出范围</b>';
} else {
$('realprice').innerHTML = n;
}
}else{
$('realprice').innerHTML = '<b>填写无效</b>';
}
}
if($('rewardprice')) {
getrealprice($('rewardprice').value)
}

EXTRAFUNC['validator']['special'] = 'validateextra';
function validateextra() {
if($('postform').rewardprice && $('postform').rewardprice.value == '') {
showDialog('抱歉，请输入悬赏价格', 'alert', '', function () { $('postform').rewardprice.focus() });
return false;
}
return true;
}
</script>