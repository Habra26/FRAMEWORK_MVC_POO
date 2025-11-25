<?php

if (isset($_GET['books'])):
    include_once '../app/routers/books/books.php';

    // ROUTE PAR DEFAUT
// PATERN: /
// CTRL: pagesController
// ACTION: homeAction

else:
    \App\Controllers\PagesController::homeAction();
endif;
