<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class PerfectController extends MX_Controller
{

    function __construct() {
        parent::__construct();
    }

    function get($order_by) {
        $this->load->model('PerfectModel');
        $query = $this->PerfectModel->get($order_by);
        return $query;
    }

    function get_with_limit($limit, $offset, $order_by) {
        $this->load->model('PerfectModel');
        $query = $this->PerfectModel->get_with_limit($limit, $offset, $order_by);
        return $query;
    }

    function get_where($id) {
        $this->load->model('PerfectModel');
        $query = $this->PerfectModel->get_where($id);
        return $query;
    }

    function get_where_custom($col, $value) {
        $this->load->model('PerfectModel');
        $query = $this->PerfectModel->get_where_custom($col, $value);
        return $query;
    }

    function _insert($data) {
        $this->load->model('PerfectModel');
        $this->PerfectModel->_insert($data);
    }

    function _update($id, $data) {
        $this->load->model('PerfectModel');
        $this->PerfectModel->_update($id, $data);
    }

    function _delete($id) {
        $this->load->model('PerfectModel');
        $this->PerfectModel->_delete($id);
    }

    function count_where($column, $value) {
        $this->load->model('PerfectModel');
        $count = $this->PerfectModel->count_where($column, $value);
        return $count;
    }

    function get_max() {
        $this->load->model('PerfectModel');
        $max_id = $this->PerfectModel->get_max();
        return $max_id;
    }

    function _custom_query($mysql_query) {
        $this->load->model('PerfectModel');
        $query = $this->PerfectModel->_custom_query($mysql_query);
        return $query;
    }

}