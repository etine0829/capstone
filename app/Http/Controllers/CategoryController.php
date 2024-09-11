<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Ensure you import the Event model

class CategoryController extends Controller
{

    public function index(){
        $category = Category::all();
        return view('category', ['categories' => $category]);
        
    }
    public function addEvent(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'category_name' => 'required|string',
           ,
        ]);
          
    
        // Debugging

    
        // Attempt to create the event
        Category::create($validatedData);
    
        return redirect()->back()->with('success', 'Category created successfully, you can now add criteria!');
    }
}
