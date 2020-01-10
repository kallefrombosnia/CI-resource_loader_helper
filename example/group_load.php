<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Resource preview</title>

        <?php

            /*
                For group load you need to enable group_load in config, and add values to specific alias names.
                When you are in view just call your alias name. Example rl_alias('test)

                       $config['alias_names'] = [
                           'head' => [
                                'rl_favicon' => "code.ico, ['test' => '123', 'play', 'igra', 'omg' => 'wtf']",
                                'rl_css' => "css.css,['width' => '500px']",
                                'rl_js' => "sb-admin.js, ['test' => '123']",
                            ],
                           'media' => [
                                'rl_audio' => "['audio' => ['test' => '123', 'controls'], 'source' => ['test' => '123', 'autoplay'], 'filename' => ['load.ogg','balenciaga.mp3']]",
                                'rl_video' => "['video' => ['test' => '123', 'autoplay', 'controls'], 'source' => ['test' => '123', 'autoplay'], 'filename' => ['load.ogg','load.mp4']]"
                           ]
                        ];  
            */

            rl_alias('head');

        ?>
    </head>

    <body>

        <?php

            rl_alias('media');

        ?>

    </body>
</html>