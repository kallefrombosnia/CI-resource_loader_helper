<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Resource preview</title>

        <?php

            // load resources without attributes
            echo rl_js('sb-admin.js');
            echo rl_favicon('code.ico');
            echo rl_css('css.css');

            // load js, favicon and css in head tag with attributes
            echo rl_js('sb-admin.js', ['test' => '123']);
            echo rl_favicon('code.ico', ['test' => '123']);
            echo rl_css('css.css', ['width' => '500px']);

        ?>

    </head>
    <body>

        <?php 

            // load embed, object and image resorces without attributes
            echo rl_embed('index.html');
            echo rl_object('page.html');
            
            // load embed, object and image resorces without attributes
            echo rl_embed('index.html', ['align' => 'left']);
            echo rl_object('page.html', ['width' => '100%', 'height' => '100%']);
            
            /*
                Media type is specific, first for video tag you need to specify attributes even if you dont use them, 
                but attr like controls are needed. For source also you can specify atrributes, and last are filenames
                which are going to suplly source tag. Specific needed hmtl attributes are provided automaticly within
                file type.  
            */

            echo rl_video(['video' => ['test' => '123', 'autoplay', 'controls'], 'source' => ['test' => '123', 'autoplay'], 'filename' => ['load.ogg','load.mp4']]);
            echo rl_audio(['audio' => ['test' => '123', 'controls'], 'source' => ['test' => '123', 'autoplay'], 'filename' => ['load.ogg','balenciaga.mp3']]);
            
        ?> 

    </body>
</html>
