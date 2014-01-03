<?php /* Smarty version Smarty-3.0.8, created on 2014-01-03 15:23:49
         compiled from "app/view/templates\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1633952c6d605195ef7-93474377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19d3b3382a489e213b8ac1b0b59ef040b1e46fbb' => 
    array (
      0 => 'app/view/templates\\404.tpl',
      1 => 1388762626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1633952c6d605195ef7-93474377',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div  style="text-align: center;">
	<div class="alert alert-danger">
		<h3>Error! Resource not found</h3>
	</div>

	<p>The resource you are looking for, does not appear to exist.</p>
	<p>We apologize for the inconvenience.</p>

	<p>
		<a href="<?php echo $_smarty_tpl->getVariable('appURL')->value;?>
" class="btn btn-success">
			<span class="icon-white icon-chevron-left"></span> Homepage
		</a>
	</p>
</div>