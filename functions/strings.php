<?php

function fullName(String $first, String $last){
    return ucwords($first).' '.ucwords($last);
}

function makeList(Array $list){
    $fullList = '<ul>';
    foreach ($list as $index => $link){
        $fullList .= "<li><a href='$link'>".$index.'</a></li>';
    }
    return $fullList.'</ul>';
}