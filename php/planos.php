<?php 

class planoControle{
    function assinatura($plano){
        switch($plano){
            case 1:
                $tituloPlano = 'Plano controle 5Gb';
                $preco = '49,90';
            break;

            case 2:
                $tituloPlano = 'Plano controle 10Gb';
                $preco = '59,90';
            break;

            case 3:
                $tituloPlano = 'Plano controle 15Gb';
                $preco = '79,90';
            break;

        }

        $detalhesPlanos = (object)[
            'id' => $plano,
            'plano' => $tituloPlano,
            'preco' => $preco
        ];

        $detalhesPlanos = json_encode($detalhesPlanos);
        return $detalhesPlanos;
    }

    function contratar($plano){
       

        $urlPag = "";
        switch ($plano)
        {
            case 1:
                $urlPag = "http://pag.ae/7V-Q9wD9r";
                break;
            case 2:
                $urlPag = "http://pag.ae/7VZvv-A9u";
                break;
            case 3:
                $urlPag = "http://pag.ae/7VZvBgoCR";
                break;
            case 4:
                $urlPag = "http://pag.ae/7VZvBLHYR";
                break;
            case 5:
                $urlPag = "http://pag.ae/7VZvC8vxQ";
                break;
            case 6:
                $urlPag = "http://pag.ae/7VZvCuier";
                break;
     }
    }
}
?>