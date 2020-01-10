<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Resource preview</title>

        <?php

            /*
                For single load you need to specify whole path since this function dont use 
                config value.

                NOTE: Media types video and audio are not supported by rl_load() function
                      Pass an empty array for second argument in function, since third is important
                      to know what type are helper loading.
            */

            // single load resources without attributes
            echo rl_load('assets/js/sb-admin.js', 'js');
            echo rl_load('assets/img/code.ico', 'favicon');
            echo rl_load('assets/css/css.css', 'css');

            // single load js, favicon and css in head tag with attributes
            echo rl_load('assets/js/sb-admin.js', ['test' => '123'], 'js');
            echo rl_load('code.ico', ['test' => '123'], 'favicon');
            echo rl_load('css.css', ['width' => '500px'], 'css');

        ?>

    </head>
</html>
