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

    echo '<section class="tableSection"> <table class="tabela">
        <tr class="headers"><th>ID Zdjęcia</th><th>Opis Zdjęcia</th><th>Data Wystawienia</th><th>Data Modyfikacji</th> <th>Dokument Jest Aktywny</th> </tr>';

    while ($r = $result->fetch_assoc()) {

        echo "<tr><td>{$r["IdZdjecia"]}</td><td>{$r["OpisZdjecia"]}</td><td>{$r["DataWstawienia"]}</td><td>{$r["DataModyfikacji"]}</td></td><td>{$r["CzyAktywny"]}</td></tr>";
    }

    echo '</table> </section>';
} else {
    echo "0 results";
}

?>

