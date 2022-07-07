$('#addBio').click(event => {

    data = {
        content: event.currentTarget.form[0].value,
    }
    $.ajax({
        type: "POST",
        url: "../Model/profilManagement.php",
        data: data,
        success: function (reponse) {
            if (reponse == "ok") {
                alert('Votre bio a été ajouté/modifié')
                window.location.reload(true)
            } else {
                alert("Une erreur est survenu")
            }
        }
    });
})
$('.modif').click(event => {
    $ins = prompt();
    data = {
        modif: event.target.value,
        new: $ins,
    }
    $.ajax({
        type: "POST",
        url: "../Model/profilManagement.php",
        data: data,
        success: function (reponse) {
            if (reponse == "modifSurname") {
                alert('Votre Prénom a été modifié');
                window.location.reload(true)
            } else if (reponse == "modifName") {
                alert('Votre nom a été modifié');
                window.location.reload(true);

            }
            else if (reponse == "modifMail") {
                alert('Votre mail a été modifié');
                window.location.reload(true);

            } 
            else if (reponse == "modifCity") {
                alert('Votre ville a été modifié');
                window.location.reload(true);

            }
            else {
                alert("Une erreur est survenu");
            }
        }
    });
})