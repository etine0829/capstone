<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Event;
use App\Models\Criteria;
class CategoryController extends Controller
{
    // Display the form for adding a category
    public function storeWithCriteria(Request $request)
    {
        // Validate the category and criteria input
        $request->validate([
            'category_name' => 'required|string|max:255',
            'criteria_names' => 'required|array',
            'criteria_names.*' => 'required|string|max:255',  // Each criteria name is required and a string
            'criteria_score' => 'required|array',
            'criteria_score.*' => 'required|integer|min:0',  // Each score must be an integer and non-negative
        ]);

        // Create the category
        $category = Category::create([
            'category_name' => $request->category_name,
            'event_id' => 1, // Adjust this based on your form input or session
        ]);

        // Loop through criteria and save each one with its score
        foreach ($request->criteria_names as $index => $criteria_name) {
            Criteria::create([
                'category_id' => $category->id,
                'criteria_name' => $criteria_name,
                'criteria_score' => $request->criteria_score[$index],
            ]);
        }

        // Redirect with success message
        return redirect()->back()->with('success', 'Category and criteria added successfully!');

    
}
}