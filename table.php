<?php  include('main.php'); ?>

<html>
    <head>
        <title>show_data</title>
    </head>
    <body>
        <div class="text-center">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>email</th>
                    <th>phone</th>
                </tr>
            </thead>
            <tbody>
                <?php $result=showdata(); ?>
                <?php print_r($result); ?>
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr>

            </tbody>
        </table>
        </div>
    </body>
</html>
