<?php

namespace App\Controllers;

use App\Controller\BaseController;
use App\Tools;

class Controller extends BaseController {
    /**
     * @Route(path="/install", methods=["GET"])
     */
    private function install() {
        Tools::installDatabase();
    }
}