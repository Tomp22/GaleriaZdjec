<header class="menu">
    <div class="pushLeft">
        <a href="<?php echo route('dashboard') ?>" class="btn btn-primary active">Dashboard <i class="fas fa-tachometer-alt"></i></a>
        <a href="<?php echo route('dokumenty') ?>" class="btn btn-primary">Dokumnety <i class="fas fa-folder-open"></i></a>
        <a href="<?php echo route('zdjecia') ?>" class="btn btn-primary">Zdjecia <i class="fas fa-camera"></i>
        <a href="<?php echo route('autor') ?>" class="btn btn-primary">Autor <i class="fas fa-user"></i>
        </a>
    </div>
    <div class="pushRight"><a href="<?php echo route('index') ?>" class="btn btn-primary">Wyloguj <i class="fas fa-sign-out-alt"></i>
        </a>
    </div>
</header>

<section class="dashboard">
    <ul>
        <li>
            <H1>Witaj Użytkowniku <small> - <?php echo $_SESSION['Imie'] ?> </small></H1>
        </li>
        <li>
            <h3>Twój Login to <small> - <?php echo $_SESSION['email'] ?> </small> </h3>
        </li>
        <li>
            <h3>Jesteś Użytkownikiem VIP/Basic  <small> - <?php echo $_SESSION['sub'] ?> </small> </h3>
        </li>
    </ul>
</section>
<section class="waterMark">
<form action="" method="POST"> 
<textarea name="tekst" value = "" rows="15" cols="80">
    <?php 
    if(file_exists('a.txt'))
    {
        $plik = file('a.txt');
        foreach($plik as $linia)
        echo $linia;
    } 
    ?>
</textarea></br>
<input type="submit">
</form>
</br>

</section>