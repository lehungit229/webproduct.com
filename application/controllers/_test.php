<?php
Class _test extends MY_Controller
{
    /*
     * Index tat ca san pham
     */
	function index_search()
	{
	    $this->load->library("zend_search");
	    $this->zend_search->create_index();
	}
}