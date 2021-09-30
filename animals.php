


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .btn{
      width:100px;
  }</style>
<script>
  setTimeout(function() {
  location.reload();
}, 600000);
  </script>
  
</head>
<body>

<div class="container">
  <h2>Animals Details</h2>
 
  
   <br>
 
                                 
<?php

$con = mysqli_connect("localhost","root","","animals");




$result = mysqli_query($con,"SELECT * FROM animals_details ORDER BY id DESC");
 

 
 echo "
 <table class='table table-bordered table-striped'>
   <thead>
     <tr>
     <th>Sr no</th>
           <th>Animal Name</th>
           <th>Category</th>
       <th>Photo</th>
       <th>Message</th>
         <th>Life Expectancy</th>
      
      
     </tr>
   </thead>
 <tbody>";  
 
while($row = mysqli_fetch_array($result))

  {
   
$id1=$row['id'];
$ani=$row['animal_ name'];
$categ=$row['category'];
$phot=$row['photo'];
$mess=$row['message'];
$life=$row['life_expectancy'];


 echo "<tr>";
echo  " <td data-column='Srno' >" . $id1 . "</td>";
  echo " <td data-column='Date' >" . $ani . "</td>";
  
  echo  " <td data-column='Date' >" . $categ . "</td>";
  
  echo "<td data-column='Full Name'> <img src='<?php echo $phot; ?>' width='100' height='100'> . </td>";

  echo " <td data-column='Email'>" . $mess . "</td>";

  echo "<td data-column='Location'>" . $life. "</td>";

  

  echo "</tr>";

  }

echo "</table>";



//mysql_close($con);

?>
<a href="index.php">
<button type="button" class="btn btn-success">Add new </button></a>
</body>
</html>