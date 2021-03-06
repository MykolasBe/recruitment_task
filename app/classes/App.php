<?php
namespace App;

use Core\Database\Database;
use Core\Router;
use Core\Session;

class App {
    public static $db;
    public static $session;

    public function __construct()
    {
        self::$db = new Database('localhost', 'root','6993','example_db','users');
        self::$session = new Session();
    }

    public function __destruct()
    {
        self::$db->mySQL->close();
    }

    public function run()
    {
        print Router::run();
    }
}
