<?php
/**
 * Created by PhpStorm.
 * User: francisco
 * Date: 13/11/17
 * Time: 04:45 PM
 */
    define("DB_HOST",'localhost');
    define("DB_NAME",'anuarioDB');
    define("DB_USERNAME",'root');
    define("DB_PASSWORD",'');


    $con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

