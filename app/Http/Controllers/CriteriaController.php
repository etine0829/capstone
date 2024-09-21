<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Criteria;

class CriteriaController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'criteria_name' => 'required|string|max:255',
            'criteria_score' => 'required|integer',
            'category_id' => 'required|exists:category,id',  // Ensure category exists
        ]);

        // Create a new criteria entry
        Criteria::create([
            'criteria_name' => $request->criteria_name,
            'criteria_score' => $request->criteria_score,
            'category_id' => $request->category_id,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Criteria added successfully!');
    }
}
