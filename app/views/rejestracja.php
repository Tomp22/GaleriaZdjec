<section>
    <form method=POST class="loginBox">
        <div class="loginBoxWrapper">

            <article>
                <label for="">Imie</label>
                <input type=text name='imie'>
            </article>
            <article>
                <label for="">Nazwisko</label>
                <input type=text name='nazwisko'>
            </article>
            <article>
                <label for="">Email</label>
                <input type=text name='email'>
            </article>
            <article>
                <label for="">Haslo</label>
                <input type=text name='haslo'>
            </article>
            <article>
                <label for="">Plec</label>
                <input type=radio name='plec' value="t">
                <input type=radio name='plec' value="f">
            </article>


            <button class=" btn btn-primary  login-button" type=submit>Zaloz konto <i class="fas fa-user-check"></i>
            </button>

     <div class="subSection">
                <h4>Powrot do strony logowania</h4>
                <a href="<?php echo route('login') ?>" class="btn btn-secondary second-login-button"> Login<i class="fas fa-chevron-circle-left"></i>

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