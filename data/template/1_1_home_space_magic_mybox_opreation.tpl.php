<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('space_magic_mybox_opreation');
0
|| checktplrefresh('./template/default/home/space_magic_mybox_opreation.htm', './template/default/common/userabout.htm', 1530496053, '1', './data/template/1_1_home_space_magic_mybox_opreation.tpl.php', './template/default', 'home/space_magic_mybox_opreation')
;?><?php include template('common/header'); if(empty($_GET['infloat'])) { ?>
<div id="pt" class="bm cl">
<div class="z"><a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em> <?php echo $navigation;?></div>
</div>
<div id="ct" class="ct2_a wp cl">
<div class="mn">
<div class="bm bw0">
<?php } ?>

<form id="magicform" method="post" action="home.php?mod=magic&amp;action=mybox&amp;infloat=yes" onsubmit="ajaxpost('magicform', 'return_<?php echo $_GET['handlekey'];?>', 'return_<?php echo $_GET['handlekey'];?>', 'onerror');return false;">
<div class="f_c">
<h3 class="flb">
<em>
<?php if($operation == 'give') { ?>
赠送道具
<?php } elseif($operation == 'drop') { ?>
丢弃道具
<?php } elseif($operation == 'sell') { ?>
出售道具
<?php } elseif($operation == 'use') { ?>
使用道具
<?php } ?>
</em>
<span><?php if(!empty($_GET['infloat'])) { ?><a href="javascript:;" class="flbc" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');return false;" title="关闭">关闭</a><?php } ?></span>
</h3>
<div class="c" id="hkey_<?php echo $_GET['handlekey'];?>">
<div id="return_<?php echo $_GET['handlekey'];?>"></div>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" />
<input type="hidden" name="operation" value="<?php echo $operation;?>" />
<input type="hidden" name="magicid" value="<?php echo $magicid;?>" />
<?php if($operation == 'give') { ?>
<table cellspacing="0" cellpadding="0" class="tfm">
<tr>
<th>&nbsp;</th>
<td>赠送"<?php echo $magic['name'];?>"</td>
</tr>
<?php if($_G['group']['allowmagics'] > 1 ) { ?>
<tr>
<th>赠送给</th>
<td class="hasd cl">
<input type="text" id="selectedusername" name="tousername" size="12" autocomplete="off" value="" class="px p_fre" style="margin-right: 0;" />
<?php if($buddyarray) { ?>
<a href="javascript:;" class="dpbtn" onclick="showselect(this, 'selectedusername', 'selectusername')">&nabla;</a>
<ul id="selectusername" style="display:none"><?php if(is_array($buddyarray)) foreach($buddyarray as $buddy) { ?><li><?php echo $buddy['fusername'];?></li>
<?php } ?>
</ul>
<?php } ?>
</td>
</tr>
<?php } ?>
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
<?php } elseif($operation == 'use') { if($magiclist) { ?>
<p class="mtw mbw">
<select name="magicid" onchange="showWindow('magics', 'home.php?mod=magic&action=mybox&operation=use&&infloat=yes&type=<?php echo $typeid;?>&pid=<?php echo $pid;?>&typeid=<?php echo $typeid;?>&magicid='+this.options[this.selectedIndex].value)" class="chosemagic">
<option value="0">选择道具</option><?php if(is_array($magiclist)) foreach($magiclist as $magics) { ?><option value="<?php echo $magics['magicid'];?>" <?php echo $magicselect[$magics['magicid']];?>><?php echo $magics['name'];?> - <?php echo $magics['description'];?></option>
<?php } ?>
</select>
</p>
<?php } ?>
<dl class="xld cl">
<dd class="m"><img src="<?php echo $magic['pic'];?>" alt="<?php echo $magic['name'];?>"></dd>
<dt class="z">
<?php echo $magic['name'];?>
<div class="pns xw0 cl">
<?php if(method_exists($magicclass, 'show')) { $magicclass->show();?><?php } if($useperoid !== true) { ?>
<p class="xi1"><?php if($magic['useperoid'] == 1) { ?>今天<?php } elseif($magic['useperoid'] == 2) { ?>本周<?php } elseif($magic['useperoid'] == 3) { ?>本月<?php } elseif($magic['useperoid'] == 4) { ?>24 小时内<?php } if($useperoid > 0) { ?>您还能使用 <?php echo $useperoid;?> 次本道具<?php } else { ?>您无法再使用本道具了<?php } ?></p>
<?php } ?>
</div>
</dt>
</dl>
<input type="hidden" name="usesubmit" value="yes" />
<input type="hidden" name="operation" value="use" />
<input type="hidden" name="magicid" value="<?php echo $magicid;?>" />
<?php if(!empty($_GET['idtype']) && !empty($_GET['id'])) { ?>
<input type="hidden" name="idtype" value="<?php echo $_GET['idtype'];?>" />
<input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
<?php } } elseif($operation == 'sell') { ?>
<dl class="xld cl">
<dd class="m"><img src="<?php echo $magic['pic'];?>" alt="<?php echo $magic['name'];?>"></dd>
<dt class="z">
<p class="mtm mbm">出售 <input name="magicnum" type="text" size="2" value="1" class="px pxs" /> 张"<?php echo $magic['name'];?>"</p>
<p class="xw0">
回收价:
<?php if($_G['setting']['extcredits'][$magic['credit']]['unit']) { ?>
<?php echo $_G['setting']['extcredits'][$magic['credit']]['title'];?> <?php echo $discountprice;?> <?php echo $_G['setting']['extcredits'][$magic['credit']]['unit'];?>/张
<?php } else { ?>
<?php echo $discountprice;?> <?php echo $_G['setting']['extcredits'][$magic['credit']]['title'];?>/张
<?php } ?>
</p>
</dt>
</dl>
<input type="hidden" name="operatesubmit" value="yes" />
<?php } elseif($operation == 'drop') { ?>
<dl class="xld cl">
<dd class="m"><img src="<?php echo $magic['pic'];?>" alt="<?php echo $magic['name'];?>"></dd>
<dt class="z">
<p class="mtm mbm">丢弃 <input name="magicnum" type="text" size="2" autocomplete="off" value="1" class="px pxs" /> 张"<?php echo $magic['name'];?>"</p>
<p class="xw0">重量: <?php echo $magic['weight'];?></p>
</dt>
</dl>
<input type="hidden" name="operatesubmit" value="yes" />
<?php } ?>
</div>
</div>

<?php if(empty($_GET['infloat'])) { ?><div class="m_c"><?php } ?>
<div class="o pns" id="hbtn_<?php echo $_GET['handlekey'];?>">
<?php if($operation == 'give') { ?>
<button class="pn pnc" type="submit" name="operatesubmit" id="operatesubmit" value="true" onclick="return confirmMagicOp(e)"><span>赠送</span></button>
<?php } elseif($operation == 'use') { ?>
<button class="pn pnc" type="submit" name="usesubmit" id="usesubmit" value="true"><span>使用</span></button>
<?php } elseif($operation == 'sell') { ?>
<button class="pn pnc" type="submit" name="operatesubmit" id="operatesubmit" value="true" onclick="return confirmMagicOp(e)"><span>出售</span></button>
<?php } elseif($operation == 'drop') { ?>
<button class="pn pnc" type="submit" name="operatesubmit" id="operatesubmit" value="true" onclick="return confirmMagicOp(e)"><span>丢弃</span></button>
<?php } ?>
</div>
<?php if(empty($_GET['infloat'])) { ?></div><?php } ?>
</form>

<script type="text/javascript" reload="1">
function confirmMagicOp(e) {
e = e ? e : window.event;
showDialog('确认该操作', 'confirm', '', 'ajaxpost(\'magicform\', \'return_magics\', \'return_magics\', \'onerror\');');
doane(e);
return false;
}
function succeedhandle_<?php echo $_GET['handlekey'];?>(url, msg) {
hideWindow('<?php echo $_GET['handlekey'];?>');
if(arguments[2] && arguments[2]['avatar']) {
msg += ' <ul class="ml mls cl"><li><a class="avt" target="_blank" href="home.php?mod=space&amp;uid='+arguments[2]['uid']+'"><em class=""></em><img src="<?php echo $_G['setting']['ucenterurl'];?>/avatar.php?uid='+arguments[2]['uid']+'&size=small" /></a><p><a title="admin" href="home.php?mod=space&amp;uid='+arguments[2]['uid']+'" target="_blank"><b>'+arguments[2]['username']+'</b></a></p></li></ul>';
}
<?php if(!$location) { ?>
showDialog(msg, 'notice', null, function () { location.href=url; }, 0);
<?php } else { ?>
showWindow('<?php echo $_GET['handlekey'];?>', 'home.php?<?php echo $querystring;?>');
<?php } ?>
showCreditPrompt();
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