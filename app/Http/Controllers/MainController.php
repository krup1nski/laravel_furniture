<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public array $data;

    public function __construct()
    {
        $this->data['page_title'] = 'title';
        $this->data['page_description'] = 'description';
        $this->data['categories'] = Category::all();
    }
}
