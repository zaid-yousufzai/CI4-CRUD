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

    public function insert()  //it is an identifier
    {
$data=[
    'name' => $this->request->getVar('username'),     //here name and city should match with the column names
    'city'=>$this->request->getVar('mycity')

];

$model=new UserModel();
$model->insert($data);  //this is not an indentifier this is a predefined function for inserting data
echo "<h1>Data inserted succesfully</h1>";
    }
}
