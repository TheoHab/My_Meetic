
$('#profil_pic').change(function () {
    freader = new FileReader;
    freader.readAsDataURL($('#profil_pic')[0].files[0]);
    freader.onload = function () {
        profil = freader.result;
    }
})

$('#form_inscription').submit(event => {
    hobbies = [];
    year = new Date()
    newDate = new Date(event.target[3].value)
    dateNow = year.getFullYear()
    dateBirth = newDate.getFullYear()
    date = dateNow - dateBirth

    if (date < 18) {
        age = false;
    } else {
        age = true;
    }
    for (i = 0; i < 7; i++) {
        if (event.target[i].value == "") {
            empty = false;
        } else {
            empty = true;

            for (i = 7; i < 19; i++) {
                if (event.target[i].checked == true) {
                    hobbies.push(event.target[i].value);
                }
            }


            var data = {
                img: !$('#profil_pic')[0].files[0] ? null : profil,
                firstname: event.target[0].value,
                surname: event.target[1].value,
                city: event.target[2].value,
                birthdate: event.target[3].value,
                mail: event.target[4].value,
                genre: event.target[5].value,
                password: event.target[7].value,
                age: age,
                hobbies: hobbies,
            }

            $.ajax({
                type: "POST",
                url: "../Model/model_Inscription.php",
                data: data,
                success: function (reponse) {
                    if (empty == true && age == true) {
                       window.location.href = "../index.php";
                    } else if (empty == false) {
                        alert('Veuillez remplir tous les champs.');
                    } else if (age == false) {
                        alert('Vous devez avoir 18ans pour acceder au site.');
                    }
                }
            });
            event.preventDefault();
        }
    }
});
