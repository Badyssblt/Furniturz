<div class="account">
    <div class="account__topbar">
        <ul class="topbar">
            <li onclick="displayMenu('account')">Mon compte</li>
            <li onclick="displayMenu('order')">Commandes</li>
            <li onclick="displayMenu('favorite')">Favoris</li>
        </ul>
    </div>
    <div class="account__content">
            <div class="account__content__account" id="account">
                <h1 class="account__title">Mon compte</h1>
                <a href="/logout">Se déconnecter</a>
            </div>
            <div class="account__content__order" id="order" style="display: none">
                <h1>Mes commandes</h1>
            </div>
            <div class="account__content__favorite" id="favorite" style="display: none">
                <h1>Favoris</h1>
            </div>
    </div>
</div>