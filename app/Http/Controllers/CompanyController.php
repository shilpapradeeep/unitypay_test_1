<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        // TODO: Get companies along with its total users

        return view('companies.index', ['companies' => $companies]);
    }

    public function add()
    {
        return view('companies.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|regex:/[a-zA-Z]/|unique:companies',
        ], [
            'name.required' => 'The Company Name field is required.',
            'name.unique' => 'The Company Name has already been taken.',
        ]);

        Company::create($validatedData);

        return redirect()->route('companies.index')->with('success', 'Company created successfully!');
    }

    // TODO: Write functions like show, update, showCompanyUsers and addUserToCompany here
}
