window.addEventListener("load", () => {
    document.getElementById("formBrawler").onchange=validate;
})

function validate() {
    const name = document.getElementById("nome").value;
    const title = document.getElementById("titulo").value;
    const image = document.getElementById("urlimagem").value;
    const submit = document.getElementById("enviarBrawler");
    const alert = document.getElementById("unfilledAlert");
    if (name == "" || title == "" || image == "") {
        submit.disabled = true;
        alert.innerHTML = "*Preencha todos os campos!";
    }
    else {  
        submit.disabled = false;
        alert.innerHTML = "";
    }
}