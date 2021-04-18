<?php



# Kod za zaustavljanje i ispisivanja greške, umesto toga moja poruka!

if(!isset($_POST["password_1"]))
{

	die("Lozinka koju ste uneli ne postoji!");
}

if(!isset($_POST["password_2"]))
{

	die("Ova stranica nije ispravna!");
}

if(!isset($_POST["user_1"]))
{

	die("Korisničko ime koje ste uneli ne postoji!");
}

if(!isset($_POST["user_2"]))
{

	die("Korisničko ime koje ste uneli ne postoji!");
}



$user_1 = strtolower( $_POST["user_1"]);
$user_2 = strtolower( $_POST["user_2"]);



if($user_1 == "zika" || $user_2 == "peric")
	
{

	echo "Vaše korisničko ime je tačno!";
}

else
{
	echo "Žao nam je ali to je netačno!";

}



$password_1 = strtolower( $_POST["password_1"]);
$password_2 = strtolower( $_POST["password_2"]);


if($password_1 == "saddavidim1984" || $password_2 == "saddavidim1984")
	
{
	echo "Lozinka je tačna!";
}

else
{
	echo "Uneta lozinka nije tačna!";
}









?>