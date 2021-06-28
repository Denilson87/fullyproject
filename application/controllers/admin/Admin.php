<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/Admin_controller.php';

class Admin extends Admin_Controller {

    public function index() {
        redirect(admin_url('dashboard'));
    }
}
