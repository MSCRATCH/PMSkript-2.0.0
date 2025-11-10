<?php
//profile.php [Output of the respective profile.]
//Profile_controller

class Home_controller
{

function __construct($dbh) {
$this->dbh = $dbh;
}

public function index() {

require_once 'themes/default_template/header.php';

include 'templates/frontend_templates/home_template.php';

require_once 'themes/default_template/footer.php';



}
}
