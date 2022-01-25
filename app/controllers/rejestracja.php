<?php
if (isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['plec']) && isset($_POST['haslo'])) 
{    
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $haslo = $_POST['haslo'];
        $plec = $_POST['plec'];

        if($haslo === 'test'){
                if($plec === 't'){
               
                echo 'Witam Panią, '.$imie ." " .$nazwisko .' w systemie.' ;  
                redirectRoute('dashboard');

            }else {
                echo 'Witam Pana, '.$imie ." " .$nazwisko .' w systemie.' ; 
                redirectRoute('dashboard');

                }
            
        } else {
            // echo 'Nieudane logowanie' ;
            // echo"<script language='javascript'>
            // window.alert('txts');
            // </script>
            //      ";
        }
    } else{
        echo 'Forma nie jest wypelniona kompletnie!!';

    }
