<form action="../process/signup.php" method="POST">
<div class="form">
    <div class="input">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
    </div>
    <div class="input">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div class="form__password"> 
        <div style="display: flex; flex-direction: column">
            <label for="password">Mot de passe</label>
            <div class="form__password__first">
                <div class="input__password">
                    <input type="password" name="password" id="passwordSInput">
                </div>
                <div class="show">
                    <button class="show__button" id="passwordS" onclick="displayPassword('password')">Afficher</button>
                </div>
            </div>
        </div>
        
        <div style="display: flex; flex-direction: column">
            <label for="password">Confirmer mot de passe</label>
            <div class="form__password__first">
                <div class="input__password">
                    <input type="password" name="ConfirmPassword" id="passwordConfirmInput">
                </div>
                <div class="show">
                    <button class="show__button" id="passwordConfirm" onclick="displayPassword('confirmPassword')">Afficher</button>
                </div>
            </div>
        </div>
        
    </div>

    <input type="submit" value="Créer mon compte" style="font-family: 'Roboto'; width: 200px">
    
</div>
</form>