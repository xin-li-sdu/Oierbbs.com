<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<a name="comment_anchor_<?php echo $value['cid'];?>"></a>
<?php if(empty($ajax_edit)) { ?><dl id="comment_<?php echo $value['cid'];?>_li" class="bbda cl"><?php } if($value['author']) { ?>
<dd class="m avt"><a href="home.php?mod=space&amp;uid=<?php echo $value['authorid'];?>" c="1"><?php echo avatar($value[authorid],small);?></a></dd>
<?php } else { ?>
<dd class="m avt"><img src="<?php echo STATICURL;?>image/magic/hidden.gif" alt="hidden" /></dd>
<?php } ?>
<dt>
<span class="y xw0">
<?php if($value['authorid'] != $_G['uid'] && $value['author'] == "" && $_G['magic']['reveal']) { ?>
<a id="a_magic_reveal_<?php echo $value['cid'];?>" href="home.php?mod=magic&amp;mid=reveal&amp;idtype=cid&amp;id=<?php echo $value['cid'];?>" onclick="ajaxmenu(event,this.id,1)"><img src="<?php echo STATICURL;?>image/magic/reveal.small.gif" alt="reveal" /><?php echo $_G['magic']['reveal'];?></a>
<span class="pipe">|</span>
<?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['global_space_comment_op'][$k])) echo $_G['setting']['pluginhooks']['global_space_comment_op'][$k];?>
<?php if($_G['setting']['magicstatus'] && $do != 'share') { if($value['authorid']==$_G['uid'] && !empty($_G['setting']['magics']['flicker'])) { ?>
<img src="<?php echo STATICURL;?>image/magic/flicker.small.gif" alt="flicker" class="vm" />
<?php if($value['magicflicker']) { ?>
<a id="a_magic_flicker_<?php echo $value['cid'];?>" href="home.php?mod=spacecp&amp;ac=magic&amp;op=cancelflicker&amp;idtype=cid&amp;id=<?php echo $value['cid'];?>&amp;handlekey=cfhk_<?php echo $value['cid'];?>" onclick="showWindow(this.id, this.href, 'get', 0)">取消<?php echo $_G['setting']['magics']['flicker'];?></a>
<?php } else { ?>
<a id="a_magic_flicker_<?php echo $value['cid'];?>" href="home.php?mod=magic&amp;mid=flicker&amp;idtype=cid&amp;id=<?php echo $value['cid'];?>" onclick="showWindow(this.id, this.href, 'get', 0)"><?php echo $_G['setting']['magics']['flicker'];?></a>
<?php } ?>
<span class="pipe">|</span>
<?php } if($value['authorid']==$_G['uid'] && !empty($_G['setting']['magics']['anonymouspost']) && $value['author']) { ?>
<img src="<?php echo STATICURL;?>image/magic/anonymouspost.small.gif" alt="flicker" class="vm" />
<a id="a_magic_anonymouspost_<?php echo $value['cid'];?>" href="home.php?mod=magic&amp;mid=anonymouspost&amp;idtype=cid&amp;id=<?php echo $value['cid'];?>" onclick="showWindow(this.id, this.href, 'get', 0)"><?php echo $_G['setting']['magics']['anonymouspost'];?></a>
<span class="pipe">|</span>
<?php } if(!empty($_G['setting']['magics']['namepost']) && !$value['author']) { ?>
<img src="<?php echo STATICURL;?>image/magic/namepost.small.gif" alt="flicker" class="vm" />
<a id="a_magic_namepost_<?php echo $value['cid'];?>" href="home.php?mod=magic&amp;mid=namepost&amp;idtype=cid&amp;id=<?php echo $value['cid'];?>" onclick="showWindow(this.id, this.href,'get', 0)"><?php echo $_G['setting']['magics']['namepost'];?></a>
<span class="pipe">|</span>
<?php } } if($_G['uid']) { if($value['authorid']==$_G['uid']) { ?>
<a href="home.php?mod=spacecp&amp;ac=comment&amp;op=edit&amp;cid=<?php echo $value['cid'];?>&amp;handlekey=editcommenthk_<?php echo $value['cid'];?>" id="c_<?php echo $value['cid'];?>_edit" onclick="showWindow(this.id, this.href, 'get', 0);">编辑</a>
<?php } if($value['authorid']==$_G['uid'] || $value['uid']==$_G['uid'] || checkperm('managecomment')) { ?>
<a href="home.php?mod=spacecp&amp;ac=comment&amp;op=delete&amp;cid=<?php echo $value['cid'];?>&amp;handlekey=delcommenthk_<?php echo $value['cid'];?>" id="c_<?php echo $value['cid'];?>_delete" onclick="showWindow(this.id, this.href, 'get', 0);">删除</a>
<?php } } if($value['authorid']!=$_G['uid'] && ($value['idtype'] != 'uid' || $space['self']) && $value['author']) { ?>
<a href="home.php?mod=spacecp&amp;ac=comment&amp;op=reply&amp;cid=<?php echo $value['cid'];?>&amp;feedid=<?php echo $feedid;?>&amp;handlekey=replycommenthk_<?php echo $value['cid'];?>" id="c_<?php echo $value['cid'];?>_reply" onclick="showWindow(this.id, this.href, 'get', 0);">回复</a>
<?php } ?>
        <?php if(checkperm('managecomment')) { ?>
<span class="xg1 xw0">IP: <?php echo $value['ip'];?></span>
<?php } ?>
<!--a href="home.php?mod=spacecp&amp;ac=common&amp;op=report&amp;idtype=comment&amp;id=<?php echo $value['cid'];?>&amp;handlekey=reportcommenthk_<?php echo $value['cid'];?>" id="a_report_<?php echo $value['cid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">举报</a-->
</span>

<?php if($value['author']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $value['authorid'];?>" id="author_<?php echo $value['cid'];?>"><?php echo $value['author'];?></a>
<?php } else { ?>
<?php echo $_G['setting']['anonymoustext'];?>
<?php } ?>
<span class="xg1 xw0"><?php echo dgmdate($value[dateline]);?></span>
<?php if($value['status'] == 1) { ?><b>(待审核)</b><?php } ?>
</dt>

<dd id="comment_<?php echo $value['cid'];?>"<?php if($value['magicflicker']) { ?> class="magicflicker"<?php } ?>><?php if($value['status'] == 0 || $value['authorid'] == $_G['uid'] || $_G['adminid'] == 1) { ?><?php echo $value['message'];?><?php } else { ?> 审核未通过 <?php } ?></dd>
<?php if(!empty($_G['setting']['pluginhooks']['global_comment_bottom'])) echo $_G['setting']['pluginhooks']['global_comment_bottom'];?>

<?php if(empty($ajax_edit)) { ?></dl><?php } ?>