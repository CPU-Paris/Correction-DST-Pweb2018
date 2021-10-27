<?php


function pretL_bd() {
    return [
        ["idL"=> 1, "statut" => 41, "nom" => "livre 1"],
        ["idL"=> 2, "statut" => 42, "nom" => "livre 2"],
        ["idL"=> 3, "statut" => 43, "nom" => "livre 3"],
        ["idL"=> 4, "statut" => 44, "nom" => "livre 4"],
    ];
}


function verifU_bd($nom, $num, &$idU) {
    $idU = $num;
    return true;
}