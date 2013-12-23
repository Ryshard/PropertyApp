<?php /* Smarty version Smarty-3.1.15, created on 2013-12-23 16:20:40
         compiled from "C:\Dropbox\htdocs\PropertyApp\application\views\smarty\templates\searchform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:671352b78a8a740f99-76694166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2b3d28eb832aded97f3e773002656d1d940733c' => 
    array (
      0 => 'C:\\Dropbox\\htdocs\\PropertyApp\\application\\views\\smarty\\templates\\searchform.tpl',
      1 => 1387812035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '671352b78a8a740f99-76694166',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b78a8a82f457_77166739',
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b78a8a82f457_77166739')) {function content_52b78a8a82f457_77166739($_smarty_tpl) {?><div class='row'>
         
        <div class='col-md-2'> </div>
             
        <div class='col-md-10'>
            
            
        <form class="form-inline" role="form" action="search.php" method="post">
            
        
      <select type="text" name="county" class="input-sm" id="county" placeholder="county" >
            <option Value="">-- Choose County --</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Antrim") {?>selected='selected' <?php }?> Value="Antrim">Antrim</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Armagh") {?>selected='selected' <?php }?> Value="Armagh">Armagh</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Carlow") {?>selected='selected' <?php }?> Value="Carlow">Carlow</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Cavan") {?>selected='selected' <?php }?> Value="Cavan">Cavan</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Clare") {?>selected='selected' <?php }?> Value="Clare">Clare</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Cork") {?>selected='selected' <?php }?> Value="Cork">Cork</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Derry") {?>selected='selected' <?php }?> Value="Derry">Derry</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Donegal") {?>selected='selected' <?php }?> Value="Donegal">Donegal</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Down") {?>selected='selected' <?php }?> Value="Down">Down</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Dublin") {?>selected='selected' <?php }?> Value="Dublin">Dublin</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Galway") {?>selected='selected' <?php }?> Value="Galway">Galway</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Fermanagh") {?>selected='selected' <?php }?> Value="Fermanagh">Fermanagh</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Kerry") {?>selected='selected' <?php }?> Value="Kerry">Kerry</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Kildare") {?>selected='selected' <?php }?> Value="Kildare">Kildare</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Kilkenny") {?>selected='selected' <?php }?> Value="Kilkenny">Kilkenny</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Laois") {?>selected='selected' <?php }?> Value="Laois">Laois</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Limerick") {?>selected='selected' <?php }?> Value="Limerick">Limerick</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Leitrim") {?>selected='selected' <?php }?> Value="Leitrim">Leitrim</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Longford") {?>selected='selected' <?php }?> Value="Longford">Longford</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Louth") {?>selected='selected' <?php }?> Value="Louth">Louth</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Meath") {?>selected='selected' <?php }?> Value="Meath">Meath</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Mayo") {?>selected='selected' <?php }?> Value="Mayo">Mayo</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Monaghan") {?>selected='selected' <?php }?> Value="Monaghan">Monaghan</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Offaly") {?>selected='selected' <?php }?> Value="Offaly">Offaly</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Roscommon") {?>selected='selected' <?php }?> Value="Roscommon">Roscommon</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Sligo") {?>selected='selected' <?php }?> Value="Sligo">Sligo</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Tipperary") {?>selected='selected' <?php }?> Value="Tipperary">Tipperary</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Tyrone") {?>selected='selected' <?php }?> Value="Tyrone">Tyrone</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Waterford") {?>selected='selected' <?php }?> Value="Waterford">Waterford</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Wexford") {?>selected='selected' <?php }?> Value="Wexford">Wexford</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Westmeath") {?>selected='selected' <?php }?> Value="Westmeath">Wesmeath</option>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['county']=="Wicklow") {?>selected='selected' <?php }?> Value="Wicklow">Wicklow</option>
      </select>
    
            
          
    <input type="text" name="city" id="city" class="input-sm" placeholder="City" value="<?php echo $_smarty_tpl->tpl_vars['search']->value['city'];?>
" >
    
    
    <select type="number" name="bedrooms" id="bedrooms" class="input-sm" placeholder="Bedrooms">
       <option value="">Bedrooms...</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['bedrooms']=="1") {?>selected='selected' <?php }?> value="1">1</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['bedrooms']=="2") {?>selected='selected' <?php }?>value="2">2</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['bedrooms']=="3") {?>selected='selected' <?php }?>value="3">3</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['bedrooms']=="4") {?>selected='selected' <?php }?>value="4">4</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['bedrooms']=="5") {?>selected='selected' <?php }?>value="5">5</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['bedrooms']=="6") {?>selected='selected' <?php }?>value="6">6</option>
    </select>
    
              
   
    
    <select type="number" name="type" id="type" class="input-sm" placeholder="Type">
       <option value="">Type...</option>
        <option value="detached">detached</option>
        <option value="semi-detached">semi-detached</option>
        <option value="terraced">terraced</option>
        
    </select>
    
     <button type="submit" class="btn btn-default">Search</button>
        </form>    
            
            
        </div>    
</div>
         
         
         
         
         
    <?php }} ?>
