<?php
/*
 * Author: Amos Le Coq
 * Date: 04.03.2022
 */

require 'controler/nav.php';

if (isset($_GET['action'])) {
    //$action = $_GET['action'];
    switch ( $_GET['action']) {

        case 'register' :
            register($_POST);
            break;

        case 'reservation':
            reservation();
            break;

        default :
            home();
    }
} else {
    home();
}