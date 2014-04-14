<!DOCTYPE HTML>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" name="viewport">	<link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
	<title>VN Esqueleto</title>
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
                                <!--                            <span id="tvideom">   </span>  -->
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



                </div>

            </div>

    </div>

</body>

 