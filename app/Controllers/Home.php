<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function hello()
    {
        echo "Hello, CodeIgniter 4!";
    }

    public function insert()
    {
        $data = [
            'name' => $this->request->getVar('username'),
            'city' => $this->request->getVar('mycity')
        ];

        $model = new UserModel();
        $model->insert($data);

        return redirect()->to(base_url('show'));
    }

    public function show()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();

        return view('showData', $data);
    }

    public function delete($id = null)
    {
        $model = new UserModel();
        $model->where('id', $id)->delete();
        return redirect()->to(base_url('show'));
    }

    public function edit($id=null)
    {
        $model=new UserModel();
        $data['user']=$model->where('id',$id)->first();
        return view('edit',$data);
    }

    public function update()
    {
        $data=[
            'name'=>$this->request->getVar('username'),
            'city'=>$this->request->getVar('mycity')
        ];

        $id=$this->request->getVar('id');
        $model=new UserModel();
        $model->update($id,$data);

        return redirect()->to(base_url('show'));

    }
}
