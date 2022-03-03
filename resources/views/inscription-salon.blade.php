@extends('layouts.main')

@section('main')
<main>
    <div class="home">
        <p>Inscrivez-votre salon!</p>
    </div>
    <div class="contenuLocalisation">
        <form class="formulaire-salon" method="post" type="sample_request" data-num="0">
            <div class="api-form-control">
                <label for="apikey"></label>
                <div class="input-with-badge">
                    <span class="icon">
                        <input name="apikey" placeholder="Prénom*" value="">
                    </span>
                </div>
            </div>
            <div class="api-form-control">
                <label for="apikey"></label>
                <div class="input-with-badge">
                    <span class="icon">
                        <input name="apikey" placeholder="Nom*" value="">
                    </span>
                </div>
            </div>
            <div class="api-form-control">
                <label for="apikey"></label>
                <div class="input-with-badge">
                    <span class="icon">
                        <input name="apikey" placeholder="Nom de salon*" value="">
                    </span>
                </div>
            </div>
            <div class="api-form-control">
                <label for="apikey"></label>
                <div class="input-with-badge">
                    <span class="icon">
                        <input name="apikey" placeholder="Adresse*" value="">
                    </span>
                </div>
            </div>
            <div class="api-form-control">
                <label for="apikey"></label>
                <div class="input-with-badge">
                    <span class="icon">
                        <input name="apikey" placeholder="Code postale*" value="">
                    </span>
                </div>
            </div>
            <div class="api-form-control">
                <label for="apikey"></label>
                <div class="input-with-badge">
                    <span class="icon">
                        <input name="apikey" placeholder="E-mail*" value="">
                    </span>
                </div>
            </div>
            <div class="api-form-control">
                <label for="apikey"></label>
                <div class="input-with-badge">
                    <span class="icon">
                        <input name="apikey" placeholder="Numéro de téléphone*" value="">
                    </span>
                </div>
            </div>
            <div class="api-form-control">
                <label for="apikey"></label>
                <div class="input-with-badge">
                    <span class="icon">
                        <input name="apikey" placeholder="Ville*" value="">
                    </span>
                </div>
            </div>
            <div class="bouton-envoyer">
                <button type="submit" class="submit-button reset-button">C'EST PARTI !</button>
            </div>
            <p>En soumettant ce formulaire, j’accepte que les informations saisies soient utilisées pour
                permettre de me recontacter et recevoir les informations commerciales de Salon-online par voie
                électronique.</p>
        </form>
        <div class="cadre">
            <p>Les avantages d'inscrire son salon sur notre site.</p>
            <span class="icon">
                <ion-icon name="happy"></ion-icon>
                <span class="title">Attirer de nouveaux clients au salon</span>
            </span>
            <span class="icon">
                <ion-icon name="trending-up"></ion-icon>
                <span class="title">Inciter les clients à revenir au salon</span>
            </span>
            <span class="icon">
                <ion-icon name="storefront"></ion-icon>
                <span class="title">Piloter simplement votre activité au salon</span>
            </span>
            <span class="icon">
                <ion-icon name="podium"></ion-icon>
                <span class="title">Développer vos revenus au salon</span>
            </span>

        </div>
    </div>
</main>
@endsection