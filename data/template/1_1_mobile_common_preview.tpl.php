<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('preview');?><?php include template('common/header'); ?><div id="ct" class="wp cl ptw pbw">
<table style="margin:0 auto"><tr><td>
<div class="z" style="width: 500px; height: 650px; background: url(<?php echo STATICURL;?>image/mobile/browser_big.jpg) no-repeat 0 0;">
<iframe id="ifm0" frameborder="0" width="425" height="530" style="margin: 115px 0 0 23px;" src="<?php if($_G['setting']['mobile']['allowmnew']) { ?>m/<?php } else { ?>misc.php?mod=mobile&view=true<?php } ?>"></iframe>
</div>
<div class="z" style="margin-top: 60px; width: 430px;">
<div class="mtw bm bw0" style="background-color: #dfeaf4;">
<div class="bm_c">
<h1 class="xw1 xs2 mbn">现在就登录 - <?php echo $_G['setting']['bbname'];?> 手机版</h1>
<p class="mbw xg2">立即使用手机访问，获得极速移动体验</p>
<p class="hm mbw" style="font-size: 18px; color: #F60;">
<img src="data/cache/<?php echo $file;?>" />
</p>
</div>
</div>
</div></td></tr></table>
</div><?php include template('common/footer'); ?>