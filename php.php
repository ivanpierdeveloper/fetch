<?php 
	//header('Content-Type: application/json; charset=utf-8');
	if($_SERVER['REQUEST_METHOD'] === 'POST') {
		$usr = $_POST['usr'];
		$psw = $_POST['psw'];
		$age = $_POST['age'];
		echo "USERNAME: $usr PASSWORD: $psw AGE: $age";
	} else {
		$json = '[
   {
       "usr" : "guest PhP",
       "psw" : "guest12345",
       "age" : 25,
       "role" : [
           {
               "role_utente" : "osptite",
               "role_provvisorio" : "guest ospite"
           }
       ]
   },
   {
       "usr" : "user",
       "psw" : "user12345",
       "age" : 29,
       "role" : [
           {
               "role_utente" : "utente",
               "role_provvisorio" : "user ospite"
           }
       ]
   },
   {
       "usr" : "admin",
       "psw" : "admin12345",
       "age" : 33,
       "role" : [
           {
               "role_utente" : "amministratore",
               "role_provvisorio" : "admin ospite"
           }
       ]
   },
   {
       "usr" : "superadmin",
       "psw" : "superadmin12345",
       "age" : 55,
       "role" : [
           {
               "role_utente" : "superman",
               "role_provvisorio" : "superadmin ospite"
           }
       ]
   }
]';
	echo $json;
	}
?>

