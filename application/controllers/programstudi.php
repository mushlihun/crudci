<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * About page
 */
class programstudi extends MY_Controller {

	public function index()
	{
	    $this->mPageTitle = 'Program Studi';
		$this->render('programstudi', 'with_breadcrumb');
	}
}
