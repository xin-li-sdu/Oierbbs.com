<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('profile');?><?php include template('m/header'); ?><body>
    <div class="warp">
        <div id="header"></div>
        <div class="container conM">
            <div class="topicBox profilenav" id="profileNav" style="display:none">
                <ul>
                    <li class="topicRank pShow">
                        <a id="sendpm">
                            <span>发送私信</span>
                            <span class="incoAnswer db rkArrow"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="topicBox profilenav" id="usernav" style="display:none">
                 <ul>
                     <li class="topicRank pShow" id="mynoticeNav">
                         <a id="mynotice">
                             <span>我的提醒</span>
                             <span class="db numP pf" style="display:none">0</span>
                             <span class="incoAnswer db rkArrow"></span>
                         </a>
                     </li>
                     <li class="topicRank pShow">
                         <a id="mypm">
                             <span>我的私信</span>
                             <span class="db numP pf" style="display:none">0</span>
                             <span class="incoAnswer db rkArrow"></span>
                         </a>
                     </li>
                     <li class="topicRank pShow">
                         <a id="mythread">
                         <span>我的话题</span>
                         <span class="incoAnswer db rkArrow"></span>
                         </a>
                     </li>
                     <li class="topicRank pShow">
                         <a id="mypost">
                             <span>我的回复</span>
                             <span class="incoAnswer db rkArrow"></span>
                         </a>
                     </li>
                 </ul>
            </div>
            <div class="topicBox profilenav" id="customnav" style="display:none"></div>
            <div class="topicBox profilenav" id="groupnav"></div>
            <div class="topicBox profilenav" id="infonav"></div>
    </div>
    <div class="bottomBar">
        <div class="bottomBarCon">
            <a href="javascript:;" class="backBtn"><i class="iconAnswer commF back db"></i></a>
            <a href="javascript:;" id="forumlist" class="blockSec db"><i class="incoSec"></i></a>
        </div>
    </div>

<script type="text/javascript">
    window.onload = function (){
        TC.load("profile.htm");
        JC.file("profile.js");
        JC.run();
    };
</script><?php include template('m/footer'); ?>