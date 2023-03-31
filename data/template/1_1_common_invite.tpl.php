<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('invite');?><?php include template('common/header'); if(!$_G['inajax']) { ?>
<div id="pt" class="bm cl">
<div class="z"><a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em> 邀请</div>
</div>
<div id="ct" class="wp cl">
<div class="mn">
<div class="bm bw0">
<h1 class="mt"><?php if($at != 1) { ?>邀请好友<?php } ?><?php echo $invitename;?></h1>
<div class="usd usd2">
<?php } else { ?>
<div id="main_messaqge">
<h3 class="flb">
<em id="returnmessage5"><?php if($at != 1) { ?>邀请好友<?php } ?><?php echo $invitename;?></em>
<span>
<?php if($_G['inajax']) { ?><a href="javascript:;" class="flbc" onclick="hideWindow('invite')" title="关闭">关闭</a><?php } ?>
</span>
</h3>
<div class="usd">
<?php } ?>
<ul class="cl">
<li>
<p>按好友用户名查找</p>
<p class="mtn"><input type="text" name="username" size="25" id="username" class="px" value="" autocomplete="off" /> <button class="pn pnc" onclick="clearlist=1;getUser();"><span>查找</span></button></p>
<script type="text/javascript">
var invitefs;
var clearlist = 0;
</script>
</li>
<li>
<p>按好友分组查找</p>
<p class="mtn">
<select class="ps" onchange="clearlist=1;getUser(1, this.value)">
<option value="-1">全部好友</option>
<?php if($at == 1 && $_G['group']['allowat']) { ?>
<option value="-2">我关注的</option>
<?php } if(is_array($friendgrouplist)) foreach($friendgrouplist as $groupid => $group) { ?><option value="<?php echo $groupid;?>"><?php echo $group;?></option>
<?php } ?>
</select>
</p>
</li>
</ul>
<div class="tbx">
<span class="y">还能选择(<strong id="remainNum">0</strong>)个</span>
<span id="showUser_0" onclick="invitefs.showUser(0)" class="a brs">全部好友</span>
<span id="showUser_1" onclick="invitefs.showUser(1)">已选(<strong id="selectNum">0</strong>)</span>
<span id="showUser_2" onclick="invitefs.showUser(2)">未选(<cite id="unSelectTab">0</cite>)</span>
</div>
</div>
<ul class="usl cl<?php if(empty($_G['inajax'])) { ?> usl2<?php } ?>" id="friends"></ul>
<script type="text/javascript" reload="1">
var page = 1;
var gid = -1;
var showNum = 0;
var haveFriend = true;
var username = '';
function getUser(pageId, gid) {
page = parseInt(pageId);
gid = isUndefined(gid) ? -1 : parseInt(gid);
username = $('username').value;
var x = new Ajax();
x.get('home.php?mod=spacecp&ac=friend&op=getinviteuser&inajax=1&page='+ page + '&gid=' + gid + '&at=<?php echo $at;?>&username='+ username + '&' + Math.random(), function(s) {
var data = eval('('+s+')');
var singlenum = parseInt(data['singlenum']);
var maxfriendnum = parseInt(data['maxfriendnum']);
invitefs.addDataSource(data, clearlist);
haveFriend = singlenum && singlenum == 20 ? true : false;
if(singlenum && invitefs.allNumber < 20 && invitefs.allNumber < maxfriendnum && maxfriendnum > 20 && haveFriend) {
page++;
clearlist = 0;
getUser(page);
}
});
}
function selector() {
var parameter = {'searchId':'username', 'showId':'friends', 'formId':'inviteform', 'showType':1, 'handleKey':'invitefs', 'maxSelectNumber':'20', 'selectTabId':'selectNum', 'unSelectTabId':'unSelectTab', 'maxSelectTabId':'remainNum'};
<?php if($at == 1 && $_G['group']['allowat']) { ?>
parameter.maxSelectNumber = <?php echo $maxselect;?>;
<?php } ?>
invitefs = new friendSelector(parameter);
<?php if($inviteduids) { ?>
invitefs.addFilterUser([<?php echo $inviteduids;?>]);
<?php } ?>
var listObj = $('friends');
listObj.onscroll = function() {
clearlist = 0;
if(this.scrollTop >= (this.scrollHeight/5-5)) {
page++;
gid = isUndefined(gid) ? -1 : parseInt(gid);
if(haveFriend) {
getUser(page, gid);
}
}
}
getUser(page);
}
if($('friendselector_js')) {
selector();
} else {
var scriptNode = document.createElement("script");
scriptNode.id = 'friendselector_js';
scriptNode.type = "text/javascript";
scriptNode.src = '<?php echo $_G['setting']['jspath'];?>home_friendselector.js?<?php echo VERHASH;?>';
if(BROWSER.ie) {
scriptNode.onreadystatechange = function () {
if(scriptNode.readyState == 'loaded' || scriptNode.readyState == 'complete') {
selector();
}
}
} else {
scriptNode.onload = selector;
}
$('append_parent').appendChild(scriptNode);
}
</script>
<form method="post" autocomplete="off" name="invite" id="inviteform" action="misc.php?mod=invite&amp;action=<?php echo $_GET['action'];?>&amp;id=<?php echo $id;?><?php if($_GET['activity']) { ?>&amp;activity=1<?php } ?>">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>" />
<?php if(!empty($_G['inajax'])) { ?><input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" /><?php } ?>
<p class="o pns<?php if(empty($_G['inajax'])) { ?> mtw<?php } ?>"><button type="submit" class="pn pnc" name="invitesubmit" value="yes"><strong>发送邀请</strong></button></p>
</form>
</div>
<?php if(!$_G['inajax']) { ?>
</div>
</div>
<?php } include template('common/footer'); ?>