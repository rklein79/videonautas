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
    lastHeight = $(document).height();

    $(document).ready(function(){
        $('#slideshow').fadeSlideShow({
            PlayPauseElement: false,
            NextElement: false,
            PrevElement: false,
            autoplay: true,
            speed: 'slow',
            interval: 6000,
            width: 830,
            height: 460,
            descreveal: "always",
            extrabuttons: {pause: 6000, nextprevresume: true},
            togglerid: "slideshowtoggler",
        });
    });

    setTimeout(heightChange, 500);
    trazVideo(0);
    trazBusca(0);

////////////////////

}




var sideop = 0;
function sidebar(){
    if(sideop == 0){
        bringSidebar();
    }else{
        hideSidebar();
    }
    return false;

}

function bringSidebar(){
    $("#hide-menu").stop().animate({width:"100%"},200);
    $("#hide-top-menu").fadeIn(250);
    $("#hide-bottom-menu").fadeIn(250);
    sideop = 1;
}

function hideSidebar(){
    $("#hide-menu").stop().animate({width:"0px"},200);
    $("#hide-top-menu").fadeOut(150);
    $("#hide-bottom-menu").fadeOut(150);
    sideop = 0;
}


function heightChange()
{

    if ($(document).width() > 610)
    {
        if(sideop == 1) hideSidebar();
    }
    setTimeout(heightChange, 500);
}

var atualpos = 0;
var inipos = 0;
var boxtam = 240
var finalpos = -(boxtam * 4);

function walkon(){
    if(atualpos == inipos)
        atualpos = finalpos;
    else
        atualpos += boxtam;
    $('#vg-content').animate({left:atualpos+'px'});
}
function walkback(){
    if(atualpos == finalpos)
        atualpos = inipos;
    else
        atualpos -= boxtam;
    $('#vg-content').animate({left:atualpos+'px'});
}

function prepbt(){
    $('#leftarrow').stop().animate({width:'40px'});
    $('#rightarrow').stop().animate({width:'40px'});

}

function getNbt(){
    $('#leftarrow').stop().animate({width:'10px'});
    $('#rightarrow').stop().animate({width:'10px'});
}


function focusin(id){
    $('#vd'+id).show();

}

function focusout(id){
    $('#vd'+id).hide();
}


function showimg(){
    $('#showimg').fadeIn(500);
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
                busca_videoproduto(results);
                busca_produto(results);
                busca_ofertas(results);

            }else {
                alert('Ocorreu erro ao trazer a busca');
            }
        }
    });


}

function gotoresult(){
    var pesquisa = document.getElementById("search-field").value.trim();
    if(pesquisa == ""){
        alert('Informe o nome de um produto na pesquisa!');
        document.getElementById("search-field").focus();
        return false;
    }
    window.open("result.php?sc="+pesquisa,"_self");
}