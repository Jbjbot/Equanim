window.addEventListener("load", function(){
    window.cookieconsent.initialise({
        "palette": {
            "popup": {
                "background": "#007bff",
                "text": "#ffffff"
            },
            "button": {
                "background": "transparent",
                "text": "#ffffff",
                "border": "#ffffff"
            }
        },
        "content": {
            "message": "En poursuivant votre navigation, vous acceptez le dépôt de cookies tiers destinés à vous proposer des vidéos, des boutons de partage, des remontées de contenus de plateformes sociales.",
            "dismiss": "Fermer",
            "link": "En savoir plus",
            "href": "https://www.cnil.fr/fr/cookies-traceurs-que-dit-la-loi"
        }
    })
});
