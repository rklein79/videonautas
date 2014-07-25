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

function busca_videoproduto(busca,id_vd){
    $('#dados-produto').html("<div style='float:left; display: table-cell; vertical-align: middle; text-align: center;  width: 300px; height: 205px'><img src='images/ajax-loader.gif' width='218'/></div>")
    var dados = {
        buscaval: busca,
        id_vd: id_vd
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

var oldfoco = -1;


function trazVideo(id){

    $('#bloco-player').html("<div style='float:left; display: table-cell; vertical-align: middle; text-align: center;  width: 629px; height: 383px'><img src='images/ajax-loader.gif' width='218'/></div>")
    var dados = {
        id: id
    }
    $.ajax({

        url:"inc/videogallery/video_controller.php",
        type:'POST',
        data: dados,
        success: function( results ) {
            if(results.trim() != ""){
                //foco video
                $('#foco'+id).css("background-color","#00ff33");
                if(oldfoco != -1)
                    $('#foco'+oldfoco).css("background-color","transparent");
                oldfoco = id;
                //////

                $('#bloco-player').html(results);
                trazBusca(id);

            }else {
                alert('Ocorreu erro ao trazer o vídeo');
            }
        }
    });





//    $('#bloco-player').html('<iframe width="629" height="383" src="video.php?video='+video.trim()+'&nextvideo='+nextvideo.trim()+'&busca='+busca.trim()+'" frameborder="0" allowfullscreen="" scrolling="no"></iframe>');


}


function trazBusca(id){
    var dados = {
        id: id
    }

    $.ajax({
        url:"inc/videogallery/vdbusca_controller.php",
        type:'POST',
        data: dados,
        success: function( results ) {
            if(results.trim() != ""){
                busca_videoproduto(results,id);
                busca_produto(results);
                busca_ofertas(results);

            }else {
                alert('Ocorreu erro ao trazer a busca');
            }
        }
    });


}