<header class="menu">
    <div class="pushLeft">
        <a href="<?php echo route('dashboard') ?>" class="btn btn-primary ">Dashboard <i class="fas fa-tachometer-alt"></i></a>
        <a href="<?php echo route('dokumenty') ?>" class="btn btn-primary">Dokumnety <i class="fas fa-folder-open"></i></a>
        <a href="<?php echo route('zdjecia') ?>" class="btn btn-primary active">Zdjecia <i class="fas fa-camera"></i></a>
    </div>
    <div class="pushRight"><a href="<?php echo route('index') ?>" class="btn btn-primary">Wyloguj <i class="fas fa-sign-out-alt"></i>
        </a>
    </div>
</header>
<section>
    <h1>Zdjecia</h1>
</section>
<?php
// Create connection
$polaczenie = @new mysqli($host, $dbuser, $dbpass, $dbname);
$sql = "SELECT * FROM zdjecia WHERE CzyAktywny= 1";
$result = $polaczenie->query($sql);
if ($result->num_rows > 0) {

    // output data of each row

    echo '<section class="tableSection"> <form method="POST" action="">  <table class="tabela">
        <tr class="headers"><th>ID Zdjęcia</th><th>Opis Zdjęcia</th><th>Data Wystawienia</th><th>Data Modyfikacji</th> <th>Dokument Jest Aktywny</th> </th><th>Edycja Dokumentu</th></tr>';

    while ($r = $result->fetch_assoc()) {
        $index = $r['IdZdjecia'];
        echo  $index;
        echo "<tr><td>{$r["IdZdjecia"]}</td><td>{$r["OpisZdjecia"]}</td><td>{$r["DataWstawienia"]}</td><td>{$r["DataModyfikacji"]}</td></td><td>{$r["CzyAktywny"]}</td> <td>
        <input type='submit' name='Edytuj' value='Edytuj'>
        <input type='hidden' name='Edytuj-data' value='{$index}'>
        <input type='submit' name='Usun' value='Usun'>
        <input type='hidden'  name='Usun-data' value='{$index}'> </td></tr>";
    }

    echo '</table> </form> </section>';
} else {
    echo "0 results";
}
if ($_POST) {
    if (isset($_POST['Usun'])) {
        $id = $_POST['Usun-data'];
        $output = "button nacisniety".$id;
        echo "$output";
       usun_liste($id);
}
if (isset($_POST['Edytuj'])) {
    $id = $_POST['Edytuj-data'];
    $output = "button nacisniety".$id;
    echo "$output";
    edytuj_liste($id);
}
}

function usun_liste($nr)
{
    global $polaczenie;

    $rozkaz = "delete from zdjecia where IdZdjecia=$nr;";
    mysqli_query($polaczenie, $rozkaz) or exit("Błąd w zapytaniu: " . $rozkaz);
}

function edytuj_liste($nr = -1) {
	global $polaczenie;	
	
  // poniższy fragment ustawia wartości zmiennych imie i nazwisko
  // wyciągając z bazy dla studenta o podanym w parametrze numerze
	if($nr != -1) { // edycja
		$rozkaz = "select OpisZdjecia from zdjecia where IdZdjecia=$nr;";
		$rekord = mysqli_query($polaczenie, $rozkaz) or exit("Błąd w zapytaniu: ".$rozkaz);
                
        $dok = mysqli_fetch_row($rekord);
        $opis = $dok[0];
                
		//$imie = mysqli_result($rekord, 0, "imie");
		//$nazwisko = mysqli_result($rekord, 0, "nazwisko");
	}
	else { // dodanie nowego
		$opis='';
	}
	
  // generuje formularz do edycji imienia i nazwiska studenta	
echo " 
	<form method=POST action=''> 
	<table border=0>
	<tr>
	<td>Opis Zdjecia</td><td colspan=2>
	<input type=text name='OpisZdjecia' value='$opis' size=15 style='text-align: left'></td>
	</tr>
	<tr>
	<td colspan=3>
	<input type=submit name='przycisk[$nr]' value='Zapisz' style='width:200px'></td>
	</tr>
	</table></form>";
}







?>