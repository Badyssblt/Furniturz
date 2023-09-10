
<div class="account__container">
    <div class="account__sidebar">
        <div class="order sidebar__item" onclick="displayMenu('Order')">
            <i class="fas fa-box-open"></i>
            <span>Commandes</span>
        </div>
        <div class="favorite sidebar__item" onclick="displayMenu('Favorite')">
            <i class="fas fa-heart"></i>
            <span>Favoris</span>
        </div>
        <div class="personal sidebar__item" onclick="displayMenu('Personal')">
            <i class="fas fa-user"></i>
            <span>Données personnelles</span>
        </div>
        <div class="password sidebar__item" onclick="displayMenu('Password')">
            <i class="fas fa-lock"></i>
            <span>Changer le mot de passe</span>
        </div>
        <div class="logout sidebar__item" onclick="displayMenu('Logout')">
            <i class="fas fa-sign-out"></i>
            <span>Se déconnecter</span>
        </div>
    </div>
    <div class="account__content">
        <div class="content__order">
            <span>Commandes</span>
            <div class="order__list">
                <div class="item">
                    <div class="item__img__container">
                        <img src="./assets/bureau.png" alt="">
                        <img src="./assets/bureau.png" alt="">
                    </div>              

                    <span style="align-self: end;">Numéro de commande : 2</span>
                    <div class="details">
                        <a href="#" class="order__details">Voir la commande</a>
                        <span style="align-self: flex-end">Total : 299.99€ TTC</span>
                    </div>
                </div>
                <div class="item">
                    <div class="item__img__container">
                        <img src="./assets/bureau.png" alt="">
                        <img src="./assets/bureau.png" alt="">
                    </div>              

                    <span style="align-self: end;">Numéro de commande : 2</span>
                    <div class="details">
                        <a href="#" class="order__details">Voir la commande</a>
                        <span style="align-self: flex-end">Total : 299.99€ TTC</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="content__favorite" style="display: none;">
            <span>Favoris</span>
            <div class="favorite__list">
                
            </div>
        </div>
        <div class="content__personal" style="display: none;">
            <span>Données personnelles</span>
        </div>
        <div class="content__password" style="display: none;">
            <span>Modifier mon mot de passe</span>
        </div>
        <div class="content__logout" style="display: none;">
            <span>Se déconnecter</span>
            <a href="/logout">Se déconnecter</a>
        </div>
    </div>
</div>