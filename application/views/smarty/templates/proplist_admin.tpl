 <div class="container">
     
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
{foreach $rows as $row}
    <tr>     
        <td><img class="cover" 
                 
                 {if $row['cover_img']}
                 src="{$uploads}{$row['cover_img']}"
                 {else}
                 src="{$uploads}empty.png"   
                 {/if}
                 
                 ></td>
        <td>{$row['property_id']}</td>
        <td>{$row['address_1']}</td>
        <td>{$row['address_2']}</td>
        <td>{$row['city']}</td>
        <td>{$row['county']}</td>
        <td>{$row['type']}</td>
        <td>{$row['bedrooms']}</td>
        <td>{$row['size']}</td>
        <td>{$row['price']}</td>
        <td>{$row['contact']}</td>
        <td>{$row['date']}</td>
           
         
        <td><a class="btn btn-info" href="{$urlAction}=edit&id={$row['property_id']}">Edit</a><td>
        <td><a class="btn btn-danger" href="{$urlAction}=delete&id={$row['property_id']}">Delete</a><td>
              <td class="status"> 
        {if $row['sold']=='1'}
            <span class="red" >SOLD </span>
            {else}
           <span class="green" > Available </span>
         {/if}
        </td>
    </tr>
{/foreach}
</table>
        
        
        </div>
      
</div>
     
         </div><!-- /end container -->
