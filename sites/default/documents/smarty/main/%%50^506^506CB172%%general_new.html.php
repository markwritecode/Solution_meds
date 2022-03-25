<?php /* Smarty version 2.6.31, created on 2022-03-08 14:26:18
         compiled from /home/soluyggw/public_html/interface/clickmap/template/general_new.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'headerTemplate', '/home/soluyggw/public_html/interface/clickmap/template/general_new.html', 4, false),array('function', 'xl', '/home/soluyggw/public_html/interface/clickmap/template/general_new.html', 29, false),)), $this); ?>
<?php if (! $this->_tpl_vars['reportMode']): ?>
    <html>
    <head>
    <?php echo smarty_function_headerTemplate(array(), $this);?>

<?php endif; ?>
<script src="<?php echo $GLOBALS['webroot']; ?>/library/js/clickmap.js"></script>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['form']->template_dir; ?>
/css/clickmap.css" />
<?php if (! $this->_tpl_vars['reportMode']): ?>
	</head>
	<body>
<?php endif; ?>
<div class="container">
    <div class="row">
        <div class="col-9">
            <div id="container" class="container graphic-pain-map">
                <img src="<?php echo $this->_tpl_vars['form']->image; ?>
"/>
            </div>
        </div>
        <div class="col-3">
            <div id="legend" class="legend graphic-pain-map">
                <div class="body">
                    <ul></ul>
                </div>
            </div>
        </div>
        <?php if (! $this->_tpl_vars['reportMode']): ?>
            <div class="col-12">
                <div class="btn-group">
                    <button class="btn btn-primary btn-save" id="btn_save"><?php echo smarty_function_xl(array('t' => 'Save'), $this);?>
</button>
                    <button class="btn btn-secondary btn-delete" id="btn_clear"><?php echo smarty_function_xl(array('t' => 'Clear'), $this);?>
</button>
                    <button class="btn btn-secondary btn-cancel" onclick="top.restoreSession(); location.href='javascript:parent.closeTab(window.name, false)'"><?php echo smarty_function_xl(array('t' => 'Cancel'), $this);?>
</button>
                </div>
                <p>
                    <?php echo smarty_function_xl(array('t' => "Click a spot on the graphic to add a new annotation, click it again to remove it"), $this);?>
 <br/>
                    <?php echo smarty_function_xl(array('t' => "The 'Clear' button will remove all annotations."), $this);?>

                </p>
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="marker-template d-none">
	<span class='count'></span>
</div>

<script>
<?php echo '
    $(function () {
		var optionsLabel = '; ?>
<?php echo $this->_tpl_vars['form']->optionsLabel; ?>
<?php echo ';
		var options = '; ?>
<?php echo $this->_tpl_vars['form']->optionList; ?>
<?php echo ';
		var data = '; ?>
<?php echo $this->_tpl_vars['form']->data; ?>
<?php echo ';
		var hideNav = '; ?>
<?php echo $this->_tpl_vars['form']->hideNav; ?>
<?php echo ';

		clickmap({
            hideNav: hideNav,
            data: data,
			dropdownOptions: { label: optionsLabel, options: options },
			container: $("#container")
		});
	});
'; ?>

</script>

<?php if (! $this->_tpl_vars['reportMode']): ?>
    <form id="submitForm" name="submitForm" method="post" action="<?php echo $this->_tpl_vars['form']->saveAction; ?>
" onsubmit="return top.restoreSession()">
        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['form']->get_id(); ?>
" />
        <input type="hidden" name="pid" value="<?php echo $this->_tpl_vars['form']->get_pid(); ?>
" />
        <input type="hidden" name="process" value="true" />
        <input type="hidden" name="data" id="data" value=""/>
    </form>
    </body>
    </html>
<?php endif; ?>