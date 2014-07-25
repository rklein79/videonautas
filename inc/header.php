<?php
 class header{

    private $includes;

     public function __construct($includes=''){
         $this->includes = $includes;

     }

     public function build(){
        return
        '
        <!DOCTYPE HTML>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <meta name="robots" content="noindex">			<link rel="icon" href="" type="image/x-icon" />			<link rel="shortcut icon" href="http://videonautas.com.br/homo/images/favicon.ico" type="image/x-icon" />			<title>Videonautas</title>
            <meta content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" name="viewport">
            <link rel="stylesheet" href="css/style.css" type="text/css">
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script src="js/jcarousel.js"></script>
            <script type="text/javascript" src="js/busca.js"></script>

            <script type="text/javascript" src="js/fadeSlideShow.js"></script>'.$this->includes.'
        </head>
        <body>
            <div id="showimg"></div>
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
                                        <a href="/homo"><div id="logo"></div></a>
                                    </div>
                                    <div id="search">
                                        <input type="text" id="search-field" placeholder="Buscar por marcas ou produto..." value="'.$_GET["sc"].'">
                                        <span id="search-button" onclick="gotoresult();" onkeydown=""><img src="images/lupa.png" width="29"/></span>
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
                                            <a href="http://instagram.com/videonautas" target="_blank" title="Instagram" class="Instagram"></a>
                                            <a href="http://facebook.com/videonautasbr" target="_blank" title="Facebook" class="Facebook"></a>
                                            <a href="http://twitter.com/videonautasbr" target="_blank" title="Twitter" class="Twitter"></a>
                                            <a href="http://youtube.com/user/videonautasbr" target="_blank" title="Youtube" class="Youtube"></a>
                                        </span>
                                    </div>
                                </div>
                        </div>

                        <div id="content">';

     }


 }

?>