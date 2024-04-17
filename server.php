<?php
    $string = file_get_contents("dischi.json");
    
    $disc_list = json_decode( $string, true );


    
    $results = $disc_list;

    if( isset( $_POST['discoindice']) && $_POST['discoindice'] !== '' ) {

        $disc_index =  $_POST['discoindice'];

        $singolodisco = $disc_list[$disc_index];

        $results = $singolodisco;

    } else {

        $results = $disc_list;
    };


    
    header( 'Content-type: application/json');
    echo json_encode( $results );


