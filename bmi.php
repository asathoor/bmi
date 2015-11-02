<?php /* 

File: bmi.php
Purporse: BMI calculate and evaluate and persist data.

Jensen' Beer License ver. 1.99
==============================

This is beerware. 
If you like it you owe me one.
If you don't - well: shit happens.

*/

class aPerson {

	/* === PROPERTIES === */
	
	public $height;
	public $kg;
	public $bmi;
	public $sql;
	
	
	/* === METHODS === */
	
	/* enter values  */
	public function setHeight($height){
		$this->height = $height;
	}
	
	public function setWeight($kilo){
		$this->kg = $kilo;
	}
	
	/* calculate BMI */
	public function bmi(){
		$this->bmi =  ($this->kg * $this->kg) / $this->height;
		return round( $this->bmi );
	}

	/* input kg form  */
	public function theKgForm(){
		?>

		<form action="bmi.php" method="post" enctype="multipart/form-data">
			Enter kg. 
			<input type="number" name="kg" size="3">
			<input type="submit" name="ok" value="ok">
			<input type="reset" name="cancel" value="cancel">
		</form>
		
		<?php
	}

	/* BMI evaluation */


	/* NOTE ON BMI INTERPRETATION
	=============================
	
	Rule of thumb:
	
	Below 18.5 	Underweight
	18.5 – 24.9 	Normal or Healthy Weight
	25.0 – 29.9 	Overweight
	30.0 and Above 	Obese
	
	*/


	public function BmiEvaluation() {

		echo "<h3>Feedback</h3>";

		switch ($this->bmi) {
		    case $this->bmi < 19:
		        echo "You're underweight. Normal is 19 and above.";
		        break;
		    case $this->bmi > 19 && $this->bmi < 25:
		        echo "Your weight is normal.";
		        break;
		    case $this->bmi >= 25 && $this->bmi <=29:
		        echo "You're overweight.";
		        break;
		    case $this->bmi > 30:
		        echo "Obesity.";
		        break;

		}

	}

	/* INSERT the result to the database */
	public function saveKgToDatabase($kg){

		require "db.php"; // database connection

		$sql = "INSERT INTO `wordpress`.`vaegt` (`id`, `vaegt`, `date`) VALUES (NULL, '". $kg ."', CURRENT_TIMESTAMP);";		

		if ($mysqli->query( $sql )) {
			printf("%d Row inserted.\n", $mysqli->affected_rows);
		}
		else {
			echo "Insert failed. " . $mysqli->sqlstate;
		}
	}
}


/* The document */

$per = new aPerson();
$per->setHeight(170);

echo "<h1>Your BMI</h1>";

$per->theKgForm();

if (isset( $_REQUEST['ok'] )){
	$per->setWeight( $_REQUEST['kg'] );	
	echo "\n<strong>Your BMI is: " . $per->bmi() . ".</strong>\n";
	$per->bmiEvaluation();
	$per->saveKgToDatabase( $_REQUEST['kg'] );
}


/* progress display */

require "db.php";

$sql = "SELECT * FROM vaegt ORDER BY date DESC LIMIT 10";
$result =  $mysqli->query($sql);		

echo "<h4>Progress</h4><p>";

while($row = $result->fetch_assoc()){
    echo $row['vaegt'] . " " . $row['date'] . "<br>";
}

echo "</p>";
