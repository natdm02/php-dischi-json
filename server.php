<?php
    $string = file_get_contents("dischi.json");
    
    $disc_list = json_decode( $string, true );


    
    $results = $disc_list;


    
    header( 'Content-type: application/json');
    echo json_encode( $results );


