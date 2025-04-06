<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends MainController
{
    public function index(Request $request){
        if(!empty($request->get('search'))){
            $this->data['products'] = Product::where('title', 'like', '%'.$request->get('search').'%')->get(); // или ->paginate(10) для постраничного вывода
        }
        $this->data['search'] = $request->get('search');
        $count = $this->data['products']->count();
        return view('pages/search', $this->data, ['count' => $count]);
    }
}
