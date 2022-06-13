<?php
class DataFormatador{
    function DataFormatar($dataInformada){
        $data = explode("-",$dataInformada);
        $dataFormatada = $data[2]."/".$data[1]."/".$data[0];
        return $dataFormatada;
    }
}
?>