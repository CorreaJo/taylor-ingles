<?php
    $albuns = $_POST["album"];

        if($albuns == "taylor swift"){
            header("Location: https://correajo.github.io/taylor-ingles/taylor.html", true, 301);
            exit();
        }
        if($albuns == "fearless"){
            header("Location: https://correajo.github.io/taylor-ingles/fearless.html", true, 301);
            exit();
        }
        if($albuns == "speak now"){
            header("Location: https://correajo.github.io/taylor-ingles/speaknow.html", true, 301);
            exit();
        }
        if($albuns == "red"){
            header("Location: https://correajo.github.io/taylor-ingles/red.html.html", true, 301);
            exit();
        }
        if($albuns == "1989"){
            header("Location: https://correajo.github.io/taylor-ingles/1989.html", true, 301);
            exit();
        }
        if($albuns == "reputation"){
            header("Location: https://correajo.github.io/taylor-ingles/reputation.html", true, 301);
            exit();
        }
        if($albuns == "lover"){
            header("Location: https://correajo.github.io/taylor-ingles/lover.html", true, 301);
            exit();
        }
        if($albuns == "folklore"){
            header("Location: https://correajo.github.io/taylor-ingles/folklore.html", true, 301);
            exit();
        }
        if($albuns == "evermore"){
            header("Location: https://correajo.github.io/taylor-ingles/evermore.html", true, 301);
            exit();
        } else {
            header("Location: https://correajo.github.io/taylor-ingles/erro.html", true, 301);
            exit();
        }
?>

