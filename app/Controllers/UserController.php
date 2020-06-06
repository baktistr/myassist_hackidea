<?php
namespace App\Controllers;

use App\Models\User_model;

class UserController extends BaseController
{
  public function __construct() 
	{
		$this->user = new User_model();
	}

  public function create()
  {
    $data=[
      'title' => 'Create User',
      'isi' => 'pages/UserCreate',
      'subheader' => 'Create Data User'
    ];
    echo view('index', $data);
  }

  public function edit($id=NULL)
  {
    $record = $this->user->find($id);
    if(empty($record)) {
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    $data=[
      'title' => 'Edit User',
      'isi' => 'pages/asetUserEdit',
      'subheader' => 'Edit Data User',
      'user' => $record
    ];
    echo view('index', $data);
  }

  // simpan new data ke db
  public function store()
  {
    $data = $this->request->getPost();
    
    if (!empty($data)) {
      if ($this->user->insert($data) === FALSE) {
        return redirect()->to('/aset-user-create')->with('msg', 'Fail to insert new data');
      } else {
        return redirect()->to('/aset-user')->with('msg', 'Success to insert new data');
      }
    } else {
      return redirect()->to('/aset-user')->with('msg', 'No data submitted');
    }
  }

  // // update user ke db
  public function update($id)
  {
    $data = $this->request->getPost();

    if (!empty($data)) {
      if ($this->user->update($id, $data) === FALSE) {
        return redirect()->to('/aset-user-edit/'.$id)->with('msg', 'Fail to insert new data');
      } else {
        return redirect()->to('/aset-user')->with('msg', 'Success to insert new data');
      }
    }
  }

  // //delete data user di db
  public function delete($id)
  {
    $sql = $this->user->where('gedung_id', $id)->delete();

    if ($this->user->db->affectedRows()) {
      return redirect()->to('/aset-user')->with('msg','Data is not exist');
    } else {
      return redirect()->to('/aset-user')->with('msg','Success delete data');
    }
  }

  public function index()
  {
    echo view('pages/userControl.php');
  }
}