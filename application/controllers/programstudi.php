<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class programstudi extends MY_Controller
{
	
	public function index()
	{
		$crud = $this->generate_crud('program_studi', 'Data Program Studi');
		$this->mPageTitle = 'Data Program Studi';
		$this->render_crud('programstudi/index', 'with_breadcrumb');
	}

	public function prodi()
    {
        $crud = $this->generate_crud('program_studi', 'Data Program Studi');
        $crud->display_as('id', 'No');
        $crud->display_as('nama_prodi', 'Nama Program Studi');
		$crud->display_as('program_pendidikan', 'Program Pendidikan');
        $crud->display_as('akreditas', 'Akreditasi');
		$crud->display_as('sk_akreditas', 'SK Akreditasi');
        $crud->unset_export();

		$crud->unset_add();
		$crud->unset_edit();
		$crud->unset_read();
		$crud->unset_delete();

        $this->mPageTitle = 'Data Fakultas';
        $this->render_crud();
    }
}
