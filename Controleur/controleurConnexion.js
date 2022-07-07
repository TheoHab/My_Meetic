$('#form_connexion').submit(event => {
    if (event.target[0].value != "" && event.target[1].value != "") {
        data = {
            mail: event.target[0].value,
            mdp: event.target[1].value,
        }


        $.ajax({
            type: "POST",
            url: "../Model/modelConnexion.php",
            data: data,
            success: function(reponse) {
                if (reponse == "Bienvenu sur Fracti cordis") {
                    window.location.replace("../View/acceuil.php");
                } else {
                    alert(reponse);
                }
            }
        });
        event.preventDefault();
    }else{
        alert('Veuillez remplir tout les champs')
    }
})