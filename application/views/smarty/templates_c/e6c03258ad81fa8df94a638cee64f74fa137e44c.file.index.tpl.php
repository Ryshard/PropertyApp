<?php /* Smarty version Smarty-3.1.15, created on 2013-12-23 16:37:01
         compiled from "C:\Dropbox\htdocs\PropertyApp\application\views\smarty\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13152b78a75f14369-27839403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6c03258ad81fa8df94a638cee64f74fa137e44c' => 
    array (
      0 => 'C:\\Dropbox\\htdocs\\PropertyApp\\application\\views\\smarty\\templates\\index.tpl',
      1 => 1387813018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13152b78a75f14369-27839403',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b78a7600c8e6_77165523',
  'variables' => 
  array (
    'message' => 0,
    'date' => 0,
    'urlAction' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b78a7600c8e6_77165523')) {function content_52b78a7600c8e6_77165523($_smarty_tpl) {?>
    <div class="container content">
        <h3> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 </h3>
        <h1> Welcome to our Property App</h1>
       Today is: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 
       <br />
       
       <div class="row">
           <div class="col-md-3 col-md-offset-2">
       <a href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=proplist" class="btn btn-danger"> See what we have for you </a>
           </div>
       
       
       </div>
      </div><?php }} ?>
