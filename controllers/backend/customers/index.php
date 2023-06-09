<?php

use Core\App;
use Core\Database;

if(checkAuthUser()) {
    $db = App::resolve(Database::class);

    $customers = $db->query('SELECT * FROM customers')->get();
    //dd(defaultCustomerProfile($customers[0]));
    view('backend/customers/index.view.php',['customers' => $customers]);
} else {
    (new Core\Router)->abort(403);
}

