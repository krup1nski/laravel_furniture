<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use Illuminate\Http\Request;

class AccessoriesController extends MainController
{
    public function index(){
        $this->data['page_title'] = 'Accessories';
        $this->data['accessories'] = Accessory::all();
        return view('pages.accessories', $this->data);
    }
}
