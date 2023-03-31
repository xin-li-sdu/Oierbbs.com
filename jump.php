<?php
define('APPTYPEID', 127);
define('CURSCRIPT', 'rand');
require './source/class/class_core.php';
$discuz = & discuz_core::instance();$discuz->cachelist = $cachelist;$discuz->init();
$tid=DB::result_first("select tid from ".DB::table('forum_thread')." where displayorder>=0 order by rand()");
?>
<html>

<head>
	<title>oierbbs随机跳帖</title>
	<link rel="icon" href="res/tagicon.png" type="image/x-icon"/>
	<link rel="bookmark"  href="res/tagicon.png" type="image/x-icon"/>
	<link rel="shortcut icon" href="res/tagicon.png">
	
	<link href="res/style.css" rel="stylesheet" type="text/css" media="all"/>
	<meta charset="UTF-8">
</head>

<?php
echo "<script>\n";
echo "function jump1()\n";
echo "{\n";
echo '	var link="https://www.oierbbs.cn/forum.php/forum.php?mod=viewthread&extra=page%3D1&tid="'."\n";
echo "	link+=$tid\n";
echo "	window.open(link)\n";
echo "}\n";
echo "</script>\n";
?>

<body> 
	
	<button id="jumpbutton" onclick=jump1()>跳转</button>
	<canvas id="myCanvas" width="500" height="500"></canvas>

	<div class="copyright">
		<p>
			CopyRight &copy <a href="https://www.oierbbs.cn?fromuid=13">OIerbbs</a>|All rights reserved| <a href="http://www.miitbeian.gov.cn"> 粤ICP备17136354号-1 </a>|By <a href="https://fancydreams.ink">FancyDreams</a>|<a href="https://yemaster.xyz">Yemaster</a>修改
			<button id="jumpbutton2" onclick=>播放动画</button>
		</p>
	</div>
	
	<script src="res/index.js"></script>
</body>

</html>
