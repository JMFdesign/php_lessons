<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Lesson Five</title>
		<link rel="stylesheet" type="text/css" href="main.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">	
	</head>
	<body>

	<?php

	$animals = array(
		array("Elly", "elephant", "10", "0012", "02/07/2007"),
		array("Fred", "gorilla", "7", "0001", "03/12/2009"),
		array("Squeaky", "mouse", "2", "0008", "04/05/2011"),
		array("Sam", "cougar", "5", "0004", "11/07/2008"),
		array("Rib", "frog", "2", "0007", "08/21/2004"),
		array("Karen", "parrot", "3", "0009", "06/27/1989"),
	);

	$animalName = "";
	$animalType = "";
	$animalSize = "";
	$animalLocation = "";
	$animalDoa = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$animalName = animalValidation($_POST["name"]);
		$animalType = animalValidation($_POST["type"]);
		$animalSize = animalValidation($_POST["size"]);
		$animalLocation = animalValidation($_POST["location"]);
		$animalDoa = animalValidation($_POST["doa"]);
	}

	function animalValidation($data) {
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>

		<div id="container">

			<div id="center_content">

				<header>
					<h1>PHP Lesson 5</h1>
					<h2>Sample Zoo Application</h2>
				</header>

				<div id="left_side">

					<h3>Add an Animal</h3>

					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" />

						Name: <input type="text" name="name" value="<?php echo $animalName; ?>" /><br />
						Type: <input type="text" name="type" value="<?php echo $animalType; ?>" /><br />
						Size: <input type="text" name="size" value="<?php echo $animalSize; ?>" /><br />
						Location: <input type="text" name="location" value="<?php echo $animalLocation; ?>" />
							<br />
						Date of Acquisition: <input type="text" name="doa" value="<?php echo $animalDoa; ?>" />
							<br />
						<input type="submit" name="submit" value="Submit">

					</form>

					<?php
						array_push (
							$animals,
							array($animalName, $animalType, $animalSize, $animalLocation, $animalDoa)
						);
					?>
				</div>

				<div id="right_side">

					<h3>Animal List</h3>
					
					<table>
						<thead>
							<tr>
								<td>Name</td>
								<td>Type</td>
								<td>Size</td>
								<td>Location</td>
								<td>Date of Acquisition</td>
							</tr>
						</thead>
						<tbody>
							<?php
							if ($animals) {
								$animalsVal = 0; //set value for iteration
								$animalsCount = count($animals) - 1; //how many items in the array
								while ($animalsVal <= $animalsCount) {
									?>
									<tr>
										<td>
											<?php echo $animals[$animalsVal][0]; ?>
										</td>
										<td>
											<?php echo $animals[$animalsVal][1]; ?>
										</td>
										<td>
											<?php echo $animals[$animalsVal][2]; ?>
										</td>
										<td>
											<?php echo $animals[$animalsVal][3]; ?>
										</td>
										<td>
											<?php echo $animals[$animalsVal][4]; ?>
										</td>
									</tr>
										<?php
											$animalsVal++;
								}
								unset($animalsVal);
							}

							?>
						</tbody>
					</table>

				</div>
				
			</div>

		</div>
		
	</body>
</html>