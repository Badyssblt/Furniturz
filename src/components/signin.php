<div class="signin__container">
    <div class="side__img">
        <img src="../assets/signinImg.png" alt="" class="img">
    </div>
    <div class="side__login">
        <div class="side__content">
        <h1 style="font-family: 'Merriweather'; color: white; font-size: 1.9em; font-weight: 300; letter-spacing: 1px;">Se connecter</h1>
        <form action="./process/signin.php" class='side__form' method='POST'>
            <input type="text" name="email" id="email" placeholder="Email" class="side__input">
            <input type="password" name="password" id="password" placeholder="Mot de passe" class="side__input">
            <div class="check">
                <input type="checkbox" name="check" id="check" class="side__check">
                <label for="check">Se souvenir de moi</label>
            </div>
            
            <input type="submit" value="Se connecter" class="side__connect">
        </form>
            <a href="/signup" style="font-family: 'Poppins'; font-size: .9em; color: white; opacity: 0.6; text-decoration: none; font-weight: 100; margin-top: 20px; margin-left: 20px">Créer mon compte</a>
        </div>
    </div>
</div>