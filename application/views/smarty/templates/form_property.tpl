<div class='row'>

    <div class='col-md-8 col-md-offset-2'>


<form class="form-horizontal" role="form" action="processform.php" method="post" enctype="multipart/form-data">
 <input type = "hidden" name="property_id" value = "{$row['property_id']}" />
  <input type = "hidden" name="date" value = "{$row['date']}" />  

 <div class="form-group">
    <label for="address_2" class="col-lg-2 control-label">Address (line 1)</label>
    <div class="col-lg-10">
      <input type="text" name="address_1" id="address_1" class="form-control" value="{$row['address_1']}" placeholder="address_1">
    </div>
  </div>
    
     <div class="form-group">
    <label for="address_2" class="col-lg-2 control-label">Address (line 2)</label>
    <div class="col-lg-10">
      <input type="text" name="address_2" id="address_2" class="form-control" value="{$row['address_2']}" placeholder="address_2">
    </div>
  </div>
    
     <div class="form-group">
    <label for="city" class="col-lg-2 control-label">City</label>
    <div class="col-lg-10">
      <input type="text" name="city" id="city" class="form-control" value="{$row['city']}" placeholder="city">
    </div>
  </div>
    
    
    
  <div class="form-group">
    <label for="county" class="col-lg-2 control-label">County</label>
    <div class="col-lg-10">
      <select type="text" name="county" class="form-control" id="county" placeholder="county" >
            <option Value=" ">-- Choose County --</option>
