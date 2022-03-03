@extends('layouts.main')

@section('main')

<div class="PageCentrale" id="BgChange">
    <main>
        <div class="home">
            <p>Se connecter</p>
        </div>
        <div class="contenuLocalisation">
            <form class="formulaire-connexion" method="post" type="sample_request" data-num="0">
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
                    <div class="input-with-badge">
                        <span class="icon">
                            <input type="password" name="apikey" placeholder="Mot de passe" value="">
                        </span>
                    </div>
                </div>
                <a class="LostMdp" href="#">Mot de passe oublié?</a>        
<br>                <br>
                <div class="bouton-envoyer">
                    <button type="submit" class="submit-button reset-button">CONNEXION</button>
                </div>
            </form>
            <br>
            <a class="subscription" href="inscription-compte">PAS ENCORE DE COMPTE? JE M'INSCRIS</a>

        </div>
    </main>
   
    <footer>
        <div>

        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</div>
@endsection