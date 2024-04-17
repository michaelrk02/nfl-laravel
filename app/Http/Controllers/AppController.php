<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function form(Request $request)
    {
        $company = $request->input('company', 'NineFoxLab');

        return view('app.form', compact('company'));
    }

    public function apply(Request $request)
    {
        $request->validate([
            'name' => 'required|regex:/^[a-zA-Z.\'\-\s]+$/',
            'gender' => 'required|in:Male,Female',
            'email' => 'required|email',
            'phone' => 'required|regex:/^[0-9\-+\(\)\s]+$/',
            'address' => 'required',
            'position' => 'required',
            'salary_expectation' => 'required|integer|min:0|multiple_of:50000',
            'experience' => 'required|integer|min:0',
            'curriculum_vitae' => 'required|url:http,https',
            'portfolio' => 'nullable|url:http,https'
        ]);

        $application = $request->all();

        return view('app.apply', compact('application'));
    }
}
