<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('mypm');?><?php include template('m/header'); ?><link rel="stylesheet" href="<?php echo $_G['siteurl'];?><?php echo $_G['style']['tpldir'];?>/m/css/pm.css?<?php echo $jsglobal['jsversion'];?>">
<body>
<div class="warp">
    <div id="header"></div>
    <div class="loading" id="loadNext" style="display:none;">
            <div class="loadInco">
                <span class="blockG" id="rotateG_01"></span>
                <span class="blockG" id="rotateG_02"></span>
                <span class="blockG" id="rotateG_03"></span>
                <span class="blockG" id="rotateG_04"></span>
                <span class="blockG" id="rotateG_05"></span>
                <span class="blockG" id="rotateG_06"></span>
                <span class="blockG" id="rotateG_07"></span>
                <span class="blockG" id="rotateG_08"></span>
            </div>正在加载...
        </div>
    <div id="container"></div>
    <div id="refreshWait" class="loading mt10" style="display:none;">
            <div class="loadInco">
                <span class="blockG" id="rotateG_01"></span>
                <span class="blockG" id="rotateG_02"></span>
                <span class="blockG" id="rotateG_03"></span>
                <span class="blockG" id="rotateG_04"></span>
                <span class="blockG" id="rotateG_05"></span>
                <span class="blockG" id="rotateG_06"></span>
                <span class="blockG" id="rotateG_07"></span>
                <span class="blockG" id="rotateG_08"></span>
            </div>正在加载...
    </div>

        <div id='loadNextPos'></div>
        <div class="loading" id="showAll" style="display:none;">已显示全部</div>
</div>
<div id="backToTopBtn" class="floatLayer db" style="display:none;"><a href="javascript:;" class="upBtn db"></a></div>
<div class="bottomBar">
    <div class="bottomBarCon">
        <a href="javascript:;" class="backBtn"><i class="iconAnswer commF back db"></i></a>
    </div>
</div>

<script type="text/javascript">
    window.onload = function (){
        TC.load("mypm.htm");
        JC.file("secure.js");
        JC.file("navmenu.js");
        JC.file("mypm.js");
        JC.run();
    };
</script><?php include template('m/footer'); ?>