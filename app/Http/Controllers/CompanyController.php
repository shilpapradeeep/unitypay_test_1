<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;

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

    public function edit($id)
    {
        $company = Company::where('id',$id)->first();
        return view('companies.edit', ['company' =>$company]);
    }

    public function update(Request $request)
    {
        $id = $request->post('company_id');

        $request->validate([
            'name' => 'required|string|regex:/[a-zA-Z]/|max:255|unique:companies,name,'. $id,
        ], [
            'name.required' => 'The Company Name field is required.',
        ]);

        $data['name']=$request->post('name');
        $update=Company::where('id',$request->post('company_id'))->update($data);

        if ($update > 0) {
            // Update successful
            return redirect()->route('companies.index')->with('success', 'Company Name changed successfully!');
        } elseif ($update === 0) {
            // No changes were made, handle accordingly
            return back()->with('error', 'No changes were made to the company name.');
        } else {
            // An error occurred during the update
            return back()->with('error', 'Sorry something went wrong!');
        }
    }

    public function showUsers(Company $company)
    {
        $users = User::all();
        $company->load('users');

        if (request()->has('company_id')) {
            Company::with('users')->findOrFail(request()->input('company_id'));
        }

        return view('companies.add_users', ['users' => $users, 'company' =>$company]);
    }

    public function addUsers(Request $request, Company $company)
    {
        $request->validate([
            'users' => 'array',
        ]);

        $company = Company::findOrFail($company->id);

        // Attach selected users to the company
        $company->users()->sync($request->users);

        return redirect('/companies')->with('success', 'User list for company updated successfully.');
    }
}