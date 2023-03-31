<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('space_task_parter');?>
<?php $_G[home_tpl_titles] = array('任务');?><?php include template('common/header'); ?><ul class="ml mls cl"><?php if(is_array($parterlist)) foreach($parterlist as $parter) { ?><li>
<a href="home.php?mod=space&amp;uid=<?php echo $parter['uid'];?>" title="<?php if($parter['status'] == 1) { ?>已完成<?php } elseif($parter['status'] == -1) { ?>失败的任务<?php } elseif($parter['status'] == 0) { ?>已完成 <?php echo $parter['csc'];?>%<?php } ?>" target="_blank" class="avt"><?php echo $parter['avatar'];?></a>
<p><a href="home.php?mod=space&amp;uid=<?php echo $parter['uid'];?>" title="查看详细资料" target="_blank"><?php echo $parter['username'];?></a></p>
</li>
<?php } ?>
</ul><?php include template('common/footer'); ?>