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
            <article class="rodzajSub">
                <label for="">Subskrycja</label>
                <input type=radio name='sub' class="one"
                <?php if (isset($sub) && $sub=="Basic") echo "checked";?>
                value="Basic"><span>Basic</span>
                <input type=radio name='sub' class="two"
                <?php if (isset($sub) && $sub=="VIP") echo "checked";?>
                value="Vip"><span>VIP</span>
            </article>

            <button class=" btn btn-primary  login-button" type=submit>Zaloz konto <i class="fas fa-user-check"></i>
            </button>

     <div class="subSection">
                <h4>Powrot do strony logowania</h4>
                <a href="<?php echo route('index') ?>" class="btn btn-secondary second-login-button"> Login<i class="fas fa-chevron-circle-left"></i>

</a>

            </div>
        
        </div>
    </form>

</section>