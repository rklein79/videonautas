<?php
class footer{

    private $includes;

    public function __construct($includes=''){
        $this->includes = $includes;

    }

    public function build(){
        return
            '
                    </div><!-- end of contents -->

                    </div><!-- endo of main-content -->

                    </div><!-- endo of wrap -->
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
                                        <a href="http://instagram.com/videonautas" target="_blank" title="Instagram" class="Instagramf"></a>
                                        <a href="http://facebook.com/videonautasbr" target="_blank" title="Facebook" class="Facebookf"></a>
                                        <a href="http://twitter.com/videonautasbr" target="_blank" title="Twitter" class="Twitterf"></a>
                                        <a href="http://youtube.com/user/videonautasbr" target="_blank" title="Youtube" class="Youtubef"></a>
                                    </div>
                                </div>
                                <div id="face-footer">
                                    <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fvideonautasbr&amp;width=300&amp;height=250&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:250px;" allowTransparency="true"></iframe>
                                </div>
                            </div>
                        </div>

                    </div><!-- end of footer -->

        '.$this->includes.'
        </body>';


    }


}

?>