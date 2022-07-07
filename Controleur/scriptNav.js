$('#logos').click(function (e) {
    if ($('#ul_block').is(":hidden")) {
        $('#ul_block').slideToggle();
        $('#ul_block').css({ display: "block" });
        $('#coeur_L').css({ transform: "translate(-180%)", transitionDuration: "1s" });
        $('#coeur_R').css({ transform: "translate(180%)", transitionDuration: "1s" })
    } else {
        $('#ul_block').slideToggle();
        $('#ul_block').css({ display: "block" });
        $('#coeur_L').css({ transform: "translate(0)", transitionDuration: "1s" });
        $('#coeur_R').css({ transform: "translate(0)", transitionDuration: "1s" });
    }
});

$('.profil_pic').click(event =>{
    window.location.href = "../View/profil.php";
})
$('#addBio').click(event =>{
})
