<?php

if (isset($_POST['tekst']))
    {
        $nowy = $_POST["tekst"];

        $plik = fopen("a.txt", "a");
		fwrite($plik, "$nowy".PHP_EOL);
		fclose($plik); 
        header("Refresh:0");
    }
