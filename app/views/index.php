<header class="welcome">
<h1> Hello </h1>
<h2>Witamy w aplikacji do zarzadzania dokumentami</h2>
</header>
<section>
    <form method=POST class="loginBox">
        <div class="loginBoxWrapper">
            <article>
                <label for="">Email</label>
                <input type=text name='email'>
            </article>
            <article>
                <label for="">Haslo</label>
                <input type=password name='haslo'>
            </article>
            <?php 
            if(isset($_SESSION['e_blad']))
            {
                echo '<div class ="error">'.$_SESSION['e_blad'].'</div>';
                unset($_SESSION['e_blad']);
            } 
            ?>
            <button class=" btn btn-primary  login-button" type=submit>Login <i class="fas fa-sign-in-alt"></i>
            </button>
            <div class="subSection">
                <h4>Nie masz Konta?</h4>
                <a href="<?php echo route('rejestracja') ?>" class="btn btn-secondary second-login-button"> Nowe konto <i class="fas fa-user-circle"></i>
                </a>
            </div>
        </div>
    </form>
</section>