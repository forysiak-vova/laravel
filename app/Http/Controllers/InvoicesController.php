<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function index()
    {
        $name = Invoice::all();
        return view('invoices.index', ['name' => $name]);
    }
    public function create()
    {
        return view('invoices.create');
    }
    public function store()
    {
        return view('invoices.store');
    }
}
