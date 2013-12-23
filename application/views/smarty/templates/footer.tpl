  <hr>

      <footer>
        <p>&copy; {$name}</p>
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
