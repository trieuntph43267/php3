<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct(){
        $products=[
            [
                'id' => '1',
                'name' => 'iphone 14'
            ],
            [
                'id' => '2',
                'name' => 'iphone 15'
            ]
            ];
            return view('list-product')->with([
                'product' => $products
            ]);
    }

    public function getProduct($id){
        echo $id;
    }
    public function updateProduct(Request $request){
        echo $request->id;
        echo $request->name;
    }
    public function listSinhvien(){
        $sinhviens =[
            [
                'hoTen' => 'Nguyễn Văn A',
                'ngaySinh' => '17/03/2004',
                'chuyenNganh' => 'Lập trình web',
                'tuoi' => '20'
            ],
            [
                'hoTen' => 'Nguyễn Văn B',
                'ngaySinh' => '17/03/2005',
                'chuyenNganh' => 'Lập trình ',
                'tuoi' => '14'
          
            ]
            ];
            return view('list-sinhvien')->with([
                'sinhvien' => $sinhviens
            ]);
    }
}
