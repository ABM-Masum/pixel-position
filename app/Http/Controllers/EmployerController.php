<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        $employers = Employer::latest()->paginate(10);
        return view('employer.index', compact('employers'));
    }
}
