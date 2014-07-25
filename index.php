<<<<<<< HEAD
<!DOCTYPE HTML>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="noindex">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
	<title>VN Esqueleto</title>
    <script type="text/javascript" src="js/fadeSlideShow.js"></script>
    <script language="javascript">
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
    </script>
</head>
<body>
    <div id="wrap">
            <div id="hide-menu">
                <div id="hide-top-menu">
                    <ul>
                        <a href=""><li>Quem Somos</li></a>
                        <a href=""><li>Apresentadores</li></a>
                        <a href=""><li>Suporte</li></a>
                        <a href=""><li>Contatos</li></a>
                    </ul>
                </div>
                <div id="hide-bottom-menu">
                    <ul>
                        <a href=""><li>Plug-In Play</li></a>
                        <a href=""><li>Especialista</li></a>
                        <a href=""><li>Categorias</li></a>
                    </ul>
                </div>
            </div>
            <div id="main-content">

                <div id="header">
                        <div id="top-menu">
                            <div id="content">
                                <span id="bt_hide-menu" onclick="sidebar();"></span>
                                <ul>
                                    <a href=""><li>Quem Somos<span class="white-stripe"></span></li></a>
                                    <a href=""><li>Apresentadores<span class="white-stripe"></span></li></a>
                                    <a href=""><li>Suporte<span class="white-stripe"></span></li></a>
                                    <a href=""><li>Contatos</li></a>
                                </ul>
                                <a href=""><span><img id="entrar-img" src="images/key.png" width="21px"/><div id="entrar-texto">Entrar</div></span></a>
                            </div>
                        </div>
                        <div id="content">
                            <div id="main-header">
                                <div id="logo"></div>
                            </div>
                            <div id="search">
                                <input type="text" id="search-field" placeholder="Buscar por marcas ou produto...">
                                <span id="search-button" onclick="" onkeydown=""><img src="images/lupa.png" width="29"/></span>
                            </div>
                        </div>
                        <div id="bottom-menu">
                            <div id="content">
                                <ul>
                                    <a href=""><li>Plug-In Play<span class="gray-stripe"></li></a>
                                    <a href=""><li>Especialista<span class="gray-stripe"></li></a>
                                    <a href=""><li>Categorias</li></a>
                                </ul>
                                <span id="social-header">
                                    <a href="" title="Instagram" class="Instagram"></a>
                                    <a href="" title="Facebook" class="Facebook"></a>
                                    <a href="" title="Twitter" class="Twitter"></a>
                                    <a href="" title="Youtube" class="Youtube"></a>
                                </span>
                            </div>
                        </div>
                </div>

                <div id="content">
                    <div id="destaque">
                        <div id="top-destaque">
                            <span id="titulo-destaque">Destaques</span>
                        </div>
                        <div id="destaque-content">
                            <span id="videonautas-fundo"></span>
                            <div id="bloco-player">
                                <iframe width="629" height="383" src="//www.youtube.com/embed/c0bE5xHkklE" frameborder="0" allowfullscreen></iframe>
                              <!-- ?autoplay=1 -->
                            </div>
                            <div id="dados-produto">
                                <div id="nome-produto">Sony Playstation 4 500 GB</div>
                                <div id="descr-produto">Playstation 4, Memória RAM GDDR5 8 GB, Disco Rígido Interno, 500 GB, Portas USB, Cor Preto</div>
                                <div id="avaliacao">
                                    <span id="ofertas-bt">10+ Ofertas</span>
                                    <div id="avaliacao-stars">
                                        <div id="comments">Ver comentários (21)</div>
                                        <div id="stars-bloco">
                                            <span class="halfstar"></span>
                                            <span class="fullstar"></span>
                                            <span class="fullstar"></span>
                                            <span class="fullstar"></span>
                                            <span class="fullstar"></span>
                                        </div>
                                    </div>
                                </div>
                                <div id="produto-media-precos">
                                    <div id="bloco-preco">
                                        <span class="pre-preco">De:</span>
                                        <span class="preco">R$ 2.210,00</span>
                                    </div>
                                    <div id="bloco-preco">
                                        <span class="pre-preco">Até:</span>
                                        <span class="preco">R$ 4.159,00</span>
                                    </div>
                                </div>
                                <div id="social">
                                    <img src="images/teste/social.png" width="300" />
                                </div>
                                <div id="fabricante">
                                    <span id="label">Produto:</span>
                                    <span id="marca">
                                        <span class="logo">
                                           <img src="images/teste/sony-logo.png" width="167"/>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="galerydiv">

                        <div id="videogallery" onmouseover="prepbt();" onmouseout="getNbt();">
                            <div id="leftarrow-block" ><div id="leftarrow" onclick="walkon();"><img src="images/left-galery-arrow.png"/></div></div>
                            <div id="vg-content">
                            <span id="tvideom">   </span>
                            <span id="tvideo">
                                <span id="thumb-vd">
                                    <img src="http://img.youtube.com/vi/c0bE5xHkklE/0.jpg" width="200">​
                                </span>
                                <span id="thumb-titulo">Sony Playstation 4 500 GB - duas linhas titulo</span>
                                <span id="thumb-compl">por: <span class="amarca">SONY</span> </span>
                            </span>
                            <span id="tvideo">
                                <span id="thumb-vd">
                                    <img src="http://img.youtube.com/vi/c0bE5xHkklE/0.jpg" width="200">​
                                </span>
                                <span id="thumb-titulo">Sony Playstation 4 500 GB - duas linhas titulo</span>
                                <span id="thumb-compl">por: <span class="amarca">SONY</span> </span>
                            </span>
                            <span id="tvideo">
                                <span id="thumb-vd">
                                    <img src="http://img.youtube.com/vi/c0bE5xHkklE/0.jpg" width="200">​
                                </span>
                                <span id="thumb-titulo">Sony Playstation 4 500 GB - duas linhas titulo</span>
                                <span id="thumb-compl">por: <span class="amarca">SONY</span> </span>
                            </span>
                            <span id="tvideo">
                                <span id="thumb-vd">
                                    <img src="http://img.youtube.com/vi/c0bE5xHkklE/0.jpg" width="200">​
                                </span>
                                <span id="thumb-titulo">Sony Playstation 4 500 GB - duas linhas titulo</span>
                                <span id="thumb-compl">por: <span class="amarca">SONY</span> </span>
                            </span>
                            <span id="tvideo">
                                <span id="thumb-vd">
                                    <img src="http://img.youtube.com/vi/c0bE5xHkklE/0.jpg" width="200">​
                                </span>
                                <span id="thumb-titulo">Sony Playstation 4 500 GB - duas linhas titulo</span>
                                <span id="thumb-compl">por: <span class="amarca">SONY</span> </span>
                            </span>
                            <span id="tvideo">
                                <span id="thumb-vd">
                                    <img src="http://img.youtube.com/vi/c0bE5xHkklE/0.jpg" width="200">​
                                </span>
                                <span id="thumb-titulo">Sony Playstation 4 500 GB - duas linhas titulo</span>
                                <span id="thumb-compl">por: <span class="amarca">SONY</span> </span>
                            </span>
                            <span id="tvideo">
                                <span id="thumb-vd">
                                    <img src="http://img.youtube.com/vi/c0bE5xHkklE/0.jpg" width="200">​
                                </span>
                                <span id="thumb-titulo">Sony Playstation 4 500 GB - duas linhas titulo</span>
                                <span id="thumb-compl">por: <span class="amarca">SONY</span> </span>
                            </span>
                            <span id="tvideo">
                                <span id="thumb-vd">
                                    <img src="http://img.youtube.com/vi/c0bE5xHkklE/0.jpg" width="200">​
                                </span>
                                <span id="thumb-titulo">Sony Playstation 4 500 GB - duas linhas titulo</span>
                                <span id="thumb-compl">por: <span class="amarca">SONY</span> </span>
                            </span>


                            </div>
                            <div id="rightarrow-block"><div id="rightarrow" onclick="walkback();"><img src="images/right-galery-arrow.png"/></div></div>
                        </div>

                    </div>
                    <div id="result_content">
                        <div id="busca_content">
                            <span id="videonautas-result"></span>
                            <div id="busca_result">
                                <div id="prod_pesq-top"><span id="title-side">Produto pesquisado</span></div>
                                <div id="busca-content"></div>
                            </div>
                        </div>
                        <div id="sidebar">
                            <span id="banner"><img src="images/teste/Promo.png" /> </span>
                            <sup id="publicidade">Publicidade </sup>
                            <div id="top-side">
                                <span id="title-side">Produtos Sugeridos</span>
                            </div>
                            <div id="produtos_sugeridos">
                            <div id="produtos_cell">
                                <span id="prod-box">
                                    <div id="info-box">
                                        <span id="img-box">
                                            <img src=""/>
                                        </span>
                                        <span id="aboutprod">Forno Elétrico cookie-top chef 220v - Preto</span>
                                        <span id="fabrprod">por: <b>ELECTROLUX</b></span>
                                    </div>
                                    <div id="preco-box">
                                        <span id="prodaval">Avaliação (21)</span>
                                        <div id="prodstars">
                                            <span class="halfstar"></span>
                                            <span class="fullstar"></span>
                                            <span class="fullstar"></span>
                                            <span class="fullstar"></span>
                                            <span class="fullstar"></span>
                                        </div>
                                        <span id="ofertas-bt">6 Ofertas</span>
                                        <div id="produto-media-precos">
                                            <div id="bloco-preco">
                                                <span class="pre-preco">De:</span>
                                                <span class="preco">R$ 2.189,00</span>
                                            </div>
                                            <div id="bloco-preco">
                                                <span class="pre-preco">Até:</span>
                                                <span class="preco">R$ 4.099,00</span>
                                            </div>
                                        </div>
                                        <div id="saibamais_bt">Saiba Mais</div>
                                    </div>
                                </span>

                                <span id="prod-box">
                                    <div id="info-box">
                                        <span id="img-box">
                                            <img src=""/>
                                        </span>
                                        <span id="aboutprod">Forno Elétrico cookie-top chef 220v - Preto</span>
                                        <span id="fabrprod">por: <b>ELECTROLUX</b></span>
                                    </div>
                                    <div id="preco-box">
                                        <span id="prodaval">Avaliação (21)</span>
                                        <div id="prodstars">
                                            <span class="halfstar"></span>
                                            <span class="fullstar"></span>
                                            <span class="fullstar"></span>
                                            <span class="fullstar"></span>
                                            <span class="fullstar"></span>
                                        </div>
                                        <span id="ofertas-bt">6 Ofertas</span>
                                        <div id="produto-media-precos">
                                            <div id="bloco-preco">
                                                <span class="pre-preco">De:</span>
                                                <span class="preco">R$ 2.189,00</span>
                                            </div>
                                            <div id="bloco-preco">
                                                <span class="pre-preco">Até:</span>
                                                <span class="preco">R$ 4.099,00</span>
                                            </div>
                                        </div>
                                        <div id="saibamais_bt">Saiba Mais</div>
                                    </div>
                                </span>

                                <span id="prod-box">
                                    <div id="info-box">
                                        <span id="img-box">
                                            <img src=""/>
                                        </span>
                                        <span id="aboutprod">Forno Elétrico cookie-top chef 220v - Preto</span>
                                        <span id="fabrprod">por: <b>ELECTROLUX</b></span>
                                    </div>
                                    <div id="preco-box">
                                        <span id="prodaval">Avaliação (21)</span>
                                        <div id="prodstars">
                                            <span class="halfstar"></span>
                                            <span class="fullstar"></span>
                                            <span class="fullstar"></span>
                                            <span class="fullstar"></span>
                                            <span class="fullstar"></span>
                                        </div>
                                        <span id="ofertas-bt">6 Ofertas</span>
                                        <div id="produto-media-precos">
                                            <div id="bloco-preco">
                                                <span class="pre-preco">De:</span>
                                                <span class="preco">R$ 2.189,00</span>
                                            </div>
                                            <div id="bloco-preco">
                                                <span class="pre-preco">Até:</span>
                                                <span class="preco">R$ 4.099,00</span>
                                            </div>
                                        </div>
                                        <div id="saibamais_bt">Saiba Mais</div>
                                    </div>
                                </span>

                                <span id="prod-box">
                                    <div id="info-box">
                                        <span id="img-box">
                                            <img src=""/>
                                        </span>
                                        <span id="aboutprod">Forno Elétrico cookie-top chef 220v - Preto</span>
                                        <span id="fabrprod">por: <b>ELECTROLUX</b></span>
                                    </div>
                                    <div id="preco-box">
                                        <span id="prodaval">Avaliação (21)</span>
                                        <div id="prodstars">
                                            <span class="halfstar"></span>
                                            <span class="fullstar"></span>
                                            <span class="fullstar"></span>
                                            <span class="fullstar"></span>
                                            <span class="fullstar"></span>
                                        </div>
                                        <span id="ofertas-bt">6 Ofertas</span>
                                        <div id="produto-media-precos">
                                            <div id="bloco-preco">
                                                <span class="pre-preco">De:</span>
                                                <span class="preco">R$ 2.189,00</span>
                                            </div>
                                            <div id="bloco-preco">
                                                <span class="pre-preco">Até:</span>
                                                <span class="preco">R$ 4.099,00</span>
                                            </div>
                                        </div>
                                        <div id="saibamais_bt">Saiba Mais</div>
                                    </div>
                                </span>

                            </div>
                            </div>
                        </div><!-- end of sidebar -->

                        <div id="destaques-bloco">
                            <div id="inscreva-se">
                                <div id="logo-noticias"></div>
                                <div id="inctop">
                                    <img src="images/vn-noticias.png" width="221" />
                                </div>
                                <div id="formbox">
                                    <span id="formdescription">Inscreva-se e receba, novidades e novas ofertas em videos.</span>
                                    <input type="text" class="inputtext" placeholder="seu nome">
                                    <input type="text" class="inputtext" placeholder="seu e-mail">
                                    <span id="radiob">
                                        <span id="checklabel">Gênero:</span>
                                        <input type="radio" name="genero" id="genero" value="masculino"><span id="checklabel">Masculino</span>
                                        <input type="radio" name="genero" id="genero" value="feminino"><span id="checklabel">Feminino</span>
                                    </span>
                                    <div id="btcell">
                                        <span id="cadastrar-bt">Cadastrar</span>
                                    </div>
                                </div>
                            </div><!-- end of inscreva-se -->
                            <div id="destaques-banners">
                                <div id="prod_pesq-top"><span id="title-side">Destaques</span></div>
                                <ul id="slideshow">
                                    <li><a href=""><img src="images/teste/ban1.png" border="0" alt="" /></a></li>
                                    <li><a href=""><img src="images/teste/ban2.png" border="0" alt="" /></a></li>
                                    <li><a href=""><img src="images/teste/ban1.png" border="0" alt="" /></a></li>
                                    <li><a href=""><img src="images/teste/ban2.png" border="0" alt="" /></a></li>
                                    <li><a href=""><img src="images/teste/ban1.png" border="0" alt="" /></a></li>
                                </ul>

                            </div>
                        </div><!-- end of destaque-bloco -->
                    </div><!-- end of result_content -->

                    <div id="outros-canais">
                        <div id="outros-banner">
                            <span id="banner-outros"><img src="images/teste/Promo2.png" /> </span>
                            <sup id="publicidade">Publicidade </sup>
                        </div>
                        <div id="canais">
                            <div id="canal_table">

                                <div id="canal_cell">
                                    <div id="canal">
                                        <div id="prod_pesq-top"><span id="title-side" class="purple_color">Plug-in Play</span></div>
                                        <div id="canal_main">
                                            <div id="img-video"></div>
                                            <div id="logo-bt">
                                                <img id="logo" src="images/logo-plug.png" width="71"/>
                                                <span id="bt-canal" class="purple_color">Ver</span>
                                            </div>
                                        </div>
                                        <div id="canal_description">
                                            <div id="canal_title">Nova TV SONY BRAVIA 60” 4K - Veja como ela chega na sua casa - Lançamento Mundial</div>
                                            <div id="canal_fabrprod">por: <b>Plug-in Play SONY</b></div>
                                        </div>
                                    </div><!-- end of canal -->

                                    <div id="canal">
                                        <div id="prod_pesq-top"><span id="title-side" class="blue_color">Especialistas</span></div>
                                        <div id="canal_main">
                                            <div id="img-video"></div>
                                            <div id="logo-bt">
                                                <img id="logo" src="images/logo-especialista.png" width="71"/>
                                                <span id="bt-canal" class="blue_color">Ver</span>
                                            </div>
                                        </div>
                                        <div id="canal_description">
                                            <div id="canal_title">PROCEL Recomenda novo AR Condicionado Consul 9.000btus</div>
                                            <div id="canal_fabrprod">por: <b>Especialistas Consul</b></div>
                                        </div>
                                    </div><!-- end of canal -->
                                </div>

                            </div><!-- end of canal_table -->


                        </div><!-- end of canais -->

                    </div><!-- end of outros-canais -->


                </div><!-- end of contents -->

            </div><!-- endo of main-content -->
            <div id="footer">
                <div id="content">
                    <div id="main-footer">
                        <div id="footer-links">
                            <div class="footer-title">Video Nautas</div>
                            <ul>
                                <a href=""><li>Quem Somos</li></a>
                                <a href=""><li>Porque fazer video-commerce?</li></a>
                                <a href=""><li>Política de Privacidade</li></a>
                                <a href=""><li>Termos de Uso</li></a>
                                <a href=""><li>Trabalhe conosco</li></a>
                                <a href=""><li>Fale Conosco</li></a>
                                <a href=""><li>FAQ Video Nautas</li></a>
                            </ul>
                        </div>
                        <div id="footer-rs">
                            <div class="footer-title">Rede Social</div>
                            <div id="rs"></div>
                            <div id="rs-buttons">
                                <a href="" title="Instagram" class="Instagramf"></a>
                                <a href="" title="Facebook" class="Facebookf"></a>
                                <a href="" title="Twitter" class="Twitterf"></a>
                                <a href="" title="Youtube" class="Youtubef"></a>
                            </div>
                        </div>
                        <div id="face-footer">
                            <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fvideonautasbr&amp;width=300&amp;height=250&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:250px;" allowTransparency="true"></iframe>
                        </div>
                    </div>
                </div>

            </div><!-- end of footer -->

    </div><!-- end of wrap -->

