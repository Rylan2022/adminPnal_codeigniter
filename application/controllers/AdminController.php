<?php
defined('BASEPATH') or exit("No direct script allowed");

class AdminController extends CI_Controller {
    public function index() {
      $this->load->view('admin/login');
    }

    public function dashbord() {
       $this->load->view('admin/index');
    }

    public function register() {
      $this->load->view('admin/page-register');
    }
    public function component() {
      $this->load->view('component/components-accordion');
    }
}