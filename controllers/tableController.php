<?php
include_once('./models/Table.php');
include_once('./models/User.php');
include_once('./assets/layouts/navbar.php');
class tableController
{
    public function index()
    {
        $data=Table::index();
        include_once('./views/table/index.php');
    }
}
?>