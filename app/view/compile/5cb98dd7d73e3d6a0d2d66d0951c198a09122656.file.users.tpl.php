<?php /* Smarty version Smarty-3.0.8, created on 2014-01-03 15:39:16
         compiled from "app/view/templates\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1101352c6d9a4d4d802-13461861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cb98dd7d73e3d6a0d2d66d0951c198a09122656' => 
    array (
      0 => 'app/view/templates\\users.tpl',
      1 => 1388763553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1101352c6d9a4d4d802-13461861',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('users')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
?>
	<?php echo $_smarty_tpl->getVariable('user')->value->user_email;?>
<br />
<?php }} ?>