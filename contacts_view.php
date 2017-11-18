<html>
    <head>		
        <title>Codelgniter pagination</title>
      <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css"> -->
        <style>
table, th, td {
      border-collapse: collapse;
   border: 1px solid black;
}
      </style>  
    </head>
    <body> 
        <div class="main">
            <div id="content">
                <h3 align="center" id='form_head'>Codelgniter Pagination</h3><br/>
                <hr>
             
                    
                    <table align="center" style="width: 600px;">
                    <tr>
                     <th>Product Code</th>
                      <th>Product Name</th>
                      <th>Product Category</th>
                    </tr>

                    <?php  foreach ($results as $value) { ?>
                    
                      <tr>
                          <td><?php echo $value['productCode']  ?></td>
                        <td><?php echo $value['productName'] ?> </td>
                        <td><?php echo $value['productLine'] ?> </td>
                     
                       </tr>
                       
                      
                    <?php  }     ?>
                         
                         
                  
                      
              
             
                 
                     
                          <tr>
                           <td colspan="3" align="center">
                        <!-- Show pagination links -->
                        <?php foreach ($links as $link) { ?>
                        
                        <?php  echo  $link ; ?>
                         
                      
                        <?php } ?>
                    </td>
                               </tr>
                     
                  
                 </table>  
             
            </div>
             </div>
        
        </body>
</html>