<?php
    session_start();
   
    require_once "db.php";
    $polaczenie = @new mysqli($host,$dbuser,$dbpass,$dbname);

    if($polaczenie->connect_errno!=0)
    {
        echo "Error: ".$polaczenie->connect_errno." Opis: ".$polaczenie->connect_error;;
    }
	else
    {
        $email = $_SESSION['email'];
        $haslo = $_SESSION['haslo'];
        
        $sql = "SELECT * FROM uzytkownik WHERE email='$email' AND haslo='$haslo'";

        if ($rezultat = $polaczenie->query($sql))
        {
            $ile_mail = $rezultat->num_rows;
            if($ile_mail > 0)
            {
                $wiersz = $rezultat->fetch_assoc(); // schowane dane do tablicy asocjacyjnej
                $mail = $wiersz['email'];
                $rezultat->close();
                header('Location: dashboard.php');                
                //echo $mail;
            } 
            else
            {

            }
        }
        echo "it works - polaczenie z baza OK";
    }
    $polaczenie->close();

    //echo $email;
    //echo $haslo;