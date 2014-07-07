<?php


class gallery {

    private $videos = array(
        0=>array(
            'video_id'=>'c0bE5xHkklE',
            'video_busca'=>'Playstation 4 500 GB',
            'video_nome'=>'Sony Playstation 4 500 GB - duas linhas titulo',
            'video_fabricante'=>'SONY'
        ),
        1=>array(
            'video_id'=>'PEUlCGcqV8s',
            'video_busca'=>'Xbox One',
            'video_nome'=>'Xbox One - duas linhas titulo',
            'video_fabricante'=>'Microsoft'
        ),
        2=>array(
            'video_id'=>'_e3mDZL3b24',
            'video_busca'=>'Nintendo Wii U',
            'video_nome'=>'Xbox One - duas linhas titulo',
            'video_fabricante'=>'Nintendo'
        ),
        3=>array(
            'video_id'=>'j-gUxFmjz84',
            'video_busca'=>'iPhone 5s',
            'video_nome'=>'iPhone 5s - duas linhas titulo',
            'video_fabricante'=>'iPhone'
        ),
        4=>array(
            'video_id'=>'9cJRd37IEPE',
            'video_busca'=>'Samsung Galaxy S5',
            'video_nome'=>'Galaxy S5 Samsung SM-G900M  - duas linhas titulo',
            'video_fabricante'=>'Samsung'
        ),
        5=>array(
            'video_id'=>'jlu0R6RtsU0',
            'video_busca'=>'Sony Xperia Z',
            'video_nome'=>'Sony Xperia Z  - duas linhas titulo',
            'video_fabricante'=>'Sony'
        ),
        6=>array(
            'video_id'=>'_UB5hpk0iqg',
            'video_busca'=>'GTA 5',
            'video_nome'=>'Grand Theft Auto V Xbox 360 - duas linhas titulo',
            'video_fabricante'=>'Rockstar'
        ),
        7=>array(
            'video_id'=>'7Ko8utxtcOk',
            'video_busca'=>'LG G Flex LG-D956 Smartphone',
            'video_nome'=>'LG G Flex LG-D956 Smartphone  - duas linhas titulo',
            'video_fabricante'=>'LG'
        )
    );

    public function getVideos($id = ""){
        if($id == ""){
            return $this->videos;
        }
        if (($id > (sizeof($this->videos) -1)) || ($id == -1)) $id = 0;
        return $this->videos[$id];
    }

    public function build_gallery(){
        $celulas = "";
        foreach($this->videos as $vid=>$item){
            $celula = file_get_contents("inc/videogallery/gallery_cell.html");
            $celula = str_replace("#id#",$vid,$celula);
            $celula = str_replace("#vidid#",$item['video_id'],$celula);
            $celula = str_replace("#titulo#",$item['video_nome'],$celula);
            $celula = str_replace("#marca#",$item['video_fabricante'],$celula);

            $celulas .= $celula;
        }

        return $celulas;

    }

}
