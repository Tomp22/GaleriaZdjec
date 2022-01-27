<?php
   
    require_once "db.php";
    $polaczenie = @new mysqli($host,$dbuser,$dbpass,$dbname);

    if($polaczenie->connect_errno!=0)
    {
        echo "Error: ".$polaczenie->connect_errno." Opis: ".$polaczenie->connect_error;;
    }
	else
    {
        $email = $_POST['email'];
        $haslo = $_POST['haslo'];
        
        $sql = "SELECT * FROM uzytkownik WHERE email='$email' AND haslo='$haslo'";

        if ($rezultat = $polaczenie->query($sql))
        {
            
            $ile_mail = $rezultat->num_rows; //
            if($ile_mail > 0)
            {
                $_SESSION['zalogowany'] = true;
                $wiersz = $rezultat->fetch_assoc(); // schowane dane do tablicy asocjacyjnej
                $_SESSION['IdUzytkownika'] = $wiersz['IdUzytkownika'];
                $_SESSION['Imie'] = $wiersz['Imie'];
                $_SESSION['Nazwisko'] = $wiersz['Nazwisko'];
                $_SESSION['email'] = $wiersz['email'];
                $_SESSION['haslo'] = $wiersz['haslo'];
                $_SESSION['Plec'] = $wiersz['Plec'];

                unset($_SESSION['blad']);

                $rezultat->close();
                redirectRoute('dashboard');
            } 
            else
            {
                $_SESSION['blad'] = '<span style="color:red">Nieprawdidlowy email lub haslo!</span>';
                //redirectRoute('index');
            }
        }
        $polaczenie->close();
    }
   