<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Templates extends MX_Controller
{

    function __construct() {
        parent::__construct();
    }
    function index(){
        $this->test();
    }
    function test(){
        $data = "";
        $this->public_bootstrap($data);
    }
    function public_bootstrap($data){
        $this->load->view('public_bootstrap',$data);
    }
    function public_jqm($data){
        $this->load->view('public_jqm',$data);
    }
    function admin($data){
        $this->load->view('admin',$data);
    }
}