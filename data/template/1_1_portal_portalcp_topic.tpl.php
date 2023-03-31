<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('portalcp_topic');?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="portal.php"><?php echo $_G['setting']['navs']['1']['navname'];?></a> <em>&rsaquo;</em>
<?php if($topic) { ?>
<a href="portal.php?mod=portalcp&amp;ac=topic&amp;topicid=<?php echo $topic['topicid'];?>">编辑专题</a>
<?php } else { ?>
<a href="portal.php?mod=portalcp&amp;ac=topic">新建专题</a>
<?php } ?>
</div>
</div>

<div id="ct" class="wp cl">
<div class="mn">
<?php if($op == 'add' || $op == 'edit') { ?>
<div class="bm">
<div class="bm_h">
<h1><?php if($topic) { ?>编辑专题<?php } else { ?>新建专题<?php } ?></h1>
</div>
<div class="bm_c">
<form id="topicform" name="topicform" method="post" autocomplete="off" enctype="multipart/form-data" action="portal.php?mod=portalcp&amp;ac=topic&amp;op=<?php echo $op;?>&amp;topicid=<?php echo $topic['topicid'];?>">
<table cellspacing="0" cellpadding="0" class="tfm">
<tr>
<th><span class="rq">*</span>专题标题</th>
<td><input type="text" name="title" value="<?php echo $topic['title'];?>" class="px" /></td>
</tr>
<tr>
<th><span class="rq">*</span>静态化名称</th>
<td><input type="text" name="name" value="<?php echo $topic['name'];?>" class="px" />
<p class="d">用于专题静态化时显示在链接中的个性化名称，不能重复</p>
</td>
</tr>

<tr>
<th>二级域名</th>
<td>
<?php if(!empty($_G['setting']['domain']['root']['topic'])) { ?>
http://<input type="text" name="domain" value="<?php echo $topic['domain'];?>" class="px" style="width:100px" />.<?php echo $_G['setting']['domain']['root']['topic'];?>
<?php } else { ?>
<input type="text" name="domain" value="" disabled="disabled" class="px" />
<?php } ?>
<p class="d">根域名设置完后，此处域名绑定才能生效，<a href="admin.php?action=domain&amp;operation=root&amp;highlight=专题" target="_blank">设置根域名</a>，专题的二级域名，不能重复</p>
</td>
</tr>

<tr>
<th>SEO 描述</th>
<td><textarea name="summary" rows="4" cols="60" class="pt"><?php echo $topic['summary'];?></textarea>
<p class="d">专题介绍,此描述内容用于搜索引擎优化，放在 meta 的 description 标签中</p>
</td>
</tr>
<tr>
<th>SEO 关键字</th>
<td><textarea name="keyword" rows="4" cols="60" class="pt"><?php echo $topic['keyword'];?></textarea>
<p class="d">此关键词用于搜索引擎优化，放在 meta 的 keyword 标签中，多个关键字间请用半角逗号 "," 隔开</p>
</td>
</tr>
<tr>
<th>专题封面</th>
<td>
<p class="mbn">
<label class="lb"><input type="radio" name="cover_tg" class="pr" checked="checked" onclick="document.getElementById('cover_tg_1').style.display='block';document.getElementById('cover_tg_2').style.display='none';" />网络链接</label>
<label class="lb"><input type="radio" name="cover_tg" class="pr" onclick="document.getElementById('cover_tg_1').style.display='none';document.getElementById('cover_tg_2').style.display='block'" />本地上传</label>
</p>
<p id="cover_tg_1"><input type="text" name="cover" value="<?php echo $coverpath;?>" class="px" /></p>
<p id="cover_tg_2" style="display: none;"><input type="file" name="cover" /></p>
<?php if($topic['cover']) { ?>
<p class="mtn">
当前封面:
<a href="<?php echo $topic['cover'];?>" target="_blank"><img src="<?php echo $topic['cover'];?>" alt="<?php echo $topic['title'];?>" width="160" height="160" /></a>
<label><input type="checkbox" value="yes" name="deletecover" class="pc" />删除</label>
</p>
<?php } ?>
</td>
</tr>
<tr>
<th>模板名</th>
<td><?php $pritplhide = empty($topic['primaltplname']) ? '' : ' style="display:none;"';?><?php $pritplshow = empty($topic['primaltplname']) ? ' style="display:none;"' : '';?><span id="pritplselect"<?php echo $pritplhide;?>><select name="primaltplname"><?php if(is_array($tpls)) foreach($tpls as $k => $v) { $selected = $topic['primaltplname'] == $k ? ' selected' : '';?><option value="<?php echo $k;?>"<?php echo $selected;?>><?php echo $v;?></option>
<?php } ?>
</select><?php if(is_array($tpls)) foreach($tpls as $k => $v) { ?><input type="hidden" name="signs[<?php echo dsign($k); ?>]" value="1"/>
<?php } $pritplophide = !empty($topic['primaltplname']) ? '' : ' style="display:none;"';?> <a href="javascript:;"<?php echo $pritplophide;?> onclick="$('pritplselect').style.display='none';$('pritplvalue').style.display='';" class="xi2">取消</a></span><?php $html = '<span id="pritplvalue"'.$pritplshow.'>'.getprimaltplname($topic['primaltplname'].'.htm').' <a href="javascript:;" onclick="$(\'pritplselect\').style.display=\'\';$(\'pritplvalue\').style.display=\'none\';" class="xi2">修改</a></span>'?><?php echo $html;?>
<p class="d">请将模板文件上传到模板目录的portal目录下，如：template/default/portal目录下，文件名必须为portal_topic_*.htm，*为自定义文件名<br />如果要重新选择模板，请确保新模板与原模板中可拖拽区域具有相同的ID，否则将会丢失分部或全部原DIY数据</p></td>
</tr>
<tr>
<th>是否允许评论</th>
<td>
<label class="lb"><input type="radio" name="allowcomment" value="1" class="pr"<?php if($topic['allowcomment']) { ?> checked="checked"<?php } ?> />是</label>
<label class="lb"><input type="radio" name="allowcomment" value="0" class="pr"<?php if(!$topic['allowcomment']) { ?> checked="checked"<?php } ?> />否</label>
</td>
</tr>
<tr>
<th>是否开启</th>
<td>
<label class="lb"><input type="radio" name="closed" value="1" class="pr"<?php if(empty($topic)) { ?>disabled="disabled"<?php } elseif(!$topic['closed']) { ?> checked="checked"<?php } ?> />是</label>
<label class="lb"><input type="radio" name="closed" value="0" class="pr"<?php if(empty($topic)) { ?>checked="checked" disabled="disabled"<?php } elseif($topic['closed']) { ?> checked="checked" <?php } ?> />否</label>
<?php if(empty($topic)) { ?>
<p class="d">创建专题时默认为关闭</p>
<?php } ?>
</td>
</tr>
<tr>
<th>附加内容</th>
<td>
<label for="useheader" class="lb"><input type="checkbox" id="useheader" name="useheader" class="pc"<?php if($topic['useheader']) { ?> checked="checked"<?php } ?> />站点导航</label>
<label for="usefooter" class="lb"><input type="checkbox" id="usefooter" name="usefooter" class="pc"<?php if($topic['usefooter']) { ?> checked="checked"<?php } ?> />站点尾部信息</label>
</td>
</tr>
<tr>
<th>&nbsp;</th>
<td>
<input type="hidden" name="editsubmit" value="true" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<button type="submit" name="editsubmit_btn" id="editsubmit_btn" value="true" class="pn pnc"><strong>提交</strong></button>
</td>
</tr>
</table>
</form>
</div>
</div>
<?php } elseif($op == 'diy') { ?>

开始自定义 <b><?php echo $topic['title'];?></b> 吧～

<?php } ?>
</div>
</div><?php include template('common/footer'); ?>