<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); function mw_syntaxhighlighter_shl_codebox($brush, $gutter) {?><?php
$return = <<<EOF

<script type="text/javascript">
function mw_syntaxhighlighter_show_editor_codebox(editortype) {
var tag = 'code';
var mw_syntaxhighlighter_tag = 'mw_shl_code';
var str = 'è¯·è¾“å…¥è¦æ’å…¥çš„ä»£ç <br>é€‰æ‹©è¯­è¨€ï¼š';
str += '<select id="brush_lang" name="lang">';
EOF;
 if(is_array($brush)) foreach($brush as $lang => $val) { 
$return .= <<<EOF
str += '<option value="{$lang}">{$val['0']}</option>';

EOF;
 } 
$return .= <<<EOF

str += '</select><br>';

EOF;
 if($gutter) { 
$return .= <<<EOF

str += 'æ˜¾ç¤ºè¡Œå·ï¼š';
str += '<input type="checkbox" id="show_gutter" name="show_gutter" value="1" checked><br>';

EOF;
 } 
$return .= <<<EOF


if(editortype == 'newthread') {

var sel, selection;
var str1 = '', strdialog = 0, stitle = '';
var ctrlid = editorid + '_' + tag;
var menu = $(ctrlid + '_menu');
var pos = [0, 0];
var menuwidth = 270;
var menupos = '43!';
var menutype = 'menu';

str += '<div id="mw_codearea">ä½ çš„ä»£ç ï¼š<br>';
str += '<textarea id="' + ctrlid + '_param_1" style="width: 98%" cols="50" rows="5" class="txtarea"></textarea></div>';

//note ĞŞ¸ÄÁËieÏÂµÄ²»¼æÈİÎÊÌâ
if(BROWSER.ie) {
if(wysiwyg) {
editdoc.body.focus();
sel = editdoc.selection.createRange();
} else {
sel = document.selection.createRange();
}
pos = getCaret();
}

selection = sel ? (wysiwyg ? sel.text : sel.text) : mw_highlighter_getSel();//note ĞŞ¸Äsel.HtmlTextĞŞ¸ÄÎªText£¬±à¼­Æ÷ÖĞµÄ¿ÉÊÓ»¯ÓÃ²å¼şÊµÏÖ±È½ÏÀ§ÄÑ
if(menu) {
if($(ctrlid).getAttribute('menupos') !== null) {
menupos = $(ctrlid).getAttribute('menupos');
}
if($(ctrlid).getAttribute('menuwidth') !== null) {
menu.style.width = $(ctrlid).getAttribute('menuwidth') + 'px';
}

if(selection) {//note Èç¹ûÑ¡ÔñÁËÄÚÈİµÄ´¦Àí
$('mw_codearea').style.display = 'none';
}

showMenu({'ctrlid':ctrlid,'evt':'click','pos':menupos,'timeout':250,'duration':in_array(tag, ['fontname', 'fontsize', 'sml']) ? 2 : 3,'drag':1});
} else {

var menu = document.createElement('div');
menu.id = ctrlid + '_menu';
menu.style.display = 'none';
menu.className = 'p_pof upf';
menu.style.width = menuwidth + 'px';

s = '<div class="p_opt cl"><span class="y" style="margin:-10px -10px 0 0"><a onclick="hideMenu();return false;" class="flbc" href="javascript:;">å…³é—­</a></span><div>' + str + '</div><div class="pns mtn"><button type="submit" id="' + ctrlid + '_submit" class="pn pnc"><strong>æäº¤</strong></button></div></div>';
menu.innerHTML = s;
$(editorid + '_editortoolbar').appendChild(menu);

if(selection) {//note Èç¹ûÑ¡ÔñÁËÄÚÈİµÄ´¦Àí
$('mw_codearea').style.display = 'none';
}

showMenu({'ctrlid':ctrlid,'mtype':menutype,'evt':'click','duration':3,'cache':0,'drag':1,'pos':menupos});
}

try {
if($(ctrlid + '_param_1')) {
$(ctrlid + '_param_1').focus();
}
} catch(e) {}
var objs = menu.getElementsByTagName('*');
for(var i = 0; i < objs.length; i++) {
_attachEvent(objs[i], 'keydown', function(e) {
e = e ? e : event;
obj = BROWSER.ie ? event.srcElement : e.target;
if((obj.type == 'text' && e.keyCode == 13) || (obj.type == 'textarea' && e.ctrlKey && e.keyCode == 13)) {
if($(ctrlid + '_submit') && tag != 'image') $(ctrlid + '_submit').click();
doane(e);
} else if(e.keyCode == 27) {
hideMenu();
doane(e);
}
});
}
if($(ctrlid + '_submit')) $(ctrlid + '_submit').onclick = function() {
checkFocus();
if(BROWSER.ie && wysiwyg) {
setCaret(pos[0]);
}
if(wysiwyg) {
if(!BROWSER.ie) {
selection = selection ? selection : '';
}
}
str1 = $(ctrlid + '_param_1') && $(ctrlid + '_param_1').value ? $(ctrlid + '_param_1').value : (selection ? selection : '');

var opentag = '[' + mw_syntaxhighlighter_tag + '=' + $('brush_lang').value + ',' + (($('show_gutter') && $('show_gutter').checked) ? 'true' : 'false') + ']';
var closetag = '[/' + mw_syntaxhighlighter_tag + ']';

if(wysiwyg) {
str1 = preg_replace(['<', '>'], ['&lt;', '&gt;'], str1);

EOF;
 if($tmpstr = 'str1 = str1.replace(/\r?\n/g, \'<br />\');') { } 
$return .= <<<EOF

{$tmpstr}
}
str1 = opentag + str1 + closetag;
insertText(str1, strlen(opentag), strlen(closetag), false, sel);
hideMenu();
};

} else if(editortype == 'fastpost' || editortype == 'post') {

var sel = false;
var seditorkey = editortype;
if(!isUndefined($(seditorkey + 'message').selectionStart)) {
sel = $(seditorkey + 'message').selectionEnd - $(seditorkey + 'message').selectionStart;
} else if(document.selection && document.selection.createRange) {
$(seditorkey + 'message').focus();
var sel = document.selection.createRange();
$(seditorkey + 'message').sel = sel;
sel = sel.text ? true : false;
}

var ctrlid = seditorkey + tag;
var menuid = ctrlid + '_menu';

str += '<div id="mw_codearea">ä½ çš„ä»£ç ï¼š<br>';
str += '<textarea id="' + ctrlid + '_param_1" style="width: 98%" cols="50" rows="5" class="txtarea"></textarea></div>';

if(!$(menuid)) {
var submitstr = "seditor_insertunit('" + seditorkey + "', '[" + mw_syntaxhighlighter_tag + "=' + $('brush_lang').value + ',' + (($('show_gutter') && $('show_gutter').checked) ? 'true' : 'false') + ']'+$('" + ctrlid + "_param_1').value, '[/" + mw_syntaxhighlighter_tag + "]', null, 1);hideMenu();";
var menu = document.createElement('div');
menu.id = menuid;
menu.style.display = 'none';
menu.className = 'p_pof upf';
menu.style.width = '270px';
$('append_parent').appendChild(menu);
menu.innerHTML = '<span class="y"><a onclick="hideMenu()" class="flbc" href="javascript:;">å…³é—­</a></span><div class="p_opt cl"><form onsubmit="' + submitstr + ';return false;" autocomplete="off"><div>' + str + '</div><div class="pns mtn"><button type="submit" id="' + ctrlid + '_submit" class="pn pnc"><strong>æäº¤</strong></button><button type="button" onClick="hideMenu()" class="pn"><em>å–æ¶ˆ</em></button></div></form></div>';
}
if(sel) {//note Èç¹ûÑ¡ÔñÁËÄÚÈİµÄ´¦Àí
$('mw_codearea').style.display = 'none';
}
showMenu({'ctrlid':ctrlid,'evt':'click','duration':3,'cache':0,'drag':1});
}
}

function mw_highlighter_getSel() {
if(wysiwyg) {
try {
selection = editwin.getSelection();
return selection.toString();
//checkFocus();
//range = selection ? selection.getRangeAt(0) : editdoc.createRange();
//return readNodes(range.cloneContents(), false);
} catch(e) {
try {
var range = editdoc.selection.createRange();
if(range.htmlText && range.text) {
return range.text;
} else {
var htmltext = '';
for(var i = 0; i < range.length; i++) {
htmltext += range.item(i).outerHTML;
}
return htmltext;
}
} catch(e) {
return '';
}
}
} else {
if(!isUndefined(editdoc.selectionStart)) {
return editdoc.value.substr(editdoc.selectionStart, editdoc.selectionEnd - editdoc.selectionStart);
} else if(document.selection && document.selection.createRange) {
return document.selection.createRange().text;
} else if(window.getSelection) {
alert(editdoc);
return window.getSelection() + '';
} else {
return false;
}
}
}
</script>

EOF;
?><?php return $return;?><?php }

