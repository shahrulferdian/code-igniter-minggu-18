<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KAtegori_M;

class Kategori extends BaseController
{
    public function index()
    {
        return view('welcome_message');
        echo "<h1>belajar codeigniter<h1/>";
    }


    public function read()
    {
        $pager = \Config\Service::pager();
        $model = new Ktegori_M();

        $data = [
            'judul' = 'DATA KATEGORI',
            'kategori' =>$model->paginate(2,'group1s');
            'pager' => $model->pager
        ];

     return  view ("kategori/select");
        
    }
    
    
    public function create()
    {
     
        return view ("kategori/insert");
      
    }
    
    
    public function insert()
    {
     
       $model = new Kategori_M();
       if ( $model ->insert($_POST)===false) {
           $error = $model-.errors();
           session()->setFlashdata('info',  $error['kategori'] );
           return redirect()->to(base_url("/admin/kategori/create"));
       } else {
        return redirect()->to(base_url("/admin/kategori"));
      
       }
       
      

     
    }

    
    public function find($id=null)
    {
        $model = new Ktegori_M();
        $kategori = $model ->find($id);

        print_r($kategori); $data = [
            'judul' = 'UPDATE DATA DARI controller',
            'kategori' => $kategori
        ];

        return view("kategori/update"),$data;
    }
    
    
    public function update()
    {
        $model = new Ktegori_M();
        $model->save($_POST);
        return redirect()->to(base_url("/admin/kategori"));
    }
    
    
    public function delete($id=null)
    {

        $model = new Kategori_M();
        $model -> delete($id);
        return redirect()->to(base_url("/admin/kategori"));
    }
}
