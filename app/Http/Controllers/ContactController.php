<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        //categories
        $categories = Category::all();

        //render view
        return view('contact', compact('categories'));
    }
}
