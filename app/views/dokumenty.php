<header class="menu">
    <div class="pushLeft">
        <a href="<?php echo route('dashboard') ?>" class="btn btn-primary ">Dashboard <i class="fas fa-tachometer-alt"></i></a>
        <a href="<?php echo route('dokumenty') ?>" class="btn btn-primary active">Dokumnety <i class="fas fa-folder-open"></i></a>
        <a href="<?php echo route('zdjecia') ?>" class="btn btn-primary">Zdjecia <i class="fas fa-camera"></i>
        </a>
    </div>
    <div class="pushRight"><a href="<?php echo route('login') ?>" class="btn btn-primary">Wyloguj <i class="fas fa-sign-out-alt"></i>
        </a>
    </div>
</header>
<section>
    <h1>Dokumenty</h1>
</section>
<?php
// Create connection
$polaczenie = @new mysqli($host, $dbuser, $dbpass, $dbname);
$sql = "SELECT * FROM dokument WHERE CzyAktywny= 1";
$result = $polaczenie->query($sql);
if ($result->num_rows > 0) {

    // output data of each row

    echo '<section class="tableSection"> <table class="tabela">
        <tr class="headers"><th>ID Dokumnentu</th><th>Opis Dokumentu</th><th>Typ Dokumentu</th><th>Data Wystawienia</th><th>Data Modyfikacji</th> <th>Dokument Jest Aktywny</th><th>Edycja Dokumentu</th> </tr>';

    while ($r = $result->fetch_assoc()) {

        echo "<tr><td>{$r["IdDokumentu"]}</td><td>{$r["OpisDokumentu"]}</td><td>{$r["TypDokumentu"]}</td><td>{$r["DataWstawienia"]}</td><td>{$r["DataModyfikacji"]}</td></td><td>{$r["CzyAktywny"]}</td><td><input type='submit' name='{$r["IdDokumentu"]}' value='Edytuj'> <input type='submit' name='{$r["IdDokumentu"]}' value='Usuń'></td></tr>";
    }

    echo '</table> </section>';
} else {
    echo "0 results";
}

?>

