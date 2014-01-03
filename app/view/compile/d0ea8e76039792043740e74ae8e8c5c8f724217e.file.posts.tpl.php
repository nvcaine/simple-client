<?php /* Smarty version Smarty-3.0.8, created on 2014-01-03 15:46:30
         compiled from "app/view/templates\posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:379052c6db5679ec03-86676555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0ea8e76039792043740e74ae8e8c5c8f724217e' => 
    array (
      0 => 'app/view/templates\\posts.tpl',
      1 => 1388763988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '379052c6db5679ec03-86676555',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('posts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
?>
	<strong><?php echo $_smarty_tpl->getVariable('post')->value->post_title;?>
</strong> (published: <?php echo $_smarty_tpl->getVariable('post')->value->post_modified;?>
)<br />
<?php }} ?>