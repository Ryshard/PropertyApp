<?php /* Smarty version Smarty-3.1.15, created on 2013-12-23 15:34:09
         compiled from "C:\Dropbox\htdocs\PropertyApp\application\views\smarty\templates\delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2986052b849e15e94e7-70568708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6ed21768600bd39bc9f10a43633d640b3fe758d' => 
    array (
      0 => 'C:\\Dropbox\\htdocs\\PropertyApp\\application\\views\\smarty\\templates\\delete.tpl',
      1 => 1387809240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2986052b849e15e94e7-70568708',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b849e1633876_84683922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b849e1633876_84683922')) {function content_52b849e1633876_84683922($_smarty_tpl) {?><div class='row'>

    <div class='col-md-10 col-md-offset-1'> 
        <h3>    Are you sure you wish to Delete This Property </h3>
        
        <a class="btn btn-danger" href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"> Yes - Proceed </a>
        
        <a class="btn btn-success" href="index.php?action=proplist_admin"> No - Go Back !</a>
    </div>
    
</div><?php }} ?>
