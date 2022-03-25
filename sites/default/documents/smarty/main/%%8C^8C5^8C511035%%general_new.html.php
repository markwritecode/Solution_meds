<?php /* Smarty version 2.6.31, created on 2022-03-08 15:16:48
         compiled from /home/soluyggw/public_html/interface/forms/prior_auth/templates/prior_auth/general_new.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'xlt', '/home/soluyggw/public_html/interface/forms/prior_auth/templates/prior_auth/general_new.html', 12, false),array('function', 'headerTemplate', '/home/soluyggw/public_html/interface/forms/prior_auth/templates/prior_auth/general_new.html', 13, false),array('modifier', 'attr', '/home/soluyggw/public_html/interface/forms/prior_auth/templates/prior_auth/general_new.html', 44, false),array('modifier', 'oeFormatShortDate', '/home/soluyggw/public_html/interface/forms/prior_auth/templates/prior_auth/general_new.html', 55, false),array('modifier', 'text', '/home/soluyggw/public_html/interface/forms/prior_auth/templates/prior_auth/general_new.html', 69, false),)), $this); ?>
<html>
<head>
<title><?php echo smarty_function_xlt(array('t' => 'Prior Authorization'), $this);?>
</title>
<?php echo smarty_function_headerTemplate(array('assets' => 'datetime-picker'), $this);?>


<?php echo '
<style>
    label {
        padding: 0px 5px !Important;
    }
</style>

<script>
	$(function () {   
	
		$(\'.datetimepicker\').datetimepicker({
			'; ?>

			<?php  $datetimepicker_timepicker = false;  ?>
			<?php  $datetimepicker_showseconds = false;  ?>
			<?php  $datetimepicker_formatInput = true;  ?>
			<?php  require($GLOBALS['srcdir'] . '/js/xl/jquery-datetimepicker-2-5-4.js.php');  ?>
			<?php echo '
		});
	
	});
</script>
'; ?>

</head>
<body>
	<div class="container mt-3">
        <div class="row">
            <div class="col-12">
				<h2><?php echo smarty_function_xlt(array('t' => 'Prior Authorization'), $this);?>
</h2>
                <form name="prior_auth" class="form-horizontal" method="post" action="<?php echo $this->_tpl_vars['FORM_ACTION']; ?>
/interface/forms/prior_auth/save.php" onsubmit="return top.restoreSession()">
				<input type="hidden" name="csrf_token_form" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['CSRF_TOKEN_FORM'])) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
">
				<fieldset>
					<legend><?php echo smarty_function_xlt(array('t' => 'Details'), $this);?>
</legend>
					<div class="form-group mt-3">
						<div class="row">
    					    <div class="col-sm-4">
							    <label for="prior_auth_number" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'Number'), $this);?>
:</label>
							    <input type="text" class="form-control" size="35" name="prior_auth_number" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['prior_auth']->get_prior_auth_number())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
">
						    </div>	
						    <div class="col-sm-4">
							    <label for="date_from" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'From'), $this);?>
:</label>
							    <input type='text' size='10' class='form-control datetimepicker' name='date_from' id='date_from' value='<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['prior_auth']->get_date_from())) ? $this->_run_mod_handler('oeFormatShortDate', true, $_tmp) : oeFormatShortDate($_tmp)))) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
' />
						    </div>
						    <div class="col-sm-4">	
							   <label for="date_to" class="col-form-label"><?php echo smarty_function_xlt(array('t' => 'To'), $this);?>
:</label>
							   <input type='text' size='10' class='form-control datetimepicker' name='date_to' id='date_to' value='<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['prior_auth']->get_date_to())) ? $this->_run_mod_handler('oeFormatShortDate', true, $_tmp) : oeFormatShortDate($_tmp)))) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
' />
						    </div>
						</div>
					</div>	
				</fieldset>
				<fieldset>
					<legend><?php echo smarty_function_xlt(array('t' => 'Comments'), $this);?>
</legend>
					<div class="form-group mt-3">
						<div class="row">
    					    <div class="col-sm-12">
								<textarea name="comments" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['prior_auth']->get_comments())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
" wrap="virtual" cols="75" rows="8"><?php echo ((is_array($_tmp=$this->_tpl_vars['prior_auth']->get_comments())) ? $this->_run_mod_handler('text', true, $_tmp) : text($_tmp)); ?>
</textarea>

							</div>
						</div>
					</div>	
				</fieldset>
				<div class="form-group mt-3">
					<div class="col-sm-12 position-override">
						<div class="btn-group" role="group">
							<button type="submit" class="btn btn-primary btn-save" onclick="top.restoreSession();" name="Submit"><?php echo smarty_function_xlt(array('t' => 'Save'), $this);?>
</button>
							<button type="button" class="btn btn-secondary btn-cancel" onclick="top.restoreSession(); location.href='<?php echo $this->_tpl_vars['DONT_SAVE_LINK']; ?>
';"><?php echo smarty_function_xlt(array('t' => 'Cancel'), $this);?>
</button>
						</div>
                        <input type="hidden" name="id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['prior_auth']->get_id())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
" />
                        <input type="hidden" name="activity" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['prior_auth']->get_activity())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
" />
                        <input type="hidden" name="pid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['prior_auth']->get_pid())) ? $this->_run_mod_handler('attr', true, $_tmp) : attr($_tmp)); ?>
" />
                        <input type="hidden" name="process" value="true" />
					</div>
				</div>

</form>
</div>
</div>
</div>
</body>
</html>