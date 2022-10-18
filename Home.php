<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\model_inventaris_gudang_pipa;

class Home extends BaseController {

	public function index() {

		echo view('login');

	}

	public function jojo() {

		return view('evan');

	}


	public function skyfu() {

		return view('home-page');
		
	}


	public function tabel() {

		return view('tabel');

	}

	public function bukubatas() {

		return view('buku');
		
	}


	/* ---------------------------------------------------- */
    /*             Tugas Inventaris Gudang Pipa             */
	/* ---------------------------------------------------- */

	# Table user

	public function user() {

		$model = new model_inventaris_gudang_pipa();
		$on = 'user.level = jabatan.id_jabatan';
		$data['user'] = $model -> visual_gudang_join('user', 'jabatan', $on);

		return view('user', $data);

	}


	#  Table karyawan

	public function karyawan() {

		$model = new model_inventaris_gudang_pipa();
		$on = 'karyawan.jabatan = jabatan.id_jabatan';
		$data['karyawan'] = $model -> visual_gudang_join('karyawan', 'jabatan', $on);

		return view('karyawan', $data);

	}


	public function add_karyawan() {

		$model = new model_inventaris_gudang_pipa();
		$data['add_karyawan'] = $model -> visual_gudang('jabatan');

		return view('karyawan_add', $data);

	}

	public function action_add_karyawan() {

		$username = $this -> request -> getPost('username');
		$password = $this -> request -> getPost('password');
		$email = $this -> request -> getPost('email');
		$level = $this -> request -> getPost('jabatan');
		$nama_karyawan = $this -> request -> getPost('name');
		$nik = $this -> request -> getPost('nik');
		$nomor_handphone = $this -> request -> getPost('nohp');
		$tanggal_lahir = $this -> request -> getPost('borndate');
		$tempat_lahir = $this -> request -> getPost('hometown');
		$user = $this -> request -> getPost('user');
		$jabatan = $this -> request -> getPost('jabatan');


		// Add data 1 into database

		$data_user = array(

			'username' => $username,
			'password' => $password,
			'email' => $email,
			'level' => 'karyawan'

		);

		$model = new model_inventaris_gudang_pipa();
		$model -> insert_data('user', $data_user);

		$where = array('username' => $username);
		$karyawan = $model -> getWhere2('user', $where);
		
		// Add data 2 into database

		$data_karyawan = array(

			'nama_karyawan' => $nama_karyawan,
			'nik' => $nik,
			'nomor_handphone' => $nomor_handphone,
			'tanggal_lahir' => $tanggal_lahir,
			'tempat_lahir' => $tempat_lahir,
			'user' => $user,
			'jabatan' => $jabatan

		);

		$model -> insert_data('karyawan', $data_karyawan);

		return redirect()->to('/Home/karyawan');

	} 


	public function edit_karyawan($id) {

		$model = new model_inventaris_gudang_pipa();
		$where = array('user' => $id);
		$where2 = array('id_user' => $id);
		$data['jabatan'] = $model -> visual_gudang('jabatan');
		$data['karyawan'] = $model -> getWhere('karyawan', $where);
		$data['user'] = $model -> getWhere('user', $where2);

		return view('karyawan_edit', $data);

	}

	public function action_edit_karyawan() {

		$id = $this -> request -> getPost('id');
		$username = $this -> request -> getPost('username');
		$password = $this -> request -> getPost('password');
		$email = $this -> request -> getPost('email');
		$level = $this -> request -> getPost('jabatan');
		$nama_karyawan = $this -> request -> getPost('name');
		$nik = $this -> request -> getPost('nik');
		$nomor_handphone = $this -> request -> getPost('nohp');
		$tanggal_lahir = $this -> request -> getPost('borndate');
		$tempat_lahir = $this -> request -> getPost('hometown');
		$user = $this -> request -> getPost('user');
		$jabatan = $this -> request -> getPost('jabatan');


		// Edit data 1 from database

		$where = array('id_user' => $id);
		$data_user = array(

			'username' => $username,
			'password' => $password,
			'email' => $email,
			'level' => 'karyawan'

		);

		$model = new model_inventaris_gudang_pipa();
		$model -> edit_data('user', $data_user, $where);


		// Edit data 2 into database

		$where2 = array('user' => $id);
		$data_karyawan = array(

			'nama_karyawan' => $nama_karyawan,
			'nik' => $nik,
			'nomor_handphone' => $nomor_handphone,
			'tanggal_lahir' => $tanggal_lahir,
			'tempat_lahir' => $tempat_lahir,
			'user' => $user,
			'jabatan' => $jabatan

		);

		$model = new model_inventaris_gudang_pipa();
		$model -> edit_data('karyawan', $data_karyawan, $where2);

		return redirect()->to('/Home/karyawan');

	}


