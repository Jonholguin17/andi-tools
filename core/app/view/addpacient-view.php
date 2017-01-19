<?php


if(count($_POST)>0){
	$user = new PacientData();
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];

	$user->notes = $_POST["notes"];		
	$user->eps_type = $_POST["eps_type"];		
	$user->eps = $_POST["eps"];		
	$user->city = $_POST["city"];		
	$user->depto = $_POST["depto"];		
	$user->job = $_POST["job"];		
	$user->cellphone = $_POST["cellphone"];				
	$user->id_type = $_POST["id_type"];		
	$user->id_doc = $_POST["id_doc"];		
	
	$user->gender = $_POST["gender"];
	$user->day_of_birth = $_POST["day_of_birth"];
	
	$user->sick = $_POST["sick"];
	$user->medicaments = $_POST["medicaments"];
	$user->alergy = $_POST["alergy"];
	
	$user->address = $_POST["address"];
	$user->email = $_POST["email"];
	$user->phone = $_POST["phone"];
	$user->add();

print "<script>window.location='index.php?view=pacients';</script>";


}


?>