function mw_code_toolbar_handler($libversion) {?><?php
$return = <<<EOF

<script type="text/javascript">
(function() {
var viewsource = [];
var copycode = [];
if(document.getElementsByClassName) {
viewsource = document.getElementsByClassName('viewsource');
copycode = document.getElementsByClassName('copycode');
} else {
var emlist = document.getElementsByTagName('em');
for(var i=0;i<emlist.length;i++) {
if(emlist[i].className == 'viewsource') {
viewsource.push(emlist[i]);
} else if(emlist[i].className == 'copycode') {
copycode.push(emlist[i]);
}
}
}
function mw_code_toolbar_addevent(objs, eventtype) {
for(var i=0; i<objs.length; i++) {
if(objs[i].id != undefined) {
objs[i].setAttribute('num', i);
objs[i].onclick = function() {
var highlighters = SyntaxHighlighter.vars.highlighters;
var k = 0;
var num = this.getAttribute('num');
for(var i in highlighters) {
if(k == num) {
if(eventtype == 'viewcode') {
mw_viewcode_execute(highlighters[i]);
} else if(eventtype == 'copycode') {
mw_copycode_execute(highlighters[i]);
}
break;
}
k++;
}
return false;
}
}
}
}
if(viewsource) {
mw_code_toolbar_addevent(viewsource, 'viewcode');
}
if(copycode) {
mw_code_toolbar_addevent(copycode, 'copycode');
}
function mw_viewcode_execute(highlighter) {
var code = mw_get_code(highlighter);
code = mw_fixinputstring(code).replace(/</g, '&lt;');
var wnd = mw_popup('', '_blank', 750, 400, 'location=0, resizable=1, menubar=0, scrollbars=1');
code = mw_unindent(code);
wnd.document.write('<pre>' + code + '</pre>');
wnd.document.close();
}
function mw_copycode_execute(highlighter) {
var code = mw_get_code(highlighter);
code = mw_fixinputstring(code)
.replace(/&lt;/g, '<')
.replace(/&gt;/g, '>')
.replace(/&amp;/g, '&')
;
code = mw_unindent(code);
setCopy(code, 'ä»£ç å·²å¤åˆ¶åˆ°å‰ªè´´æ¿');
}
function mw_fixinputstring(str) {
var br = /<br\s*\/>|<br\s*>|&lt;br\s*\/?&gt;/gi;
if(SyntaxHighlighter.config.bloggerMode == true) {
str = str.replace(br, '\\n');
}
if(SyntaxHighlighter.config.stripBrs == true) {
str = str.replace(br, '');
}
return str;
}
function mw_popup(url, name, width, height, options) {
var x = (screen.width - width) / 2,
y = (screen.height - height) / 2
;
options +=	', left=' + x +
', top=' + y +
', width=' + width +
', height=' + height
;
options = options.replace(/^,/, '');
var win = window.open(url, name, options);
win.focus();
return win;
}
function mw_unindent(str) {
var lines = mw_fixinputstring(str).split('\\n'),
indents = new Array(),
regex = /^\s*/,
min = 1000
;
for(var i = 0; i < lines.length && min > 0; i++) {
var line = lines[i];
if(mw_trim(line).length == 0) {
continue;
}
var matches = regex.exec(line);
if(matches == null) {
return str;
}
min = Math.min(matches[0].length, min);
}
if(min > 0) {
for(var i = 0; i < lines.length; i++) {
lines[i] = lines[i].substr(min);
}
}
return lines.join('\\n');
}
function mw_trim(str) {
return str.replace(/^\s+|\s+$/g, '');
}
function mw_get_code(highlighter) {

EOF;
 if($libversion == '3.0.83') { 
$return .= <<<EOF

var container = mw_findelement($('highlighter_' + highlighter.id), '.container');
var lines = container.childNodes;
var code = [];
for(var i=0; i<lines.length; i++) {
code.push(lines[i].innerText || lines[i].textContent);
}
code = code.join('\\r');
return code;

EOF;
 } elseif($libversion == '2.1.382') { 
$return .= <<<EOF

return highlighter.originalCode;

EOF;
 } 
$return .= <<<EOF

}
function mw_findelement(target, search, reverse) {
if(target == null)
return null;
var nodes = reverse != true ? target.childNodes : [ target.parentNode ],
propertyToFind	= { '#' : 'id', '.' : 'className' }[search.substr(0, 1)] || 'nodeName',
expectedValue,
found
;
expectedValue = propertyToFind != 'nodeName'
? search.substr(1)
: search.toUpperCase()
;
if((target[propertyToFind] || '').indexOf(expectedValue) != -1)
return target;
for(var i = 0; nodes && i < nodes.length && found == null; i++)
found = mw_findelement(nodes[i], search, reverse);
return found;
}
})();
</script>

EOF;
?><?php return $return;?><?php }?>