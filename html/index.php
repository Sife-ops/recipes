<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\"/>
        <title> Recipes </title>
    </head>
    <body>

        <h1> Recipes </h1>

        <?php

        $letters = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",);

        foreach($letters as $letter) {

            $recipes = glob("recipes/".$letter."*");

            if (count($recipes) > 0) {
                echo '<h2>', $letter, '</h2>';
            }

            foreach($recipes as $recipe) {
                echo '<details><summary>';
                echo str_replace("_", " ", basename($recipe)), '<br>';
                echo '</summary>';

                echo '<ul>';
                $versions = glob($recipe."/*");
                foreach($versions as $version) {
                    echo '<li><a href=', $version, '>';
                    echo 'Recipe by ', basename($version);
                    echo '</a></li>';
                }
                echo '</ul>';
                echo '</details>';
            }
        }
        ?>

    </body>
</html>
