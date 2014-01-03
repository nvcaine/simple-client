<?php /* Smarty version Smarty-3.0.8, created on 2014-01-03 15:11:16
         compiled from "app/view/templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2360652c6d31474f278-12786556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ec5c2059a62581b14646ed963d41acec5ed27bd' => 
    array (
      0 => 'app/view/templates\\index.tpl',
      1 => 1388761736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2360652c6d31474f278-12786556',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php $_template = new Smarty_Internal_Template("components/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</head>

<body>

<div id="wrap">

	<?php $_template = new Smarty_Internal_Template("components/menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

	<div id="mainArea" class="container">
		<div class="innerWrapper">
		<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
		</div>
	</div>

	<div id="push" style="height:60px;"></div>
</div>

<?php $_template = new Smarty_Internal_Template("components/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

</body>
</html>