	public function delete_karyawan($id) {

		$model = new model_inventaris_gudang_pipa();
		$where = array('user' => $id);
		$where2 = array('id_user' => $id);
		$model -> delete_data('karyawan', $where);
		$model -> delete_data('user', $where2);

		return redirect()->to('/Home/karyawan');

	}


	# Table barang

	public function barang() {

		$model = new model_inventaris_gudang_pipa();
		$data['barang'] = $model -> visual_gudang('barang');

		return view('barang', $data);

	}


	public function add_barang() {

		$model = new model_inventaris_gudang_pipa();
		$data['add_barang'] = $model -> visual_gudang('barang');

		return view('barang_add', $data);

	}

	public function action_add_barang() {

		$nama_barang = $this -> request -> getPost('name');
		$kode_barang = $this -> request -> getPost('code');

		$data = array(

			'nama_barang' => $nama_barang,
			'kode_barang' => $kode_barang,
			'stock' => '0'

		);

		$model = new model_inventaris_gudang_pipa();
		$model -> insert_data('barang', $data);

		return redirect()->to('/Home/barang');

	}


	public function edit_barang($id) {

		$model = new model_inventaris_gudang_pipa();
		$where = array('id_barang' => $id);
		$data['barang'] = $model -> getWhere('barang', $where);

		return view('barang_edit', $data);

	}

	public function action_edit_barang() {

		$id = $this -> request -> getPost('id');
		$nama_barang = $this -> request -> getPost('name');
		$kode_barang = $this -> request -> getPost('code');

		$where = array('id_barang' => $id);
		$data = array(

			'nama_barang' => $nama_barang,
			'kode_barang' => $kode_barang,
			'stock' => '0'

		);

		$model = new model_inventaris_gudang_pipa();
		$model -> edit_data('barang', $data, $where);

		return redirect()->to('/Home/barang');

	}


	public function delete_barang($id) {

		$model = new model_inventaris_gudang_pipa();
		$where = array('id_barang' => $id);
		$model -> delete_data('barang', $where);

		return redirect()->to('/Home/barang');

	}


	# Tabel barang masuk

	public function barang_masuk() {

		$model = new model_inventaris_gudang_pipa();
		$data['barang_masuk'] = $model -> visual_gudang('barang_masuk');

		return view('barang_masuk', $data);

	}


	public function add_barang_masuk() {

		$model = new model_inventaris_gudang_pipa();
		$data['add_barang_masuk'] = $model -> visual_gudang('barang_masuk');

		return view('barang_masuk_add', $data);

	}

	public function action_add_barang_masuk() {

		$id_barang = $this -> request -> getPost('itemid');
		$jumlah = $this -> request -> getPost('total');
		$tanggal = $this -> request -> getPost('date');
		$id_user = $this -> request -> getPost('userid');

		$data = array(

			'id_barang' => $id_barang,
			'jumlah' => $jumlah,
			'tanggal' => $tanggal,
			'id_user' => $id_user

		);

		
		$model = new model_inventaris_gudang_pipa();
		$model -> insert_data('barang_masuk', $data);

		return redirect()->to('/Home/barang_masuk');

	}


	public function delete_barang_masuk($id) {

		$model = new model_inventaris_gudang_pipa();
		$where = array('id_barang_masuk' => $id);
		$model -> delete_data('barang_masuk', $where);

		return redirect() -> to('/Home/barang_masuk');

	}


	# Table barang keluar

	public function barang_keluar() {

		$model = new model_inventaris_gudang_pipa();
		$data['barang_keluar'] = $model -> visual_gudang('barang_keluar');

		return view('barang_keluar', $data);

	}


	public function add_barang_keluar() {

		$model = new model_inventaris_gudang_pipa();
		$data['add_barang_keluar'] = $model -> visual_gudang('barang_keluar');

		return view('barang_keluar_add', $data);

	}

	public function action_add_barang_keluar() {

		$id_barang = $this -> request -> getPost('itemid');
		$jumlah = $this -> request -> getPost('total');
		$tanggal = $this -> request -> getPost('date');
		$id_user = $this -> request -> getPost('userid');

		$data = array(

			'id_barang' => $id_barang,
			'jumlah' => $jumlah,
			'tanggal' => $tanggal,
			'id_user' => $id_user

		);

		
		$model = new model_inventaris_gudang_pipa();
		$model -> insert_data('barang_keluar', $data);

		return redirect()->to('/Home/barang_keluar');

	}


	public function delete_barang_keluar() {

		$model = new model_inventaris_gudang_pipa();
		$where = array('id_barang_keluar' => $id);
		$model -> delete_data('barang_keluar', $where);

		return redirect() -> to('/Home/barang_keluar');
		
	}

}