function addOnload(newFunction) {
    var oldOnload = window.onload;

    if (typeof oldOnload == "function") {
        window.onload = function() {
            if (oldOnload) {
                oldOnload();
            }
            newFunction();
        }
    }
    else {
        window.onload = newFunction;
    }
}

addOnload(initForm);

var lastHeight;

function initForm(){

}


function gotoresult(){
    var pesquisa = document.getElementById("search-field").value.trim();
    if(pesquisa == ""){
        alert('Informe o nome de um produto na pesquisa!')
        document.getElementById("search-field").focus();
        return false;
    }
    window.open("result.php?sc="+pesquisa,"_self");
}


function buscaResult(busca){
    busca_produto(busca);
    busca_ofertas(busca);
}