@extends('layouts.main')

@section('main')
<main>
    <div class="home">
        <p>Bienvenue sur Salon online</p>
        <span>
            <p>l’application qui permet de découvrir et réserver dans les meilleurs salons de coiffure et
                instituts de beauté à coté de chez vous.</p>
        </span>
    </div>
    <div class="contenuLocalisation">
        <form class="formulaireUn" method="post" type="sample_request" data-num="0">
            <div class="api-form-control">
                <label for="apikey"></label>
                <div class="input-with-badge">
                    <span class="icon">
                        <input type="text" name="apikey" placeholder="Prénom*" value="">
                    </span>
                </div>
            </div>
            <div class="api-form-control">
                <label for="apikey"></label>
                <div class="input-with-badge">
                    <span class="icon">
                        <input type="text" name="apikey" placeholder="Nom*" value="">
                    </span>
                </div>
            </div>
            <div class="api-form-control">
                <label for="apikey"></label>
                <div class="input-with-badge">
                    <span class="icon">
                        <input type="number" name="apikey" placeholder="Numéro de téléphone" value="">
                    </span>
                </div>
            </div>
            <div class="api-form-control">
                <label for="apikey"></label>
                <div class="input-with-badge">
                    <span class="icon">
                        <input type="email" name="apikey" placeholder="E-mail*" value="">
                    </span>
                </div>
            </div>
            <div class="api-form-control">
                <label for="apikey"></label>
                <div class="input-with-badge mdp">
                    <span class="icon">
                        <input type="password" name="apikey" placeholder="Mot de passe" value="">
                    </span>
                </div>
            </div>
            <div class="bouton-envoyer">
                <button type="submit" class="submit-button reset-button">CRÉER UN COMPTE</button>
            </div>
            <p>En créant un compte j'accepte les conditions générales d'utilisation, la charte de
                confidentialité, ainsi que les CGU du prestataire de paiement Stripe</p>
        </form>
    </div>
</main>
@endsection