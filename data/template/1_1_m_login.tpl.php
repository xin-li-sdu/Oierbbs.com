<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('login');?><?php include template('m/header'); ?><link rel="stylesheet" href="<?php echo $_G['siteurl'];?><?php echo $_G['style']['tpldir'];?>/m/css/login.css?<?php echo $jsglobal['jsversion'];?>">
<div>
<div>
<div class="logo_dz">
<img id="siteLogo" width="78" height="78" alt="logo">
    <h2 id="siteName"></h2>
</div>
<div class="qqpwd_set">
<form id="loginBox" class="qqpwd_set">
<input type="hidden" name="referer" id="referer" value="<?php echo dhtmlspecialchars($_GET['referer']); ?>">
<p>
<label class="qq_label">帐 号：</label>
<input type="text" name="username" id="username" placeholder="请输入帐户" value="">
</p>
<p>
<label class="pwd_label">密 码：</label>
<input type="password" name="password" id="password" placeholder="请输入密码">
</p>
<p>
<label class="qq_label">答 案：</label>
<input type="text" id="questionclick" placeholder="安全提问(未设置请忽略)" value="">
<input type="hidden" name="questionid" id="questionid" value="0">
</p>
<p id="qainput" style="display:none">
<label class="qq_label">答 案：</label>
<input type="text" name="answer" id="answer" placeholder="请输入答案">
</p>
<div class="log_bar"><input id="loginBtn" type="button" value="登录" class="lb_lq_btn"></div>
<div class="qqLoginBox" style="display:none">
<p>或使用已绑定的QQ帐号登录</p>
<a href="javascript:;" class="qqLogin">QQ帐号登录</a>
</div>
<div class="wxLoginBox" style="display:none">
<p>或使用已绑定的微信帐号登录</p>
<a href="javascript:;" class="wxLogin">微信帐号登录</a>
</div>
<div id="toQuickLogin" class="to-quicklogin"><a class="fr" id="registerBtn">注册账户</a></div>
</form>
</div>
</div>

<script type="text/javascript">
    window.onload = function (){
    	TC.load("login.htm");
JC.file("secure.js");
    	JC.file("login.js");
        JC.run();
    };
</script><?php include template('m/footer'); ?>