<?php /* Smarty version Smarty-3.1.15, created on 2013-12-23 16:19:39
         compiled from "C:\Dropbox\htdocs\PropertyApp\application\views\smarty\templates\proplist_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1446252b78a8dde8de5-34008008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b982d3b1e3112f5c6aa03e633f9ff3ee735be5b7' => 
    array (
      0 => 'C:\\Dropbox\\htdocs\\PropertyApp\\application\\views\\smarty\\templates\\proplist_admin.tpl',
      1 => 1387811975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1446252b78a8dde8de5-34008008',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b78a8de5a274_72666160',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
    'uploads' => 0,
    'urlAction' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b78a8de5a274_72666160')) {function content_52b78a8de5a274_72666160($_smarty_tpl) {?> <div class="container">
     
<div class='row'>
   
    <div class='col-md-10'> 
        
      <table class="table table-striped">
          <tr>
              <th>Image </th>
              <th>ID </th>
              <th>Address (1)</th>
              <th>Address (2)</th>
              <th>City</th>
              <th>County</th>
              <th>Type</th>
              <th>Bed- rooms</th>
              <th>Size (m2)</th>
              <th>Price</th>
              <th>Agent</th>
              <th>Date</th>
              <th colspan="4">Actions</th>
              <th colspan="4">Status</th>
          </tr>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <tr>     
        <td><img class="cover" 
                 
                 <?php if ($_smarty_tpl->tpl_vars['row']->value['cover_img']) {?>
                 src="<?php echo $_smarty_tpl->tpl_vars['uploads']->value;?>
<?php echo $_smarty_tpl->tpl_vars['row']->value['cover_img'];?>
"
                 <?php } else { ?>
                 src="<?php echo $_smarty_tpl->tpl_vars['uploads']->value;?>
empty.png"   
                 <?php }?>
                 
                 ></td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['property_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['address_1'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['address_2'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['city'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['county'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['type'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['bedrooms'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['size'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['contact'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</td>
           
         
        <td><a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['property_id'];?>
">Edit</a><td>
        <td><a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['urlAction']->value;?>
=delete&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['property_id'];?>
">Delete</a><td>
              <td class="status"> 
        <?php if ($_smarty_tpl->tpl_vars['row']->value['sold']=='1') {?>
            <span class="red" >SOLD </span>
            <?php } else { ?>
           <span class="green" > Available </span>
         <?php }?>
        </td>
    </tr>
<?php } ?>
</table>
        
        
        </div>
      
</div>
     
         </div><!-- /end container -->
<?php }} ?>
