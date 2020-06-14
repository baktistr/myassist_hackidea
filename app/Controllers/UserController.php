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
    
    if ($this->user->validate($data)) {   
      $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT); 
      if ($this->user->insert($data) === FALSE) {
        return redirect()->to('/user-control-create')->with('msg', 'Fail to insert new data', 'warning');
      } else {
        return redirect()->to('/user-control')->with('msg', 'Success to insert new data', 'success');
      }
    } else {
      return redirect()->to('/user-control')->with('msg', 'Fail to insert new data', 'warning');
    }
  }

  // // update user ke db
  public function update($id)
  {
    $data = $this->request->getPost();

    if (!empty($data)) {
      if(isset($data['password'])) {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
      }
      if ($this->user->update($id, $data) === FALSE) {
        return redirect()->to('/user-control-edit-'.$id)->with('msg', 'Fail to update data', 'warning');
      } else {
        return redirect()->to('/user-control')->with('msg', 'Success to update data', 'success');
      }
    }
  }

  // //delete data user di db
  public function delete($id)
  {
    $this->user->where('user_id', $id)->delete();

    if ($this->user->db->affectedRows()) {
      return redirect()->to('/user-control')->with('msg','Success delete data', 'success');
    } else {
      return redirect()->to('/user-control')->with('msg','Data is not exist', 'warning');
    }
  }
}