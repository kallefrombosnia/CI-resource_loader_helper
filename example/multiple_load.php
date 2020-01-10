<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Resource preview</title>

        <?php

            /*
                For multiple load you need to specify array for every item of load. Look at the example below.

                NOTE: Media types video and audio are not supporting multiple loading since its an mess in code, and doubt that
                someone wants that.
            */

            echo rl_js(['sb-admin.js', ['test' => '123']], ['test.js', ['atr' => '456']]);
            echo rl_favicon(['code.ico', ['test' => '123']],'code.ico', ['test' => '123'][]);
            echo rl_img(['code.jpg', ['test' => '123']], ['code.jpg', ['test' => '123']]);

        ?>

    </head>
</html>
