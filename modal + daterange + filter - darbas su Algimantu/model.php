<?php

global $connect;

$connect = mysqli_connect("localhost", "root", "root", "samoningai");

function get_articles($from_date = null, $to_date = null)
{
    global $connect;
    
     if (!empty($from_date) && !empty($to_date)) {
        $from_date = mysqli_real_escape_string($connect, $from_date);
        $to_date = mysqli_real_escape_string($connect, $to_date);
     
        $query = "SELECT * FROM skelbimai WHERE data_ BETWEEN '$from_date' AND '$to_date' ORDER BY data_ desc";
    } else {
        $query = "SELECT * FROM skelbimai ORDER BY data_ desc";
    }

    $result = mysqli_query($connect, $query);
    
    $articles = [];
    
    while($row = mysqli_fetch_array($result)) {
        $articles[]= $row;
    }
    
    return $articles;
}

/// as parasiau funkcija, virustines nekeiciau

function get_tipas($tipas) {
    global $connect;
    $tipas = mysqli_real_escape_string($connect, $tipas);
    $query = "SELECT * FROM skelbimai WHERE tipas = '$tipas'";
    $result = mysqli_query($connect, $query);
    
    $tipai = [];
    
    while($row = mysqli_fetch_array($result)) { // kaip suprantu sis while bega per db ieskodamas 
                                                // pagal mano query salyga?
        $tipai[]= $row;
    }
    
    return $tipai;
}
    













