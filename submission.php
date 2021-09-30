<?php
$conn=mysqli_connect("localhost","root","","animals");
if(!$conn){
   die('Could not Connect My Sql:' .mysqli_error());
}
if(isset($_POST['submit']))
{	 $animal_name = $_POST['animal_name'];
	 $category = $_POST['category'];

     $message = $_POST['message'];
     $life_expectancy = $_POST['life_expectancy'];
    $id="";
	$file = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));  
    
     
   $sql="INSERT INTO `animals_details`(`id`, `animal_ name`, `category`, `photo`, `message`, `life_expectancy`) VALUES 
   ('$id','$animal_name','$category','$file','$message','$life_expectancy')";
	  if (mysqli_query($conn, $sql)) {
	      echo "<script>alert('Your data is sent')</script>";
		echo "<script>location.replace('animals.php')</script>";
	 } else {
		echo "Error: " . $sql . "<!-->
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

?>