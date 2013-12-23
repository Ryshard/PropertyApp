<?php /* Smarty version Smarty-3.1.15, created on 2013-12-23 14:33:53
         compiled from "C:\Dropbox\htdocs\PropertyApp\application\views\smarty\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1450152b784e74e54a1-23234741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3761b494e8b52c37cedb2ab3fe4fccf921fc859a' => 
    array (
      0 => 'C:\\Dropbox\\htdocs\\PropertyApp\\application\\views\\smarty\\templates\\footer.tpl',
      1 => 1387805628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1450152b784e74e54a1-23234741',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b784e74ed1a9_07644388',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b784e74ed1a9_07644388')) {function content_52b784e74ed1a9_07644388($_smarty_tpl) {?>  <hr>

      <footer>
        <p>&copy; <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
      </footer>
    </div> <!-- /container -->  

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/bootstrap/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
 
  <script>        
 $(document).ready(function () {
              console.log('jquery loaded');
                 
              $('#ajax').empty();
              $.getJSON('propertyjson.php', function(data) {
                        //   console.log('loaded');
                        
                           var items = "<table class='table table-striped'>";
                              items +="<th>Image</th>";
                               items +="<th>Address (1)</th>";
                               items +="<th>Address (2)</th>";
                               items +="<th>City</th>";
                               items +="<th>County</th>";
                               items +="<th>Type</th>";
                               items +="<th>Bedrooms</th>";
                               items +="<th>Size (m2)</th>";
                               items +="<th>Price</th>";
                               items +="<th>Agent</th></tr>";
                               
                               if (data.length<1){
                                   items += "<tr><td colspan='9'>";
                                   items += " Sorry - no results";
                                   items += "</td></tr>";
                               }
                               else {
                            $.each(data, function(i,jsonItem){ 
                                items += "<tr>";
                                items += "<td><img src='application/uploads/";
                                
                                var len = jsonItem['cover_img'].length;
                               if (len == 0){
                                    items += "empty.png";
                                          }            
                               else {
                               items += jsonItem['cover_img'];
                                    }
                                
                                items += "' class='cover'></td>";
                                items += "<td>" + jsonItem['address_1'] + "</td>";  
                                items += "<td>" + jsonItem['address_2'] + "</td>";
                                items += "<td>" + jsonItem['city'] + "</td>";
                                items += "<td>" + jsonItem['county'] + "</td>";
                                items += "<td>" + jsonItem['type'] + "</td>";
                                items += "<td>" + jsonItem['bedrooms'] + "</td>";
                                items += "<td>" + jsonItem['size'] + "</td>";
                                items += "<td>" + jsonItem['price'] + "</td>";
                                items += "<td>" + jsonItem['contact'] + "</td>";
                                items += "</tr>";
                            
                                 });   }    
                    
                        items +="</table>";
              $('#ajax').append(items);  
    
            });  
          
          $('#del_img').click (function ()
                        {
                        var thisCheck = $(this);
                        if (thisCheck.is (':checked'))
                        {
                        $('#upload_img').css('visibility','hidden');
                        }
                        else {
                        $('#upload_img').css('visibility','visible');    
                        }
                        });
          
          });
          
   </script>
</body>
</html>
<?php }} ?>
