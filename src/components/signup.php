<div class="signin__container">
    <div class="side__img">
        <img src="../assets/signinImg.png" alt="" class="img">
    </div>
    <div class="side__login">
        <div class="side__content">
        <h1 style="font-family: 'Merriweather'; color: white; font-size: 1.9em; font-weight: 300; letter-spacing: 1px;">S'inscrire</h1>
        <form action="./process/signup.php" class='side__form' method='POST'>
            <div class="side__name" style="width: 100%; display:flex; flex-direction: row; gap: 5px;">
                <input type="text" name="surname" id="surname" placeholder="Prénom" class="side__input" style="width: 100%">
                <input type="text" name="name" id="name" placeholder="Nom" class="side__input" style="width: 100%">
        </div>  
            <input type="text" name="email" id="email" placeholder="Email" class="side__input">
            <div class="side__password" style="width: 100%; display:flex; flex-direction: row; gap: 5px;">
                <input type="password" name="password" id="password" placeholder="Mot de passe" class="side__input" style="width: 100%">
                <input type="password" name="confirmPassword" id="password" placeholder="Confirmer" class="side__input" style="width: 100%">
            </div>
            <div class="check">
                <input type="checkbox" name="check" id="check" class="side__check">
                <label for="check">Se souvenir de moi</label>
            </div>
            
            <input type="submit" value="S'inscrire" class="side__connect">
        </form>
            <a href="/signin" style="font-family: 'Poppins'; font-size: .9em; color: white; opacity: 0.6; text-decoration: none; font-weight: 100; margin-top: 20px; margin-left: 45px">Se connecter</a>
        </div>
    </div>
</div>