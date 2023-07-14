<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class matakuliah extends MY_Controller {

	public function index()
	{
	    $title = 'Mata Kuliah';
        $this->mPageTitle = $title;
        $this->mViewData['title'] = $title;
		$this->render('mata_kuliah/index', 'with_breadcrumb');
	}

	public function mata_kuliah()
    {
		// $data = isset($_GET['mata_kuliah']) ? $_GET['mata_kuliah'] : null;

		// $state = isset($_GET['state']) ? $_GET['state'] : null;
        // $id = isset($_GET['id']) ? $_GET['id'] : null;

		$this->db->select('*');
		$query = $this->db->get('mata_kuliah');
		$this->mViewData['data'] = $query->result();

        $kode_makul = isset($_GET['kode']) ? $_GET['kode'] : null;

        if (!empty($kode_makul)) {
            $this->db->select('*');
            $this->db->where('kode', $kode_makul);
            $query = $this->db->get('mata_kuliah');

            echo json_encode([
                'status' => 'success',
                'code' => 200,
                'message' => 'Data Tersedia',
                'list' => $query->result()
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'code' => 404,
                'message' => 'Data tidak tersedia'
            ]);
        }

        return;}
}
