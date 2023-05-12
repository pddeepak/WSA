<?php
$a=mysqli_connect('localhost','root','','don');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="img/icon" href="img/b.jpg">
	<title></title>
    <style>
        #form{
	width: 600px;
	padding-top: 100px;
	height: auto;

}
td{
	width: 300px;
	height: 50px;
}
    </style>
</head>
<body>
	<div id="full">
		<div style="background-image: url('https://wallup.net/wp-content/uploads/2018/10/06/213312-animals-dogs-puppies-sleeping-baskets.jpg'); background-repeat: no-repeat; width:100 % ; background-size: 100%; height: 750px;">
        
		
		<br><br><br><br>
	 <center> <div id="form">
			<table  style="background: rgba(140, 112, 48, 0.421); color: whitesmoke; width:100%">
<form action="b.php" method="POST">
<tr>
      			<td>Name</td>
      			<td><input type="text" name="name" placeholder=" Enter Name" title="name"></td>
      			
</tr>
<tr>
      			<td>Email</td>
      			<td><input type="text" name="email" placeholder=" Enter Email" title="email"></td>

      		</tr>
            <td>

      			<td><input type="submit" name="submit" value="Subscribe"> </td>
      		</td>

</form></table>
</div></center>
<?php
if(isset($_POST['submit']))
         {
         	$name=$_POST['name'];
         	$email=$_POST['email'];
         	if(mysqli_query($a,"insert into sub(name,email) value('$name','$email')"))
             {

                echo "donated";

             }
            else
            {
         	  echo "not donated";
            }
     }
     
?>
</body>
</html>