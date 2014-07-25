<?php	
  //   extract($_GET);
     include('inc/header.php');
     $header = new header('<script type="text/javascript" src="js/result.js"></script>');
     echo $header->build($_GET['sc']);
?>

<div id="result_content">
    <div id="busca_content">
        <span id="videonautas-result"></span>
        <div id="busca_result">
            <?php
                if(trim($_GET["sc"]) != ""){
                echo'<script>buscaResult("'.$_GET["sc"].'");</script>';
                }
            ?>
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

 