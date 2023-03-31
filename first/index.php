<?php require '../source/class/class_core.php';
$discuz = C::app();
$discuz->init();
$c = curl_init();
echo $_G['forum']['threads'];
$url = 'https://www.oierbbs.cn/forum.php';

curl_setopt($c, CURLOPT_URL, $url);

curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);

$data = curl_exec($c);

curl_close($c);

$pos = strpos($data,'utf-8');

if($pos===false){
$data = iconv("gbk","utf-8",$data);
}

preg_match("/<p class=\"chart z\">(.*)<\/p>/i",$data, $title);
preg_match("/<ul class=\"category_newlist\">(.*)<\/ul>/i",$data, $mes);
$title=str_replace("新会员","新大佬",$title);
$title=str_replace("会员","大佬数",$title);
//print_r($_G);
//echo $_G['username'];
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="static/favicon.ico">
  <link rel="stylesheet" href="static/node_modules/npm-font-open-sans/open-sans.css">
  <link rel="stylesheet" href="static/node_modules/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="static/css/app.min.css?v=1530663595">
  <link rel="stylesheet" href="static/node_modules/simplemde/dist/simplemde.min.css">
  <link rel="stylesheet" href="static/css/ionicons.min.css">
  <style>
	em {
		font-style: normal;
	}
  </style>
<style>
/* 下拉按钮样式 */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* 容器 <div> - 需要定位下拉内容 */
.dropdown {
    position: relative;
    display: inline-block;
}

/* 下拉内容 (默认隐藏) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* 下拉菜单的链接 */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* 鼠标移上去后修改下拉菜单链接颜色 */
.dropdown-content a:hover {background-color: #f1f1f1}

/* 在鼠标移上去后显示下拉菜单 */
.dropdown:hover .dropdown-content {
    display: block;
}

/* 当下拉内容显示后修改下拉按钮的背景颜色 */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>


  <script src="static/node_modules/jquery/dist/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">
  
  
  <title>Oierbbs</title>
</head>

<body class="local-body">






<div class="ui top fixed menu" id="navbar">

  <div class="ui container" id="navbar-small">
    <div class="ui pointing dropdown link item"><i class="icon ion-navicon-round"></i>
      <span class="text"><b>OierBBS</b></span>
      <div class="menu">
        <a class="item" href="../forum.php">论坛</a>
        <div class="divider"></div>
        <div class="header">帖子</div>
        <a class="item" href="../forum.php?mod=guide&view=new">全版</a>
        <a class="item" href="../rand.php">随便看看</a>
        <div class="divider"
        ></div>
        <div class="header">插件</div>
        <a class="item" href="../home.php?mod=task">任务</a>
        <a class="item" href="../home.php?mod=medal">勋章</a>
        <div class="header">门户</div>
        <a class="item" href="../portal.php">门户</a>
      </div>
    </div>

    <div class="right menu">
      
  
    <?php if ($_G["uid"] == 0) {
?>
<div class="item"><a class="ui primary button" href="../member.php?mod=logging&action=login">登陆</a></div>
     <div class="item"> <a class="ui primary button" href="../member.php?mod=register">注册</a></div>
<?php } else {
?>
     <div class="item"> <a class="ui primary button" href="../home.php?mod=space&uid=<?php echo $_G["uid"];?>&do=profile"><?php echo $_G["username"];?></a></div>
<?php
}?>
  

    </div>
  </div>

  <div class="ui container" id="navbar-large"><a class="active item">主页</a>
  <a class="item" href="../forum.php?mod=guide&view=new">全版</a>
  <a class="item" href="../portal.php">门户</a>
  <a class="item" href="../forum.php">论坛</a>
  <a class="item" href="../home.php?mod=task">任务</a>
  <a class="item" href="../home.php?mod=medal">勋章</a>
  <a class="item" href="../rand.php">随便看看</a>
    <div class="right menu">
      
  
      <?php if ($_G["uid"] == 0) {
?>  <div class="item"><a class="ui primary button" href="../member.php?mod=logging&action=login">登陆</a></div>
      <div class="item"><a class="ui primary button" href="../member.php?mod=register">注册</a></div>
<?php } else {
?>
     <div class="item">
  <a class="ui primary button dropdown" href="../home.php?mod=space&uid=<?php echo $_G["uid"];?>&do=profile"><?php echo $_G["username"];?></a></div>
<?php
}?>

    </div>
  </div>
</div>

<div class="pusher">
  <div id="advertisement" class="ui inverted vertical masthead center aligned segment">

    <img src="static/image/bg/1.jpg">
    <img src="static/image/bg/2.jpg" class="inactive">
    <img src="static/image/bg/3.jpg" class="inactive">
    <img src="static/image/bg/4.jpg" class="inactive">
    <img src="static/image/bg/5.jpg" class="inactive">
    <img src="static/image/bg/6.jpg" class="inactive">

    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="active item">主页</a>
        <a class="item" href="../forum.php?mod=guide&view=new">全版</a>
        <a class="item" href="../portal.php">门户</a>
        <a class="item" href="../forum.php">论坛</a>
        <a class="item" href="../home.php?mod=task">任务</a>
        <a class="item" href="../home.php?mod=medal">勋章</a>
        <a class="item" href="../rand.php">随便看看</a>
        <div class="right item">
          
            <?php if ($_G["uid"] == 0) {
?>  <a class="ui inverted button" href="../member.php?mod=logging&action=login">
登陆</a><a class="ui inverted button" href="../member.php?mod=register">注册</a>
          <?php } else {
?>
<div class="dropdown">
     <a class="ui inverted button" href="../home.php?mod=space&uid=<?php echo $_G["uid"];?>&do=profile"><?php echo $_G["username"];?></a>
  <div class="dropdown-content">
    <a href="https://www.oierbbs.cn/home.php?mod=space&do=index&view=admin">空间首页</a>
    <a href="https://www.oierbbs.cn/home.php?mod=space&do=blog&view=me&from=space">日志</a>
    <a href="https://www.oierbbs.cn/home.php?mod=spacecp">设置</a>
    <a href="https://www.oierbbs.cn/home.php?mod=space&do=notice">提醒</a>
  </div>
</div>
<?php
}?>
        </div>
      </div>
    </div>

    <div class="ui text container">
      <h1 class="ui inverted header">
        OIERBBS
      </h1>
      <h2><span class="typed-element"></span></h2>
    </div>

  </div>

  <div class="ui vertical stripe segment">
    <div class="ui text container">
      <h3 class="ui header">最新主题</h3>
      <p><?php echo $mes[1]; ?></p>
    </div>

  </div>
  <div class="ui vertical stripe segment">
    <div class="ui text container">
      <h3 class="ui header">什么是OIERBBS?</h3>
      <p>这是编程爱好者的一个大型聚集地</p>
    </div>

  </div>
  <div class="ui vertical stripe segment">
    <div class="ui text container">
      <h3 class="ui header">统计信息</h3>
      <p><?php echo $title[1];?></p>
    </div>

  </div>
  <div class="ui vertical stripe segment">
    <div class="ui text container">
      <h3 class="ui header">一言</h3>
      <p id="hitokoto">努力加载</p>
    </div>

  </div>
  <div class="ui inverted vertical footer segment">
  <div class="ui container">
    <div class="ui stackable inverted divided equal height stackable grid">
      <div class="three wide column">
        <h4 class="ui inverted header">介绍页</h4>
        <div class="ui inverted link list">
          <p>By yemaster.</p>
        </div>
      </div>
      <div class="three wide column">
        <h4 class="ui inverted header">关于</h4>
        <div class="ui inverted link list">
          <p>Oierbbs，编程热爱着的大型聚集地<br>粤ICP备17136354号-1 </p>
        </div>
      </div>
      <div class="seven wide column">
        <h4 class="ui inverted header">联系</h4>
        <p>站长:hz2016,for<br>副站长:Yemaster<br>官方QQ群:718555974</p>
      </div>
    </div>
  </div>
</div>
</div>


<script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    messageStyle: "none",
    config: ["MMLorHTML.js"],
    jax: ["input/TeX", "output/HTML-CSS", "output/NativeMML"],
    extensions: ["TeX/AMSmath.js", "TeX/AMSsymbols.js", "MathMenu.js", "MathZoom.js"]
  });
