<div class='row'>
         
        <div class='col-md-2'> </div>
             
        <div class='col-md-10'>
            
            
        <form class="form-inline" role="form" action="search.php" method="post">
            
        
      <select type="text" name="county" class="input-sm" id="county" placeholder="county" >
            <option Value="">-- Choose County --</option>
<option {if $search['county'] == "Antrim"}selected='selected' {/if} Value="Antrim">Antrim</option>
<option {if $search['county'] == "Armagh"}selected='selected' {/if} Value="Armagh">Armagh</option>
<option {if $search['county'] == "Carlow"}selected='selected' {/if} Value="Carlow">Carlow</option>
<option {if $search['county'] == "Cavan"}selected='selected' {/if} Value="Cavan">Cavan</option>
<option {if $search['county'] == "Clare"}selected='selected' {/if} Value="Clare">Clare</option>
<option {if $search['county'] == "Cork"}selected='selected' {/if} Value="Cork">Cork</option>
<option {if $search['county'] == "Derry"}selected='selected' {/if} Value="Derry">Derry</option>
<option {if $search['county'] == "Donegal"}selected='selected' {/if} Value="Donegal">Donegal</option>
<option {if $search['county'] == "Down"}selected='selected' {/if} Value="Down">Down</option>
<option {if $search['county'] == "Dublin"}selected='selected' {/if} Value="Dublin">Dublin</option>
<option {if $search['county'] == "Galway"}selected='selected' {/if} Value="Galway">Galway</option>
<option {if $search['county'] == "Fermanagh"}selected='selected' {/if} Value="Fermanagh">Fermanagh</option>
<option {if $search['county'] == "Kerry"}selected='selected' {/if} Value="Kerry">Kerry</option>
<option {if $search['county'] == "Kildare"}selected='selected' {/if} Value="Kildare">Kildare</option>
<option {if $search['county'] == "Kilkenny"}selected='selected' {/if} Value="Kilkenny">Kilkenny</option>
<option {if $search['county'] == "Laois"}selected='selected' {/if} Value="Laois">Laois</option>
<option {if $search['county'] == "Limerick"}selected='selected' {/if} Value="Limerick">Limerick</option>
<option {if $search['county'] == "Leitrim"}selected='selected' {/if} Value="Leitrim">Leitrim</option>
<option {if $search['county'] == "Longford"}selected='selected' {/if} Value="Longford">Longford</option>
<option {if $search['county'] == "Louth"}selected='selected' {/if} Value="Louth">Louth</option>
<option {if $search['county'] == "Meath"}selected='selected' {/if} Value="Meath">Meath</option>
<option {if $search['county'] == "Mayo"}selected='selected' {/if} Value="Mayo">Mayo</option>
<option {if $search['county'] == "Monaghan"}selected='selected' {/if} Value="Monaghan">Monaghan</option>
<option {if $search['county'] == "Offaly"}selected='selected' {/if} Value="Offaly">Offaly</option>
<option {if $search['county'] == "Roscommon"}selected='selected' {/if} Value="Roscommon">Roscommon</option>
<option {if $search['county'] == "Sligo"}selected='selected' {/if} Value="Sligo">Sligo</option>
<option {if $search['county'] == "Tipperary"}selected='selected' {/if} Value="Tipperary">Tipperary</option>
<option {if $search['county'] == "Tyrone"}selected='selected' {/if} Value="Tyrone">Tyrone</option>
<option {if $search['county'] == "Waterford"}selected='selected' {/if} Value="Waterford">Waterford</option>
<option {if $search['county'] == "Wexford"}selected='selected' {/if} Value="Wexford">Wexford</option>
<option {if $search['county'] == "Westmeath"}selected='selected' {/if} Value="Westmeath">Wesmeath</option>
<option {if $search['county'] == "Wicklow"}selected='selected' {/if} Value="Wicklow">Wicklow</option>
      </select>
    
            
          
    <input type="text" name="city" id="city" class="input-sm" placeholder="City" value="{$search['city']}" >
    
    
    <select type="number" name="bedrooms" id="bedrooms" class="input-sm" placeholder="Bedrooms">
       <option value="">Bedrooms...</option>
        <option {if $search['bedrooms'] == "1"}selected='selected' {/if} value="1">1</option>
        <option {if $search['bedrooms'] == "2"}selected='selected' {/if}value="2">2</option>
        <option {if $search['bedrooms'] == "3"}selected='selected' {/if}value="3">3</option>
        <option {if $search['bedrooms'] == "4"}selected='selected' {/if}value="4">4</option>
        <option {if $search['bedrooms'] == "5"}selected='selected' {/if}value="5">5</option>
        <option {if $search['bedrooms'] == "6"}selected='selected' {/if}value="6">6</option>
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
         
         
         
         
         
    