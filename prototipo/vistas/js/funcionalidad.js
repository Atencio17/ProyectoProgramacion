(function() {
    (document).on('click', '.borrar', function(event) {
        event.preventDefault();
        (this).closest('tr').remove();
    });
});

function crearTagConTexto(tagHTML, texto) {
    var tagHTML = crearTag(tagHTML);
    var textoHTML = document.createTextNode(texto);
    tagHTML.appendChild(textoHTML);
    return tagHTML;
}


function crearTagImage(path) {
    var tagIMG = document.createElement("img");
    tagIMG.src = path;
    return tagIMG;    
}

function agregarElemento(elemento) {
    document.body.appendChild(elemento);
}

function crearTagA(texto, url) {
    var tagIMG = crearTagConTexto("a",texto);
    tagIMG.href = url;
    return tagIMG;
}

function crearTag(tag) {
    var tagHTML = document.createElement(tag);
    return tagHTML;
}

function agregarElementoContenedor(contenedor, elemento) {
    contenedor.appendChild(elemento);
}

function loguear() {

    var usuario = document.getElementById("usuario").value;
    var password = document.getElementById("password").value;
    
    if (usuario== "admin" && password=="123") {
        window.location.href = "administrator.html";
    } else if (usuario== "gerente" && password=="123") {
        window.location.href = "manager.html";
    } else if (usuario== "secretario" && password=="123") {
        window.location.href = "secretary.html";
    } else if (usuario == "cliente" && password == "123"){
        window.location.href = "customer.html";
    } else if (usuario == "vendedor" && password =="123"){
        window.location.href = "seller.html";
    }else {
        alert("Usuario o password errado");
    }
}