</script>
<script src="static/node_modules/mathjax/MathJax.js"></script>
<script src="static/node_modules/moment/moment.js"></script>
<script src="static/node_modules/clipboard/dist/clipboard.min.js"></script>
<script src="static/node_modules/js-cookie/src/js.cookie.js"></script>
<script src="static/node_modules/jquery-address/src/jquery.address.js"></script>
<script src="static/node_modules/lodash/lodash.min.js"></script>
<script src="static/node_modules/semantic-ui-less/semantic.js"></script>
<script src="static/node_modules/simplemde/dist/simplemde.min.js"></script>
<script src="static/node_modules/ace-builds/src-noconflict/ace.js"></script>
<script src="static/node_modules/underscore/underscore.js"></script>
<script src="static/node_modules/semantic-ui-calendar/dist/calendar.min.js"></script>
<script src="static/js/lang-detector.js?v=1530663595"></script>
<script src="static/js/markdown.js?v=1530663595"></script>
<script src="static/js/longpoll.js?v=1530663595"></script>
<script src="static/js/input.file.js?v=1530663595"></script>
<script src="static/js/app.js?v=1530663595"></script>
<script src="static/js/submit.js?v=1530663595"></script>

  <script src="static/node_modules/typed.js"></script>
  <script src="static/js/type.js"></script>
  <script>
  $(document).ready(
    function() {
      $('.masthead')
      .visibility({
        once: false,
        onBottomPassed: function() {
          $('.fixed.menu').transition('fade in');
        },
        onBottomPassedReverse: function() {
          $('.fixed.menu').transition('fade out');
        }
      });
      $('#navbar').hide();

      var imagesBox = $("#advertisement").find("img");

      function fitBackground() {
        imagesBox.each(function () {
          var width = this.naturalWidth, height = this.naturalHeight;
          var parentWidth = $(this).parent().width(), parentHeight = $(this).parent().height();
          if (width / parentWidth * parentHeight < height) {
            $(this).width(parentWidth); $(this).height("auto");
          } else {
            $(this).height(parentHeight); $(this).width("auto");
          }
        });
      }
      window.onresize = fitBackground;
      fitBackground();

      var index = 0, interval = 4500;
      function changeBg() {
        console.log(index);
        var active = $(imagesBox[index]);
        index = (index + 1) % imagesBox.length;
        var next = $(imagesBox[index]);
        next.css('z-index', -2);
        active.fadeOut(1500, function() {
          active.css('z-index', -3).show();
          next.css('z-index', -1);
        });
        setTimeout(changeBg, interval);
      }
      setTimeout(changeBg, interval);
    });

  </script>


</body>
</html>
