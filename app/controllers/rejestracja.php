<?php
if (isset($_POST['imie']))
{
    $wszystko_OK = true;

  
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];

    if (strlen($imie)<3 || (strlen($imie)>20))
	{
		$wszystko_OK=false;
		$_SESSION['e_imie']="Imie musi posiadac od 3 do 20 znakow";
	} 
    if (strlen($nazwisko)<3 || (strlen($nazwisko)>20))
	{
		$wszystko_OK=false;
		$_SESSION['e_nazwisko']="Nazwisko musi posiadac od 3 do 20 znakow";
	}

    $email = $_POST['email'];
    $emailB = filter_var($email,FILTER_SANITIZE_EMAIL); // tzn sanitazyzacja adresu email --> polsrodek
    // filter var zwaliduj poprawnosc tego adresu jezeli jest nie poprawny      lub         jest rozny
    if ((filter_var($emailB,FILTER_VALIDATE_EMAIL)==false) || ($emailB != $email))
    {
        $wszystko_OK=false;
        $_SESSION['e_email']="Podaj poprawny adres email";
    }

    $haslo1 = $_POST['haslo1'];
    $haslo2 = $_POST['haslo2'];
    if ((strlen($haslo1)<8) || (strlen($haslo1)>20))
    {
        $wszystko_OK=false;
        $_SESSION['e_haslo']="Haslo musi posiadac od 8 do 20 znakow";
    }
    if($haslo1!=$haslo2)
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Podane hasla nie sa identyczne";			
		}
    $haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);

    $sub = $_POST['sub'];

    require_once "db.php";
    mysqli_report(MYSQLI_REPORT_STRICT);

    try 
    {
        $polaczenie = new mysqli($host,$dbuser,$dbpass,$dbname);

        if($polaczenie->connect_errno!=0)
        {
            throw new Exception(mysqli_connect_errno());
        }
        else
        {
            //czy email juz istnieje
            $rezultat = $polaczenie->query("SELECT imie FROM uzytkownik WHERE email='$email'");

            if (!$rezultat) throw new Exception($polaczenie->error);

            $ile_takich_maili = $rezultat->num_rows;
            if($ile_takich_maili>0)
            {
                $wszystko_OK=false;
			    $_SESSION['e_email']="Istnieje juz konto przypisane do tego adresu email";
            }
            
            if ($wszystko_OK == true)
            {
                if ($polaczenie->query("INSERT INTO uzytkownik VALUES ('$imie', '$nazwisko', 
                                                                        '$email', '$haslo_hash', '$sub')"))
                {
                    $_SESSION['udanarejestracja']=true;
                    redirectRoute('witamy');
                }
                else
                {
                    throw new Exception($polaczenie->error);
                }
            }      
    
            $polaczenie->close();
        }
    }
    catch(Exception $e)
    {
        echo 'Blad serwera! Przepraszamy';
        echo '<br />Infromacja deweloperska: '.$e;
    }

}