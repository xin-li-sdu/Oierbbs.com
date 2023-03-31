<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); function mobile_codedisp($code) {?><?php
$return = <<<EOF
<div class="blockcode"><span></span><ol><li>{$code}</ol></div>
EOF;
?><?php return $return;?><?php }

function mobile_quote() {?><?php
$return = <<<EOF
<div class="reply_wrap">\\1</div>
EOF;
?><?php return $return;?><?php }

function mobile_free() {?><?php
$return = <<<EOF
<div class="reply_wrap">\\1</div>
EOF;
?><?php return $return;?><?php }

function mobile_image($url, $extra) {?><?php
$return = <<<EOF
<div class="img"><img src="{$url}" {$extra}/></div>
EOF;
?><?php return $return;?><?php }

function mobile_hide_reply() {
global $_G;?><?php
$return = <<<EOF
\\1
EOF;
?><?php return $return;?><?php }

function mobile_hide_reply_hidden() {
global $_G;?><?php
$return = <<<EOF
<div class="locked">
EOF;
 if($_G['uid']) { 
$return .= <<<EOF
{$_G['username']}
EOF;
 } else { 
$return .= <<<EOF
游客
EOF;
 } 
$return .= <<<EOF
如果您要查看本帖隐藏内容请回复</div>
EOF;
?><?php return $return;?><?php }?>