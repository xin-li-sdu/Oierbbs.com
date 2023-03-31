<?php
define('APPTYPEID', 127);
define('CURSCRIPT', 'rand');
require './source/class/class_core.php';
$discuz = & discuz_core::instance();$discuz->cachelist = $cachelist;$discuz->init();
$tid=DB::result_first("select tid from ".DB::table('forum_thread')." where displayorder>=0 order by rand()");
$url=$_G['siteurl'].'forum.php?mod=viewthread&tid='.$tid;
dheader("location: $url");
 
?>
<title>随便看看</title>
