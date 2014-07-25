function busca_produto(busca){
    $('#prod-dados').html("<div style='float:left; display: table-cell; vertical-align: middle; text-align: center;  width: 680px; height: 205px'><img src='images/ajax-loader.gif' width='218'/></div>")
    var dados = {
        buscaval: busca
    }
    $.ajax({

        url:"inc/busca/dadosproduto_controller.php",
        type:'POST',
        data: dados,
        success: function( results ) {
            if(results.trim() != ""){
                $('#prod-dados').html(results);

            }else {
                alert('Ocorreu na busca');
            }
        }
    });
}

function busca_videoproduto(busca){
    $('#dados-produto').html("<div style='float:left; display: table-cell; vertical-align: middle; text-align: center;  width: 300px; height: 205px'><img src='images/ajax-loader.gif' width='218'/></div>")
    var dados = {
        buscaval: busca
    }
    $.ajax({

        url:"inc/busca/dadosvideoproduto_controller.php",
        type:'POST',
        data: dados,
        success: function( results ) {
            if(results.trim() != ""){
                $('#dados-produto').html(results);

            }else {
                alert('Ocorreu na busca');
            }
        }
    });
}


function busca_ofertas(busca){
    $('#bp-result').html("<div style='float:left; display: table-cell; vertical-align: middle; text-align: center;  width: 680px; height: 205px'><img src='images/ajax-loader.gif' width='218'/></div>")
    var dados = {
        buscaval: busca
    }
    $.ajax({

        url:"inc/busca/ofertas_controller.php",
        type:'POST',
        data: dados,
        success: function( results ) {
            if(results.trim() != ""){
                $('#bp-result').html(results);

            }else {
                alert('Ocorreu na busca');
            }
        }
    });
}