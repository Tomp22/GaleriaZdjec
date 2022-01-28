<section>
    <form method=POST class="loginBox">
    <style>
		.error
		{
			color:red;
			margin-top: 10px;
			margin-bottom: 10px;
		}
	</style>
        <div class="loginBoxWrapper">

            <article>
                <label for="">Imie</label>
                <input type=text name='imie'>
            </article>
            <?php 
            if(isset($_SESSION['e_imie']))
            {
                echo '<div class ="error">'.$_SESSION['e_imie'].'</div>';
                unset($_SESSION['e_imie']);
            } 
            ?>
            <article>
                <label for="">Nazwisko</label>
                <input type=text name='nazwisko'>
            </article>
            <?php 
            if(isset($_SESSION['e_nazwisko']))
            {
                echo '<div class ="error">'.$_SESSION['e_nazwisko'].'</div>';
                unset($_SESSION['e_nazwisko']);
            } 
            ?>
            <article>
                <label for="">Email</label>
                <input type=text name='email'>
            </article>
            <?php 
            if(isset($_SESSION['e_email']))
            {
                echo '<div class ="error">'.$_SESSION['e_email'].'</div>';
                unset($_SESSION['e_email']);
            } 
            ?>
            <article>
                <label for="">Haslo</label>
                <input type=password name='haslo1'>
            </article>
            <?php 
            if(isset($_SESSION['e_haslo']))
            {
                echo '<div class ="error">'.$_SESSION['e_haslo'].'</div>';
                unset($_SESSION['e_haslo']);
            } 
            ?>
            <article>
                <label for="">Powtorz haslo</label>
                <input type=password name='haslo2'>
            </article>
            <?php 
            if(isset($_SESSION['e_haslo']))
            {
                echo '<div class ="error">'.$_SESSION['e_haslo'].'</div>';
                unset($_SESSION['e_haslo']);
            } 
            ?>
            <article>
                <label for="">Subskrycja</label>
                <input type=radio name='sub'
                <?php if (isset($sub) && $sub=="Basic") echo "checked";?>
                value="Basic">Basic
                <input type=radio name='sub'
                <?php if (isset($sub) && $sub=="VIP") echo "checked";?>
                value="Vip">VIP
            </article>

            <button class=" btn btn-primary  login-button" type=submit>Zaloz konto <i class="fas fa-user-check"></i>
            </button>

     <div class="subSection">
                <h4>Powrot do strony logowania</h4>
                <a href="<?php echo route('index') ?>" class="btn btn-secondary second-login-button"> Login<i class="fas fa-chevron-circle-left"></i>

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