<option {if $row['county'] == 'Antrim'}selected='selected' {/if} Value="Antrim">Antrim</option>
<option {if $row['county'] == 'Armagh'}selected='selected' {/if} Value="Armagh">Armagh</option>
<option {if $row['county'] == 'Carlow'}selected='selected' {/if} Value="Carlow">Carlow</option>
<option {if $row['county'] == 'Cavan'}selected='selected' {/if} Value="Cavan">Cavan</option>
<option {if $row['county'] == 'Clare'}selected='selected' {/if} Value="Clare">Clare</option>
<option {if $row['county'] == 'Cork'}selected='selected' {/if} Value="Cork">Cork</option>
<option {if $row['county'] == 'Derry'}selected='selected' {/if} Value="Derry">Derry</option>
<option {if $row['county'] == 'Donegal'}selected='selected' {/if} Value="Donegal">Donegal</option>
<option {if $row['county'] == 'Down'}selected='selected' {/if} Value="Down">Down</option>
<option {if $row['county'] == 'Dublin'}selected='selected' {/if} Value="Dublin">Dublin</option>
<option {if $row['county'] == 'Galway'}selected='selected' {/if} Value="Galway">Galway</option>
<option {if $row['county'] == 'Fermanagh'}selected='selected' {/if} Value="Fermanagh">Fermanagh</option>
<option {if $row['county'] == 'Kerry'}selected='selected' {/if} Value="Kerry">Kerry</option>
<option {if $row['county'] == 'Kildare'}selected='selected' {/if} Value="Kildare">Kildare</option>
<option {if $row['county'] == 'Kilkenny'}selected='selected' {/if} Value="Kilkenny">Kilkenny</option>
<option {if $row['county'] == 'Laois'}selected='selected' {/if} Value="Laois">Laois</option>
<option {if $row['county'] == 'Limerick'}selected='selected' {/if} Value="Limerick">Limerick</option>
<option {if $row['county'] == 'Leitrim'}selected='selected' {/if} Value="Leitrim">Leitrim</option>
<option {if $row['county'] == 'Longford'}selected='selected' {/if} Value="Longford">Longford</option>
<option {if $row['county'] == 'Louth'}selected='selected' {/if} Value="Louth">Louth</option>
<option {if $row['county'] == 'Meath'}selected='selected' {/if} Value="Meath">Meath</option>
<option {if $row['county'] == 'Mayo'}selected='selected' {/if} Value="Mayo">Mayo</option>
<option {if $row['county'] == 'Monaghan'}selected='selected' {/if} Value="Monaghan">Monaghan</option>
<option {if $row['county'] == 'Offaly'}selected='selected' {/if} Value="Offaly">Offaly</option>
<option {if $row['county'] == 'Roscommon'}selected='selected' {/if} Value="Roscommon">Roscommon</option>
<option {if $row['county'] == 'Sligo'}selected='selected' {/if} Value="Sligo">Sligo</option>
<option {if $row['county'] == 'Tipperary'}selected='selected' {/if} Value="Tipperary">Tipperary</option>
<option {if $row['county'] == 'Tyrone'}selected='selected' {/if} Value="Tyrone">Tyrone</option>
<option {if $row['county'] == 'Waterford'}selected='selected' {/if} Value="Waterford">Waterford</option>
<option {if $row['county'] == 'Wexford'}selected='selected' {/if} Value="Wexford">Wexford</option>
<option {if $row['county'] == 'Westmeath'}selected='selected' {/if} Value="Westmeath">Wesmeath</option>
<option {if $row['county'] == 'Wicklow'}selected='selected' {/if} Value="Wicklow">Wicklow</option>
      </select>
    </div>
  </div>
    
      <div class="form-group">
    <label for="price" class="col-lg-2 control-label"> Price </label>
    <div class="col-lg-10">
      <input type="text" name="price" id="price" class="form-control" value="{$row['price']}" placeholder="price">
    </div>
  </div>   
    
    <div class="form-group">
    <label for="type" class="col-lg-2 control-label">Type</label>
    <div class="col-lg-10">
      <select type="text" name="type" class="form-control" id="type" placeholder="type" >
            <option Value=" ">-- Choose Type --</option>
    <option {if $row['type'] == 'detached'}selected='selected' {/if} Value="detached">detached</option>
    <option {if $row['type'] == 'semi-detached'}selected='selected' {/if} Value="semi-detached">semi-detached</option>
    <option {if $row['type'] == 'terraced'}selected='selected' {/if} Value="terraced">terraced</option>
 
     </select>
    </div>
  </div>
    
     <div class="form-group">
    <label for="bedrooms" class="col-lg-2 control-label"> Bedrooms </label>
    <div class="col-lg-10">
         <select type="number" name="bedrooms" id="bedrooms" class="input-sm">
       <option value="">Bedrooms...</option>
        <option {if $row['bedrooms'] == "1"}selected='selected' {/if} value="1">1</option>
        <option {if $row['bedrooms'] == "2"}selected='selected' {/if}value="2">2</option>
        <option {if $row['bedrooms'] == "3"}selected='selected' {/if}value="3">3</option>
        <option {if $row['bedrooms'] == "4"}selected='selected' {/if}value="4">4</option>
        <option {if $row['bedrooms'] == "5"}selected='selected' {/if}value="5">5</option>
        <option {if $row['bedrooms'] == "6"}selected='selected' {/if}value="6">6</option>
    </select>
    </div>
  </div>  
    
         <div class="form-group">
    <label for="size" class="col-lg-2 control-label"> Size </label>
    <div class="col-lg-10">
      <input type="text" name="size" id="size" class="form-control" value="{$row['size']}" placeholder="Size">
    </div>
  </div>   
    
          <div class="form-group">
    <label for="contact" class="col-lg-2 control-label"> Contact </label>
    <div class="col-lg-10">
      <input type="text" name="contact" id="contact" class="form-control" value="{$row['contact']}" placeholder="contact person">
    </div>
  </div>   
    
    
    
    
    <div class="form-group">
    
         <label class="col-lg-2 control-label" for ="image"> Image </label>
            <div class="col-lg-10">    
               <img class="cover" {if $row['cover_img']}
                 src="{$uploads}{$row['cover_img']}"
                 {else}
                 src="{$uploads}empty.png"   
                 {/if}  />
            </div>
    </div>
      {if $row['cover_img']}
    <div class="form-group">
    <label for="del_img" class="col-lg-2 control-label"> Delete Image </label>
    <div class="col-lg-10">
      <input type="checkbox" name="del_img" id="del_img" class=checkbox" >
    </div>
  </div>   {/if}
            
            
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
       
        <option {if $row['sold'] == "0"}selected='selected' {/if} value="0">Available</option>
        <option {if $row['sold'] == "1"}selected='selected' {/if} value="1">Sold</option>
       
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
                 