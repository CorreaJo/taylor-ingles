<?php
    $albuns = $_POST["album"];

        if($albuns == "taylor swift"){
            header("Location: taylor.html", true, 301);
            exit();
        }
        if($albuns == "fearless"){
            header("Location: fearless.html", true, 301);
            exit();
        }
        if($albuns == "speak now"){
            header("Location: speaknow.html", true, 301);
            exit();
        }
        if($albuns == "red"){
            header("Location: red.html", true, 301);
            exit();
        }
        if($albuns == "1989"){
            header("Location: 1989.html", true, 301);
            exit();
        }
        if($albuns == "reputation"){
            header("Location: reputation.html", true, 301);
            exit();
        }
        if($albuns == "lover"){
            header("Location: lover.html", true, 301);
            exit();
        }
        if($albuns == "folklore"){
            header("Location: folklore.html", true, 301);
            exit();
        }
        if($albuns == "evermore"){
            header("Location: evermore.html", true, 301);
            exit();
        } else {
            header("Location: erro.html", true, 301);
            exit();
        }
?>
