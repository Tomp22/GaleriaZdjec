<?php

if (isset($_POST['email']) && isset($_POST['haslo']))
{
    $wszystko_OK = true;
    require_once "db.php";
    $polaczenie = @new mysqli($host,$dbuser,$dbpass,$dbname);

    $email = $_POST['email'];
    $haslo = $_POST['haslo'];
    
    if($polaczenie->connect_errno!=0)
    {
        $wszystko_OK=false;
        echo "Error: ".$polaczenie->connect_errno." Opis: ".$polaczenie->connect_error;;
    }
	else
    {

        
        //$login = htmlentities($login, ENT_QUOTES, "UTF-8");
        
            if ($rezultat = $polaczenie->query( 
            sprintf("SELECT * FROM uzytkownik WHERE email='%s'",
            mysqli_real_escape_string($polaczenie,$email))))
            {            
                $ile_mail = $rezultat->num_rows; //
                if($ile_mail > 0)
                {
                    $wiersz = $rezultat->fetch_assoc(); // schowane dane do tablicy asocjacyjnej
                    if (password_verify($haslo,$wiersz['haslo']))
                    {
                        $_SESSION['zalogowany'] = true;
                        $_SESSION['Imie'] = $wiersz['Imie'];
                        $_SESSION['Nazwisko'] = $wiersz['Nazwisko'];
                        $_SESSION['email'] = $wiersz['email'];
                        $_SESSION['haslo'] = $wiersz['haslo'];
                        $_SESSION['sub'] = $wiersz['sub'];

                        unset($_SESSION['blad']);

                        $rezultat->close();
                        redirectRoute('dashboard');
                    }
                    else
                    {
                        $wszystko_OK=false;
                        $_SESSION['e_blad'] = '<span style="color:red">Nieprawdidlowy email lub haslo!</span>';   
                    }

                } 
                else
                {
                    $wszystko_OK=false;
                    $_SESSION['e_blad'] = '<span style="color:red">Nieprawdidlowy email lub haslo!</span>';
                }
            }
        
        $polaczenie->close();
    }

}
   