</body>

 
=======
<?php
    include('inc/header.php');
    $header = new header('<script type="text/javascript" src="js/index.js"></script>');
    echo $header->build();
?>
    <div id="destaque">
        <div id="top-destaque">
            <span id="titulo-destaque">Destaques</span>
        </div>
        <div id="destaque-content">
            <span id="videonautas-fundo"></span>
            <div id="bloco-player">
            </div>
            <div id="dados-produto">
            </div>
        </div>
    </div>
    <div id="galerydiv">

        <div id="videogallery" onmouseover="prepbt();" onmouseout="getNbt();">
            <div id="leftarrow-block" ><div id="leftarrow" onclick="walkon();"><img src="images/left-galery-arrow.png"/></div></div>
            <div id="vg-content">
            <span id="tvideom">   </span>
            <?php
                require('inc/videogallery/gallery.php');
                $galeria = new gallery();
                echo $galeria->build_gallery();
            ?>

            </div>
            <div id="rightarrow-block"><div id="rightarrow" onclick="walkback();"><img src="images/right-galery-arrow.png"/></div></div>
        </div>

    </div>
    <div id="result_content">
        <div id="busca_content">
            <span id="videonautas-result"></span>
            <div id="busca_result">
                <div id="prod_pesq-top"><span id="title-side">Produto pesquisado</span></div>
                <div id="busca-content">
                    <div id="prod-result">
                        <div id="prod-dados">
                       </div><!-- endo fo prod-dados -->
                       <div id="bp-result">
                       </div><!-- end of bp-result -->
                    </div> <!-- end of prod-result -->


                </div>
                </div><!-- end of busca-content -->
            </div>
        <div id="sidebar">
            <span id="banner"><img src="images/teste/Promo.png" /> </span>
            <sup id="publicidade">Publicidade </sup>
            <div id="top-side">
                <span id="title-side">Produtos Sugeridos</span>
            </div>
            <div id="produtos_sugeridos">
            <div id="produtos_cell">
                <span id="prod-box">
                    <div id="info-box">
                        <span id="img-box">
                            <img src=""/>
                        </span>
                        <span id="aboutprod">Forno Elétrico cookie-top chef 220v - Preto</span>
                        <span id="fabrprod">por: <b>ELECTROLUX</b></span>
                    </div>
                    <div id="preco-box">
                        <span id="prodaval">Avaliação (21)</span>
                        <div id="prodstars">
                            <span class="halfstar"></span>
                            <span class="fullstar"></span>
                            <span class="fullstar"></span>
                            <span class="fullstar"></span>
                            <span class="fullstar"></span>
                        </div>
                        <span id="ofertas-bt">6 Ofertas</span>
                        <div id="prod-media-precos">
                            <div id="bloco-mpreco">
                                <span class="prem-preco">De:</span>
                                <span class="mpreco">R$ 2.189,00</span>
                            </div>
                            <div id="bloco-mpreco">
                                <span class="prem-preco">Até:</span>
                                <span class="mpreco">R$ 4.099,00</span>
                            </div>
                        </div>
                        <div id="saibamais_bt">Saiba Mais</div>
                    </div>
                </span>

                <span id="prod-box">
                    <div id="info-box">
                        <span id="img-box">
                            <img src=""/>
                        </span>
                        <span id="aboutprod">Forno Elétrico cookie-top chef 220v - Preto</span>
                        <span id="fabrprod">por: <b>ELECTROLUX</b></span>
                    </div>
                    <div id="preco-box">
                        <span id="prodaval">Avaliação (21)</span>
                        <div id="prodstars">
                            <span class="halfstar"></span>
                            <span class="fullstar"></span>
                            <span class="fullstar"></span>
                            <span class="fullstar"></span>
                            <span class="fullstar"></span>
                        </div>
                        <span id="ofertas-bt">6 Ofertas</span>
                        <div id="prod-media-precos">
                            <div id="bloco-mpreco">
                                <span class="prem-preco">De:</span>
                                <span class="mpreco">R$ 2.189,00</span>
                            </div>
                            <div id="bloco-mpreco">
                                <span class="prem-preco">Até:</span>
                                <span class="mpreco">R$ 4.099,00</span>
                            </div>
                        </div>
                        <div id="saibamais_bt">Saiba Mais</div>
                    </div>
                </span>

                <span id="prod-box">
                    <div id="info-box">
                        <span id="img-box">
                            <img src=""/>
                        </span>
                        <span id="aboutprod">Forno Elétrico cookie-top chef 220v - Preto</span>
                        <span id="fabrprod">por: <b>ELECTROLUX</b></span>
                    </div>
                    <div id="preco-box">
                        <span id="prodaval">Avaliação (21)</span>
                        <div id="prodstars">
                            <span class="halfstar"></span>
                            <span class="fullstar"></span>
                            <span class="fullstar"></span>
                            <span class="fullstar"></span>
                            <span class="fullstar"></span>
                        </div>
                        <span id="ofertas-bt">6 Ofertas</span>
                        <div id="prod-media-precos">
                            <div id="bloco-mpreco">
                                <span class="prem-preco">De:</span>
                                <span class="mpreco">R$ 2.189,00</span>
                            </div>
                            <div id="bloco-mpreco">
                                <span class="prem-preco">Até:</span>
                                <span class="mpreco">R$ 4.099,00</span>
                            </div>
                        </div>
                        <div id="saibamais_bt">Saiba Mais</div>
                    </div>
                </span>

                <span id="prod-box">
                    <div id="info-box">
                        <span id="img-box">
                            <img src=""/>
                        </span>
                        <span id="aboutprod">Forno Elétrico cookie-top chef 220v - Preto</span>
                        <span id="fabrprod">por: <b>ELECTROLUX</b></span>
                    </div>
                    <div id="preco-box">
                        <span id="prodaval">Avaliação (21)</span>
                        <div id="prodstars">
                            <span class="halfstar"></span>
                            <span class="fullstar"></span>
                            <span class="fullstar"></span>
                            <span class="fullstar"></span>
                            <span class="fullstar"></span>
                        </div>
                        <span id="ofertas-bt">6 Ofertas</span>
                        <div id="prod-media-precos">
                            <div id="bloco-mpreco">
                                <span class="prem-preco">De:</span>
                                <span class="mpreco">R$ 2.189,00</span>
                            </div>
                            <div id="bloco-mpreco">
                                <span class="prem-preco">Até:</span>
                                <span class="mpreco">R$ 4.099,00</span>
                            </div>
                        </div>
                        <div id="saibamais_bt">Saiba Mais</div>
                    </div>
                </span>

            </div>
            </div>
        </div><!-- end of sidebar -->

        <div id="destaques-bloco">
            <div id="inscreva-se">
                <div id="logo-noticias"></div>
                <div id="inctop">
                    <img src="images/vn-noticias.png" width="221" />
                </div>
                <div id="formbox">
                    <span id="formdescription">Inscreva-se e receba, novidades e novas ofertas em videos.</span>
                    <input type="text" class="inputtext" placeholder="seu nome">
                    <input type="text" class="inputtext" placeholder="seu e-mail">
                    <span id="radiob">
                        <span id="checklabel">Gênero:</span>
                        <input type="radio" name="genero" id="genero" value="masculino"><span id="checklabel">Masculino</span>
                        <input type="radio" name="genero" id="genero" value="feminino"><span id="checklabel">Feminino</span>
                    </span>
                    <div id="btcell">
                        <span id="cadastrar-bt">Cadastrar</span>
                    </div>
                </div>
            </div><!-- end of inscreva-se -->
            <div id="destaques-banners">
                <div id="prod_pesq-top"><span id="title-side">Destaques</span></div>
                <ul id="slideshow">
                    <li><a href=""><img src="images/teste/ban1.png" border="0" alt="" /></a></li>
                    <li><a href=""><img src="images/teste/ban3.jpg" border="0" alt="" /></a></li>
                    <li><a href=""><img src="images/teste/ban4.jpg" border="0" alt="" /></a></li>
                    <li><a href=""><img src="images/teste/ban5.jpg" border="0" alt="" /></a></li>
                    <li><a href=""><img src="images/teste/ban6.jpg" border="0" alt="" /></a></li>
                </ul>

            </div>
        </div><!-- end of destaque-bloco -->
    </div><!-- end of result_content -->
    <div id="content">
    <div id="outros-canais">
        <div id="outros-banner">
            <span id="banner-outros"><img src="images/teste/Promo2.png" /> </span>
            <sup id="publicidade">Publicidade </sup>
        </div>
        <div id="canais">
            <div id="canal_table">

                <div id="canal_cell">
                    <div id="canal">
                        <div id="prod_pesq-top"><span id="title-side" class="purple_color">Plug-in Play</span></div>
                        <div id="canal_main">
                            <div id="img-video"></div>
                            <div id="logo-bt">
                                <img id="logo" src="images/logo-plug.png" width="71"/>
                                <span id="bt-canal" class="purple_color">Ver</span>
                            </div>
                        </div>
                        <div id="canal_description">
                            <div id="canal_title">Nova TV SONY BRAVIA 60” 4K - Veja como ela chega na sua casa - Lançamento Mundial</div>
                            <div id="canal_fabrprod">por: <b>Plug-in Play SONY</b></div>
                        </div>
                    </div><!-- end of canal -->

                    <div id="canal">
                        <div id="prod_pesq-top"><span id="title-side" class="blue_color">Especialistas</span></div>
                        <div id="canal_main">
                            <div id="img-video"></div>
                            <div id="logo-bt">
                                <img id="logo" src="images/logo-especialista.png" width="71"/>
                                <span id="bt-canal" class="blue_color">Ver</span>
                            </div>
                        </div>
                        <div id="canal_description">
                            <div id="canal_title">PROCEL Recomenda novo AR Condicionado Consul 9.000btus</div>
                            <div id="canal_fabrprod">por: <b>Especialistas Consul</b></div>
                        </div>
                    </div><!-- end of canal -->
                </div>

            </div><!-- end of canal_table -->


        </div><!-- end of canais -->

    </div><!-- end of outros-canais -->

    </div>

<?php
    include('inc/footer.php');
    $footer = new footer();
    echo $footer->build();
?>
>>>>>>> 5008a16763ab27f07b567f0da957f79bb7b6c331
