<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\User;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index(): iterable
    {
        return Branch::all();
    }

    public function store(Request $request): Branch
    {
        $branch = Branch::create(["name" => $request->name, "commits" => $request->commits, "author" => User::findOrFail($request->author)]);
        return $branch;
    }

    public function show(Branch $branch)
    {
        return Branch::findOrFail($branch->_id);
    }
}
