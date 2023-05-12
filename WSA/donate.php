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
<form action="a.php" method="POST">
<tr>
      			<td>Name</td>
      			<td><input type="text" name="name" placeholder=" Enter Name" title="name"></td>
      			
</tr>
<tr>
      			<td>Email</td>
      			<td><input type="text" name="email" placeholder=" Enter Email" title="email"></td>

      		</tr>
<tr>
      			<td>Address</td>
      			<td><input type="text" name="address" placeholder=" Enter Address" title="address"></td>

      		</tr>
<tr>
      			<td>Purpose</td>
      			<td>
      				<select name="pur">
      					<option>--select--</option>
      					<option>One day meal </option>
      					<option>Vaccination</option>
      					<option>Medicines</option>
      					<option>Sterilization</option>
      					<option>Minor Surgery</option>
      					<option>Treat for grumpy old souls</option>
      					<option>Passive parents</option>
      				</select>
      			</td>
</tr><tr>
      	<td>Enter Ammount</td>
      			<td>
      				<select name="amm">
      					<option>--select--</option>
      					<option>600</option>
      					<option>1000</option>
      					<option>1500</option>
      					<option>2000</option>
      					<option>More</option>
      				</select>
      			</td>
      		</tr>
            
      		
      		
      		<td>

      			<td><input type="submit" name="submit" value="Donate"> </td>
      		</td>

</form></table>
</div></center>
<?php
if(isset($_POST['submit']))
         {
         	$name=$_POST['name'];
         	$address=$_POST['address'];
         	$dis=$_POST['amm'];
         	$coin=$_POST['pur'];
         	$email=$_POST['email'];
         	if(mysqli_query($a,"insert into donate(name,address,amm,pur,email) value('$name','$address','$amm','$pur','$email')"))
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