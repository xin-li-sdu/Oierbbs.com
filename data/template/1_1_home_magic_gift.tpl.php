<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); if($op=='show') { ?>
<table class="dt">
<tr>
<td>积分类型</td>
<td>
<select name="credittype" class="ps"><?php if(is_array($extcredits)) foreach($extcredits as $key => $value) { ?><option value="<?php echo $key;?>"><?php echo $value;?></option>
<?php } ?>
</select>
</td>
</tr>
<tr>
<td>埋设积分</td>
<td><input type="text" name="credits" value="10" class="px" /></td>
</tr>
<tr>
<td>每份积分</td>
<td><input type="text" name="percredit" value="1" class="px" /></td>
</tr>
</table>
<?php } ?>