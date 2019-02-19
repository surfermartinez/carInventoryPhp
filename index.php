<?php
include 'car.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Car Inventory</title>
	<link rel="stylesheet" type="text/css" title="style" href="CSS/<?php echo (!isset($_COOKIE['style'])?'White':$_COOKIE['style']) ?>.css" />
</head>
<body>

	<?php
	if(!isset($_SESSION['inventory']))
	{
		$_SESSION['inventory']=array();
	}

	if(isset($_POST['SubmitButton'])){ //check if form was submitted
	  $newCar = new Car($_POST['make'], $_POST['model'], $_POST['nr_seats'], $_POST['auto']); //get input text - "BMW", "M3", 5, True)
		//array_push($_SESSION['inventory'], $newCar);

		if(isset($_SESSION['inventory']))
		{
			 array_push($_SESSION['inventory'], $newCar);
		}
	}
	?>


	<form action="theme_switch.php" method="post">
  <select name="choice">
  <option value="White" selected>Classic View</option>
  <option value="Gray">Gray View</option>
	<option value="fernando-theme">Fernandos' view</option>
  <option value="file_name_for_css">Insert Your View Here</option>
  </select>
  <input type="submit" name="submitThemeSwithch" value="Go">
  </form>
	<h1>Welcome to my Car inventory page!</h1>
	<h2>You are invited to add classes, properties and methods to make this web inventory program AWESOME!</h2>
	<p>Before you commit your code always type "git pull" to get the latest changes!</p>
	<p>More info to come...</p>

	<form name="form" action="index.php" method="post">
		<input type="text" name="make" id="make" value="Make">
		<input type="text" name="model" id="model" value="Model">
		<input type="text" name="auto" id="auto" value="Automatic? True/False">
		<input type="text" name="nr_seats" id="nr_seats" value="Number of passengers">
		<input type="submit" name="SubmitButton"/>
	</form>


	<?php
	include 'wheel.php';
	include 'door.php';
	echo '<h3>Lets list our cars here!</h3>';
	//echo $message;


//Example of an Array
//$my_first_array = array(2,5,1,7,3,20,10,100);
//var_dump($my_first_array);
//echo'<br><br><br><br><br>';

//Example of instantiating an Object "Car"
// $a_car = new Car("BMW", "M3", 5, True);

//Create another objects with the following attributes
//"BMW","X7",seats:7, Auto, sold:15,stock:13

//Example of instantiating multiple Objects "Car" inside an inventory list
/*	$cars = array
  (
  array(new Car("BMW", "M3", 5, True),10,2),
	array(new Car("Holden", "Captiva", 7, True),1,2)

	//Create and insert more objects in the array with the following attributes
	//"BMW","X7",seats:7, Auto, sold:15,stock:13
  //"Saab","9000",seats:5, Manual, sold:4,stock:7
  //"Land Rover", "Explorer",seats:5, Manual, sold:10,stock:7
);

echo var_dump($cars);
//echo $cars[0][0]->make."-".$cars[0][0]->model.": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
//echo $cars[1][0]->make."-".$cars[1][0]->model.": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
*/

echo "<table style='width:50%'>";
echo "<tr>";
echo "	 <th>Make</th>";
echo "	 <th>Model</th> ";
echo "	 <th>Automatic?</th> ";
echo " </tr>";
for( $i = 0; $i<sizeof($_SESSION['inventory']); $i++ ) {
		echo "<tr>";
		echo "<td>".$_SESSION['inventory'][$i]->make."</td><td>".$_SESSION['inventory'][$i]->model."</td><td>".$_SESSION['inventory'][$i]->is_auto."</td>";
		//.": In stock: ".$cars[$i][1].", sold: ".$cars[$i][2].".<br>";
		echo "<tr>";
}
echo "</table>";

?>

</body>
</html>
