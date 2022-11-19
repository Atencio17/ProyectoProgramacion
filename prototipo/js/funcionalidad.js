$(function() {
    $(document).on('click', '.borrar', function(event) {
        event.preventDefault();
        $(this).closest('tr').remove();
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

    if (usuario== "gerente" && password=="123") {
        window.location.href = "gerentepaginaprincipal.html";
    } else if (usuario== "profesional" && password=="123") {
        window.location.href = "profesionalpaginaprincipal.html";
    } else if (usuario== "secretario" && password=="123") {
        window.location.href = "secretariapaginaprincipal.html";
    } else if (usuario == "cliente" && password == "123"){
        window.location.href = "oficinavirtual.html";
    } else if (usuario == "admin" && password =="123"){
        window.location.href = "administradorpaginaprincipal.php";
    }else {
        alert("Usuario o password errado");
    }
}