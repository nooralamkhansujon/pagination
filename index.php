<?php



 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body>
     <br />
     <br />
     <div class="container">
        <h3>
        Make Pagination using Jquery,PHP,Ajax and MySQL
        </h3>

         <div class="table-responsive" id="pagination_data">
                
         </div>
     </div>



</body>
</html>




<script>
 $(document).ready(function(){

     load_data();
     function load_data(page){

         $.ajax({
             url    : "pagination.php",
             method : "POST",
             data   : {page:page},
             success: function(data){
                $("#pagination_data").html(data);
             }
         })
     }

     $(document).on('click','.pagination_link',function(){
              
              let page = $(this).attr('id');
              load_data(page);
     });

 });


</script>