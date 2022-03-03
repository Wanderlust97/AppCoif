
function BgAcceuil() {
    document.getElementById('BgChange').style.backgroundColor = "#000000";
}

function BgFavoris() {
    CreateContent("Accueil");
    createPara("paragraphe");
    createTitre("titre");
    document.getElementById('BgChange').style.backgroundImage = "url('AdobeStock_406664017.jpeg')";
    document.getElementById('rouge').style.color = '#000000';
    document.getElementById("menuPaniers").classList.add("animate__animated", "animate__zoomIn");
    document.getElementById("menuPaniers").remove();
    
}


function CreateContent(page) {

    switch (page) {
        case "Accueil":
            //document.getElementById("main").createElement("div");
            //document.getElementById("menuPaniers").remove();
            createDivWith_Id("menuPaniers");
            createDivWith_Id_destination("menuPaniers", "monTitreh1", "monTitreh1")
            createDivWith_Id_destination("menuPaniers", "sous_main", "sous_main");
            createDivWith_Id_destination("sous_main", "contenant_main", "contenant_main");
            createDivWith_Id_destination("contenant_main", "avatar", "avatar");
            createDivWith_Id_destination("contenant_main", "info_avatar", "info_avatar");
            createDivWith_Id_destination("info_avatar", "nom_avatar", "nom_avatar");
            createDivWith_Id_destination("menuPaniers", "central", "central");
            createDivWith_Id_destination("central", "main", "main");
            createDivWith_Id_destination("main", "block1", "block1");
            createDivWith_Id_destination("block1", "photo", "photo");
            createDivWith_Id_destination("block1", "contenant", "contenant");
            createDivWith_Id_destination("contenant", "titre_paniers", "titre_paniers");
            createDivWith_Id_destination("contenant", "contenant1", "contenant1");
            createDivWith_Id_destination("contenant", "description_paniers", "description_paniers");

            break;


        default:
            break;
    }


}


function createPara(texte) {
    switch (texte) {
        case "paragraphe":

            createP("nom_avatar", "infopersonne", "infopersonne", "_manu_pyt_sur_insta");
            createP("info_avatar", "annonces", "annonces", "4 Annonces");
            createP("info_avatar", "inscription", "inscription", "Membre depuis mars 2014");
            createP("contenant1", "prix_paniers", "prix_paniers", "890 €");
            createP("contenant1", "date_paniers", "date_paniers", "17/08/2021 à 17:07");
            createP("description_paniers", "titre_description", "titre_description", "Description");
            createP("description_paniers", "description", "description", "Bjr a vendre iphone 12 pro de 128giga neuf emallé garantie deux ans acheter 1240 je vend a 890 euro prix fiche texter su mon numéro 0692012345 et non en mail j envoie rien pas chrono poste ok merci");

            break;

        default:
            break;
    }
}

function createTitre(titreh1) {
    switch (titreh1) {
        case "titre":

            createH1("monTitreh1", "titrepaniers", "titrepaniers", "Paniers");


            break;

        default:
            break;
    }
}

function createDivWith_Id(_id, _class) {
    var div = document.createElement("div");
    var div2 = document.createElement("div");
    div.setAttribute('id', _id);
    div.setAttribute('class', _class);
    document.body.appendChild(div);
}

function createDivWith_Id_destination(_id_destination, _id, _class) {
    var div = document.getElementById(_id_destination);

    var div_destination = document.createElement("div")
    div_destination.setAttribute('id', _id);
    div_destination.setAttribute('class', _class);
    div.appendChild(div_destination);
}
function createP(_id_destination, _id, _class, _text) {
    var div = document.getElementById(_id_destination);

    var p = document.createElement("p");
    p.setAttribute('id', _id);
    p.setAttribute('class', _class);
    p.innerText = _text;
    div.appendChild(p);
}
function createImg(_id_destination, _id, _class, _img) {
    var div = document.getElementById(_id_destination);

    var img = document.createElement("img");
    img.setAttribute('id', _id);
    img.setAttribute('class', _class);
    img.innerText = _img;
    div.appendChild(img);
}
function createH1(_id_destination, _id, _class, _h1) {
    var div = document.getElementById(_id_destination);

    var h1 = document.createElement("h1");
    h1.setAttribute('id', _id);
    h1.setAttribute('class', _class);
    h1.innerText = _h1;
    div.appendChild(h1);
}
