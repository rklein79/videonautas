<?php
require('buscape_api.php');

class busca extends buscape_api{

    function __construct(){
        parent::__construct();

    }

	private $buscape_falha = '<b>Falha de retorno do Buscapé</b>';
	private $buscape_overload = '<b>o limite de requisições diária foi excedida</b>';
	
    function monta_dadosproduto($dados){
	
//		if(!is_array($dados)) return $this->buscape_falha.' <br/> <br/> Retorno: '.$dados;
		if( $dados->details->code == 401 ) return $this->buscape_overload;
//		if( $dados->attributes()[1] == 0) return $this->buscape_falha;
		
        $produto = file_get_contents("layouts/dados_produto.html");
        if($dados->product->thumbnail->formats[2])
            $produto = str_replace("#prodimg#",$dados->product->thumbnail->formats[2]->attributes(),$produto);
        $produto = str_replace("#nomeproduto#",$dados->product->productName,$produto);
        $especificacoes = $dados->product->productShortName.' , ';


        foreach($dados->product->specification as $spe){
            for($x=0; $x < (sizeof($spe) -1) ; $x++){
                $especificacoes .= $spe->item[$x]->attributes().': '.$spe->item[$x]->value.' ';
            }
        }
        $produto = str_replace("#especificacoes#",$especificacoes,$produto);
        $produto = str_replace("#priceMin#",$dados->product->priceMin,$produto);
        $produto = str_replace("#priceMax#",$dados->product->priceMax,$produto);
        $produto = str_replace("#link#",$dados->product->specification->links->link->attributes(),$produto);

        return $produto;
    }

    function monta_ofertas($dados){
//		if(!is_array($dados)) return $this->buscape_falha.' <br/> <br/> Retorno: '.$dados;
		if( $dados->details->code == 401 ) return $this->buscape_overload;
//		if( $dados->attributes()[1] == 0) return $this->buscape_falha;

        $ofertas = "";
            for($x=0; $x < (sizeof($dados->offer) -1) ; $x++){
                $oferta = file_get_contents("layouts/ofertas.html");
                if($dados->offer[$x]->seller->thumbnail)
                    $oferta = str_replace("#logoloja#",$dados->offer[$x]->seller->thumbnail->attributes(),$oferta);

                $rating = preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $dados->offer[$x]->seller->rating->eBitRating->rating ) );
                $oferta = str_replace("#ebit#",$rating,$oferta);
                $oferta = str_replace("#descrratting#",$dados->offer[$x]->seller->rating->eBitRating->ratingNew,$oferta);

                $oferta = str_replace("#price#",$dados->offer[$x]->price->value,$oferta);

                $juros = ($dados->offer[$x]->price->parcel->interest != 0)?' juros de: '.$dados->offer[$x]->price->parcel->interest : "";
                $parcela = trim($dados->offer[$x]->price->parcel->number) != "" ? 'ou <b>'.$dados->offer[$x]->price->parcel->number.'x R$ '.$dados->offer[$x]->price->parcel->value."</b>".$juros : "";

                $oferta = str_replace("#separcela#",$parcela,$oferta);

                $linkprod = "http://www.buscape.com.br/redirect_prod?id=".$dados->offer[$x]->attributes()[0]."&amp;prod_id=".$dados->offer[$x]->attributes()[1]."&amp;emp_id=".$dados->offer[$x]->seller->attributes();
                $oferta = str_replace("#link#",$linkprod,$oferta);

                $ofertas .= $oferta;
            }



        return $ofertas;
    }

    function monta_dadosvideoproduto($dados){
//		if(!is_array($dados)) return $this->buscape_falha.' <br/> <br/> Retorno: '.$dados;
		if( $dados->details->code == 401 ) return $this->buscape_overload;

		//		if( $dados->attributes()[1] == 0) return $this->buscape_falha;

        $produto = file_get_contents("layouts/dados_videoproduto.html");
        $produto = str_replace("#nomeproduto#",$dados->product->productName,$produto);
        $especificacoes = $dados->product->productShortName.' , ';


        foreach($dados->product->specification as $spe){
            for($x=0; $x < (sizeof($spe) -1) ; $x++){
                $especificacoes .= $spe->item[$x]->attributes().': '.$spe->item[$x]->value.' ';
            }
        }
        $produto = str_replace("#especificacoes#",$especificacoes,$produto);
        $produto = str_replace("#priceMin#",$dados->product->priceMin,$produto);
        $produto = str_replace("#priceMax#",$dados->product->priceMax,$produto);
        $produto = str_replace("#link#",$dados->product->specification->links->link->attributes(),$produto);

        return $produto;
    }



}

?>