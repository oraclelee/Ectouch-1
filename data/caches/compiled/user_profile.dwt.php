<?php echo $this->fetch('library/user_header.lbi'); ?> 
<script type="text/javascript">
	  <?php $_from = $this->_var['lang']['profile_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
		var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</script>
<form name="formEdit" action="<?php echo url('user/profile');?>" method="post" onSubmit="return userEdit()">
  <section class="flow-consignee ect-bg-colorf">
    <ul>
      <li>
        <div class="input-text"><b class="pull-left"><?php echo $this->_var['lang']['username']; ?>：</b><span>
          <?php echo $this->_var['info']['username']; ?>
          </span></div>
      </li>
      <li>
        <div class="input-text"><b class="pull-left"><?php echo $this->_var['lang']['email']; ?>：</b><span>
          <input name="email" type="text" placeholder="<?php echo $this->_var['lang']['no_emaill']; ?>"  value="<?php echo $this->_var['profile']['email']; ?>">
          </span></div>
      </li>
      <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?> 
      <?php if ($this->_var['field']['id'] == 6): ?>
      <li>
        <div class="form-select"> <i class="fa fa-sort"></i>
          <select name="sel_question">
            <option value='0'><?php echo $this->_var['lang']['sel_question']; ?></option>
            
            <?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'],'selected'=>$this->_var['profile']['passwd_question'])); ?>
          
          </select>
        </div>
      </li>
      <li>
        <div class="input-text"><b class="pull-left"><?php echo $this->_var['lang']['passwd_answer']; ?>:</b> <span>
          <input placeholder="<?php echo $this->_var['lang']['passwd_answer']; ?>" name="passwd_answer" type="text" value="<?php echo $this->_var['profile']['passwd_answer']; ?>" />
          </span></div>
      </li>
      <?php else: ?>
      <li>
        <div class="input-text"><b class="pull-left"><?php echo $this->_var['field']['reg_field_name']; ?>:</b><span>
          <input name="extend_field<?php echo $this->_var['field']['id']; ?>" type="text" value="<?php echo $this->_var['field']['content']; ?>" placeholder="<?php echo $this->_var['field']['reg_field_name']; ?>">
          </span></div>
      </li>
      </li>
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </section>
  <input name="act" type="hidden" value="profile" />
  <div class="two-btn ect-padding-tb ect-padding-lr ect-margin-tb text-center">
    <input name="submit" type="submit" value="<?php echo $this->_var['lang']['confirm_edit']; ?>" class="btn btn-info ect-bg-colory" />
  </div>
</form>

<section class="flow-consignee ect-bg-colorf">
  <ul>
   <a href="<?php echo url('user/edit_password');?>">
    <li>修改密码</li>
   </a>
   <a href="<?php echo url('user/address_list');?>">
    <li>收货地址</li>
   </a>
  </ul>
</section>

<?php if ($this->_var['is_not_wechat']): ?>
<section class="flow-consignee ect-bg-colorf">
  <ul>
    <li><a href="<?php echo url('user/logout');?>">注销退出</a></li>
  </ul>
</section>
<?php endif; ?>
</div>
<?php echo $this->fetch('library/search.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>