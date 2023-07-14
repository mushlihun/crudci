<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class matakuliah extends MY_Controller {

	public function index()
	{
        $this->db->select('*');
        $this->db->from('mata_kuliah');
        $query = $this->db->get();
        $this->mViewData['data_mk'] = $query->result();
        
        // $data = isset($_GET['mata_kuliah']) ? $_GET['mata_kuliah'] : null;

		// $state = isset($_GET['state']) ? $_GET['state'] : null;
        // $id = isset($_GET['id']) ? $_GET['id'] : null;
        // $state_kd_mk = isset($_GET['state_kd_mk']) ? $_GET['state_kd_mk'] : null;
		// $this->db->select('*')->from('mata_kuliah');
        // $query = $this->db->get('mata_kuliah');
        // $this->mViewData['list_fakultas'] = $query->result();
		// $this->db->where('kode', $state_kd_mk);
        // $mk = $this->db->get();
		// $this->mViewData['data_mk'] = $mk->row();
        // echo "$mata_kuliah<br>";
        // $kode_makul = isset($_GET['kode']) ? $_GET['kode'] : null;

        // if (!empty($kode_makul)) {
        //     $this->db->select('*');
        //     $this->db->where('kode', $kode_makul);
        //     $query = $this->db->get('mata_kuliah');

        //     echo json_encode([
        //         'status' => 'success',
        //         'code' => 200,
        //         'message' => 'Data Tersedia',
        //         'list' => $query->result()
        //     ]);
        // } else {
        //     echo json_encode([
        //         'status' => 'error',
        //         'code' => 404,
        //         'message' => 'Data tidak tersedia'
        //     ]);
        // }

        // return;

	    $title = 'Mata Kuliah';
        $this->mPageTitle = $title;
        $this->mViewData['title'] = $title;
		$this->render('mata_kuliah/index', 'with_breadcrumb');
        
	}
}
