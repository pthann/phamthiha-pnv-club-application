<?php
    if (isset($_POST['name'])) {
        echo "Thx for " . $_POST['name'] . "</br>";
    }
    
    if (isset($_POST['club'])) {
        echo "We received your application for " . $_POST['club'] . "</br>";
    }
    $skills = [];
    if (isset($_POST['coder'])) {
        array_push($skills, $_POST['coder']);
    }
    if (isset($_POST['arts'])) {
        array_push($skills, $_POST['arts']);
    }
    if (isset($_POST['star'])) {
        array_push($skills, $_POST['star']);
    }
    if (isset($_POST['dancer'])) {
        array_push($skills, $_POST['dancer']);
    }
    if (isset($_POST['singer'])) {
        array_push($skills, $_POST['singer']);
    }
    if (isset($_POST['design'])) {
        array_push($skills, $_POST['design']);
    }
    if (isset($_POST['eater'])) {
        array_push($skills, $_POST['eater']);
    }
    if (isset($_POST['speeches'])) {
        array_push($skills, $_POST['speeches']);
    }

    echo "You are a ";
    for ($i=0; $i < count($skills); $i++) { 
       echo $skills[$i];
       if ($i >= 0 && $i < count($skills) - 1) {
        echo " and ";
       }
    }

    if (isset($_POST['time'])) {
        echo '</br>You will be available on ' . $_POST['time'];
    }
    
?>