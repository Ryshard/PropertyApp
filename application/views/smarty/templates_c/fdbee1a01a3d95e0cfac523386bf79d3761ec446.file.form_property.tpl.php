<?php /* Smarty version Smarty-3.1.15, created on 2013-12-23 16:20:13
         compiled from "C:\Dropbox\htdocs\PropertyApp\application\views\smarty\templates\form_property.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3036452b784e73d3d68-21567860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdbee1a01a3d95e0cfac523386bf79d3761ec446' => 
    array (
      0 => 'C:\\Dropbox\\htdocs\\PropertyApp\\application\\views\\smarty\\templates\\form_property.tpl',
      1 => 1387812009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3036452b784e73d3d68-21567860',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b784e74c6096_84947912',
  'variables' => 
  array (
    'row' => 0,
    'uploads' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b784e74c6096_84947912')) {function content_52b784e74c6096_84947912($_smarty_tpl) {?><div class='row'>

    <div class='col-md-8 col-md-offset-2'>


<form class="form-horizontal" role="form" action="processform.php" method="post" enctype="multipart/form-data">
 <input type = "hidden" name="property_id" value = "<?php echo $_smarty_tpl->tpl_vars['row']->value['property_id'];?>
" />
  <input type = "hidden" name="date" value = "<?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
" />  

 <div class="form-group">
    <label for="address_2" class="col-lg-2 control-label">Address (line 1)</label>
    <div class="col-lg-10">
      <input type="text" name="address_1" id="address_1" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['address_1'];?>
" placeholder="address_1">
    </div>
  </div>
    
     <div class="form-group">
    <label for="address_2" class="col-lg-2 control-label">Address (line 2)</label>
    <div class="col-lg-10">
      <input type="text" name="address_2" id="address_2" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['address_2'];?>
" placeholder="address_2">
    </div>
  </div>
    
     <div class="form-group">
    <label for="city" class="col-lg-2 control-label">City</label>
    <div class="col-lg-10">
      <input type="text" name="city" id="city" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['city'];?>
" placeholder="city">
    </div>
  </div>
    
    
    
  <div class="form-group">
    <label for="county" class="col-lg-2 control-label">County</label>
    <div class="col-lg-10">
      <select type="text" name="county" class="form-control" id="county" placeholder="county" >
            <option Value=" ">-- Choose County --</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Antrim') {?>selected='selected' <?php }?> Value="Antrim">Antrim</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Armagh') {?>selected='selected' <?php }?> Value="Armagh">Armagh</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Carlow') {?>selected='selected' <?php }?> Value="Carlow">Carlow</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Cavan') {?>selected='selected' <?php }?> Value="Cavan">Cavan</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Clare') {?>selected='selected' <?php }?> Value="Clare">Clare</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Cork') {?>selected='selected' <?php }?> Value="Cork">Cork</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Derry') {?>selected='selected' <?php }?> Value="Derry">Derry</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Donegal') {?>selected='selected' <?php }?> Value="Donegal">Donegal</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Down') {?>selected='selected' <?php }?> Value="Down">Down</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Dublin') {?>selected='selected' <?php }?> Value="Dublin">Dublin</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Galway') {?>selected='selected' <?php }?> Value="Galway">Galway</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Fermanagh') {?>selected='selected' <?php }?> Value="Fermanagh">Fermanagh</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Kerry') {?>selected='selected' <?php }?> Value="Kerry">Kerry</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Kildare') {?>selected='selected' <?php }?> Value="Kildare">Kildare</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Kilkenny') {?>selected='selected' <?php }?> Value="Kilkenny">Kilkenny</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Laois') {?>selected='selected' <?php }?> Value="Laois">Laois</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Limerick') {?>selected='selected' <?php }?> Value="Limerick">Limerick</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Leitrim') {?>selected='selected' <?php }?> Value="Leitrim">Leitrim</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Longford') {?>selected='selected' <?php }?> Value="Longford">Longford</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Louth') {?>selected='selected' <?php }?> Value="Louth">Louth</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Meath') {?>selected='selected' <?php }?> Value="Meath">Meath</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Mayo') {?>selected='selected' <?php }?> Value="Mayo">Mayo</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Monaghan') {?>selected='selected' <?php }?> Value="Monaghan">Monaghan</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Offaly') {?>selected='selected' <?php }?> Value="Offaly">Offaly</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Roscommon') {?>selected='selected' <?php }?> Value="Roscommon">Roscommon</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Sligo') {?>selected='selected' <?php }?> Value="Sligo">Sligo</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Tipperary') {?>selected='selected' <?php }?> Value="Tipperary">Tipperary</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Tyrone') {?>selected='selected' <?php }?> Value="Tyrone">Tyrone</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Waterford') {?>selected='selected' <?php }?> Value="Waterford">Waterford</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Wexford') {?>selected='selected' <?php }?> Value="Wexford">Wexford</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Westmeath') {?>selected='selected' <?php }?> Value="Westmeath">Wesmeath</option>
<option <?php if ($_smarty_tpl->tpl_vars['row']->value['county']=='Wicklow') {?>selected='selected' <?php }?> Value="Wicklow">Wicklow</option>
      </select>
    </div>
  </div>
    
      <div class="form-group">
    <label for="price" class="col-lg-2 control-label"> Price </label>
    <div class="col-lg-10">
      <input type="text" name="price" id="price" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
" placeholder="price">
    </div>
  </div>   
    
    <div class="form-group">
    <label for="type" class="col-lg-2 control-label">Type</label>
    <div class="col-lg-10">
      <select type="text" name="type" class="form-control" id="type" placeholder="type" >
            <option Value=" ">-- Choose Type --</option>
    <option <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='detached') {?>selected='selected' <?php }?> Value="detached">detached</option>
    <option <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='semi-detached') {?>selected='selected' <?php }?> Value="semi-detached">semi-detached</option>
    <option <?php if ($_smarty_tpl->tpl_vars['row']->value['type']=='terraced') {?>selected='selected' <?php }?> Value="terraced">terraced</option>
 
     </select>
    </div>
  </div>
    
     <div class="form-group">
    <label for="bedrooms" class="col-lg-2 control-label"> Bedrooms </label>
    <div class="col-lg-10">
         <select type="number" name="bedrooms" id="bedrooms" class="input-sm">
       <option value="">Bedrooms...</option>
        <option <?php if ($_smarty_tpl->tpl_vars['row']->value['bedrooms']=="1") {?>selected='selected' <?php }?> value="1">1</option>
        <option <?php if ($_smarty_tpl->tpl_vars['row']->value['bedrooms']=="2") {?>selected='selected' <?php }?>value="2">2</option>
        <option <?php if ($_smarty_tpl->tpl_vars['row']->value['bedrooms']=="3") {?>selected='selected' <?php }?>value="3">3</option>
        <option <?php if ($_smarty_tpl->tpl_vars['row']->value['bedrooms']=="4") {?>selected='selected' <?php }?>value="4">4</option>
        <option <?php if ($_smarty_tpl->tpl_vars['row']->value['bedrooms']=="5") {?>selected='selected' <?php }?>value="5">5</option>
        <option <?php if ($_smarty_tpl->tpl_vars['row']->value['bedrooms']=="6") {?>selected='selected' <?php }?>value="6">6</option>
    </select>
    </div>
  </div>  
    
         <div class="form-group">
    <label for="size" class="col-lg-2 control-label"> Size </label>
    <div class="col-lg-10">
      <input type="text" name="size" id="size" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['size'];?>
" placeholder="Size">
    </div>
  </div>   
    
          <div class="form-group">
    <label for="contact" class="col-lg-2 control-label"> Contact </label>
    <div class="col-lg-10">
      <input type="text" name="contact" id="contact" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['contact'];?>
" placeholder="contact person">
    </div>
  </div>   
    
    
    
    
    <div class="form-group">
    
         <label class="col-lg-2 control-label" for ="image"> Image </label>
            <div class="col-lg-10">    
               <img class="cover" <?php if ($_smarty_tpl->tpl_vars['row']->value['cover_img']) {?>
                 src="<?php echo $_smarty_tpl->tpl_vars['uploads']->value;?>
<?php echo $_smarty_tpl->tpl_vars['row']->value['cover_img'];?>
"
                 <?php } else { ?>
                 src="<?php echo $_smarty_tpl->tpl_vars['uploads']->value;?>
empty.png"   
                 <?php }?>  />
            </div>
    </div>
      <?php if ($_smarty_tpl->tpl_vars['row']->value['cover_img']) {?>
    <div class="form-group">
    <label for="del_img" class="col-lg-2 control-label"> Delete Image </label>
    <div class="col-lg-10">
      <input type="checkbox" name="del_img" id="del_img" class=checkbox" >
    </div>
  </div>   <?php }?>
            
            
    <div id="upload_img" class="form-group">
	<label class="col-lg-2 control-label" for="inputproductTitle">Upload Image</label>
		<div class="col-lg-10">
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                <input type="file" name="uploadedfile" id="uploadedfile"/>
		</div>
	</div>
  

  <div class="form-group">
    <label for="statusg" class="col-lg-2 control-label"> Status </label>
  <div class="col-lg-10">
   <select type="number" name="status" id="status" class="input-sm">
       
        <option <?php if ($_smarty_tpl->tpl_vars['row']->value['sold']=="0") {?>selected='selected' <?php }?> value="0">Available</option>
        <option <?php if ($_smarty_tpl->tpl_vars['row']->value['sold']=="1") {?>selected='selected' <?php }?> value="1">Sold</option>
       
    </select>
  </div>
  </div>
    
    
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-success">Add/Update Property</button>
    </div>
  </div>
</form>
            
                 </div>
                 </div>
                 <?php }} ?>
