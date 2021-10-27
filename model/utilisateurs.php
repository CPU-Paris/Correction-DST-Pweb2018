<?php

function changeL_bd($numeroLivre, $idU) {
    
}

function profilU_bd($idU) {
    $utilisateurs = [   
        41 => ["nom"=> "utilisateur41", "idU"=> 41],
        42 => ["nom"=> "utilisateur42", "idU"=> 42],
        43 => ["nom"=> "utilisateur43", "idU"=> 43],
        44 => ["nom"=> "utilisateur44", "idU"=> 44],
        45 => ["nom"=> "utilisateur45", "idU"=> 45],
    ];
    return $utilisateurs[$idU];
}