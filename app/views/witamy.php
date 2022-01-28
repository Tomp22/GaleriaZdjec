<header class="welcome">
<h1> Hello </h1>
<h2>Witamy w aplikacji do zarzadzania dokumentami</h2>
</header>
<section>
    <form method=POST class="loginBox">
        <div class="loginBoxWrapper">
        Mozesz juz zalogowac sie na swoje konto
            <article>
                <label for="">Email</label>
                <input type=text name='email'>
            </article>
            <article>
                <label for="">Haslo</label>
                <input type=password name='haslo'>
            </article>
            
            <button class=" btn btn-primary  login-button" type=submit>Login <i class="fas fa-sign-in-alt"></i>
            </button>
            <div class="subSection">
                <h4>Nie masz Konta?</h4>
                <a href="<?php echo route('rejestracja') ?>" class="btn btn-secondary second-login-button"> Nowe konto <i class="fas fa-user-circle"></i>
                </a>
            </div>



            <!-- <table border=0>
                    <tr>
                        <td>Imię</td>
                        <td colspan=2>
                            <input type=text name='imie' size= style='text-align: left'>
                        </td>
                    </tr>

                    <tr>
                        <td>Nazwisko</td>
                        <td colspan=2>
                            <input type=text name='nazwisko' size=15 style='text-align: left'>
                        </td>
                    </tr>
                    <tr>
                        <td>Płeć:</td>
                        <td>Kobieta</td>
                        <td><INPUT TYPE="radio" NAME="plec" value="t"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Mężczyzna</td>
                        <td><INPUT TYPE="radio" NAME="plec" value="f"> </td>
                    </tr>

                    <tr>
                        <td>Hasło</td>
                        <td colspan=2>
                            <input type=password name='haslo' size=15 style='text-align:left'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=3>
                            <input type=submit class="btn" value='Zaloguj się' style='width:200'>
                       
                        </td>
                    </tr>
                </table> -->
        </div>
    </form>
   
</section>