$("input").keydown(() => {
    var color = `#${crypto.getRandomValues(new Uint32Array(1))[0].toString(16).padStart(8, 0).slice(-6)}`
    document.getElementById('main_connection').style.backgroundColor = color;
})
document.getElementById('conn').onclick = formConnexion;
document.getElementById('suivant').onclick = formSuivant;
document.getElementById('precedent').onclick = formInscription;
document.getElementById('inscri').onclick = formInscription;
document.getElementById('close_i').onclick = formClose;
document.getElementById('close_c').onclick = formClose;
document.getElementById('close_s').onclick = formClose;


function formConnexion() {
    document.getElementById("main_connection").style.display = "block";
    document.getElementById("btn_connexion").style.display = "none";
    document.getElementById("btn_inscription").style.display = "none";
    document.getElementById("hobbies_inscription").style.display = "none"
    document.getElementById('main_connection').style.backgroundColor = "antiquewhite";

}

function formInscription() {
    document.getElementById("main_inscription").style.display = "block";
    document.getElementById("btn_connexion").style.display = "none";
    document.getElementById("btn_inscription").style.display = "none";
    document.getElementById("hobbies_inscription").style.display = "none"
    document.getElementById('main_inscription').style.backgroundColor = "antiquewhite";
}

function formClose() {
    document.getElementById("main_inscription").style.display = "none";
    document.getElementById("main_connection").style.display = "none";
    document.getElementById("hobbies_inscription").style.display = "none"
    document.getElementById("btn_connexion").style.display = "block";
    document.getElementById("btn_inscription").style.display = "block";
}

function formSuivant() {
    document.getElementById("main_inscription").style.display = "none";
    document.getElementById("main_connection").style.display = "none";
    document.getElementById("btn_connexion").style.display = "none";
    document.getElementById("btn_inscription").style.display = "none";
    document.getElementById("hobbies_inscription").style.display = "block";
    document.getElementById('hobbies_inscription').style.backgroundColor = "antiquewhite";
}