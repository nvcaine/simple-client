<?php /* Smarty version Smarty-3.0.8, created on 2014-01-03 15:36:28
         compiled from "app/view/templates\components/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:608952c6d8fc311808-25473644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e5ccc5f5edf405e21f991bdc3c477ba1ea66d1c' => 
    array (
      0 => 'app/view/templates\\components/menu.tpl',
      1 => 1388763364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '608952c6d8fc311808-25473644',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<header>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">

				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a href="<?php echo $_smarty_tpl->getVariable('appURL')->value;?>
">
					<span class="brand">Client Demo</span>
				</a>

				<div class="nav-collapse collapse">
					<ul id="mainMenu" class="nav">
						<li<?php if (($_smarty_tpl->getVariable('page')->value=='users')){?> class="active"<?php }?>>
							<a href="<?php echo $_smarty_tpl->getVariable('appURL')->value;?>
users/">Manage users</a>
						</li>

						<li<?php if (($_smarty_tpl->getVariable('page')->value=='posts')){?> class="active"<?php }?>>
							<a href="<?php echo $_smarty_tpl->getVariable('appURL')->value;?>
posts/">Manage posts</a>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
</header>