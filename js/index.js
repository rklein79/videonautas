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




function gotoresult(){
    var pesquisa = document.getElementById("search-field").value.trim();
    if(pesquisa == ""){
        alert('Informe o nome de um produto na pesquisa!');
        document.getElementById("search-field").focus();
        return false;
    }
    window.open("result.php?sc="+pesquisa,"_self");
}