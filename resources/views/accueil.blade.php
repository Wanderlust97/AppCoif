@extends('layouts.main')

@section('main')
<main>
    <div class="home">
        <p>Réservez le salon <br> <span class="texte-gras">qui vous correspond!</span></p>
    </div>
    <div class="container">
        <div class="Localisation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="map"></ion-icon>
                        </span>
                        <p class="title">Autour de moi</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="Etablissement">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="storefront"></ion-icon>
                        </span>
                        <p class="title">Etablissement</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="contenu">
        <div class="contenuLocalisation">
            <form class="formulaireUn" method="post" type="sample_request" data-num="0">
                <div class="api-form-control">
                    <label for="apikey"></label>
                    <div class="input-with-badge">
                        <span class="icon">
                            <ion-icon class="iconForm" name="navigate"></ion-icon>
                            <select autocomplete="street-address" autocomplete="postal-code" name="pets" id="pet-select">
                                <option value="">--Please choose an option--</option>
                                <option value="dog">Dog</option>
                                <option value="cat">Cat</option>
                                <option value="hamster">Hamster</option>
                                <option value="parrot">Parrot</option>
                                <option value="spider">Spider</option>
                                <option value="goldfish">Goldfish</option>
                            </select>
                            <input type="tel" name="apikey" placeholder="Ville ou code postale" value="">
                            <button id="find-me"><ion-icon name="navigate"></ion-icon></button>
                        </span>
                    </div>
                </div>
                <hr>
                <div class="api-form-control">
                    <label for="apikey"></label>
                    <div class="input-with-badge">
                        <span class="icon">
                            <ion-icon class="iconForm" name="calendar-number"></ion-icon>
                            <input type="date" name="apikey" placeholder="Ajouter une date" value="">
                        </span>
                    </div>
                </div>
                <hr>
                <div class="api-form-control">
                    <label for="apikey"></label>
                    <div class="input-with-badge">
                        <span class="icon">
                            <ion-icon class="iconForm" name="search-circle"></ion-icon>
                            <input name="apikey" placeholder="Prestation" value="">
                        </span>
                    </div>
                </div>
                <hr>
                <div class="bouton-envoyer">
                    <button type="submit" class="submit-button reset-button">C'EST PARTI !</button>
                </div>
            </form>
        </div>
    </div>
    <br>
    <div class="container2">
        <h2>Prenez rendez-vous en salon de coiffure ou institut à</h2>
        <div class="slide-salon">
            <div class="slide1">
                <span>
                    <p>Saint-Denis</p>
                </span>
            </div>
            <div class="slide1">
                <span>
                    <p>Le Port</p>
                </span>
            </div>
            <div class="slide1">
                <span>
                    <p>Saint-André</p>
                </span>
            </div>
            <div class="slide1">
                <span>
                    <p>Saint-Paul</p>
                </span>
            </div>
            <div class="slide1">
                <span>
                    <p>Saint-Leu</p>
                </span>
            </div>
            <div class="slide1">
                <span>
                    <p>Saint-Pierre</p>
                </span>
            </div>
            <div class="slide1">
                <span>
                    <p>Saint-Pierre</p>
                </span>
            </div>
            <div class="slide1">
                <span>
                    <p>Saint-Pierre</p>
                </span>
            </div>
        </div>
    </div>

</main>
<div class="menu">
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="home" onclick="BgAcceuil()"></ion-icon>
                    </span>
                    <span class="title"></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="calendar"></ion-icon>
                    </span>
                    <span class="title"></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="person-circle" onclick="BgAcceuil()"></ion-icon>
                    </span>
                    <span class="title"></span>
                </a>
            </li>
        </ul>
    </div>
</div>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection