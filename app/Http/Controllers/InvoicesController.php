<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceStoreRequest;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function index()
    {
        $name = Invoice::with('customer')->get();
        return view('invoices.index', ['invoices' => $name]);
    }
    public function create()
    {
        return view('invoices.create');
    }
    public function edit($id)
    {
        $invoice = Invoice::find($id);
        return view('invoices.edit', ['invoice' => $invoice]);
    }
    public function store(InvoiceStoreRequest $request)
    {
        // return view('invoices.store');
        // dd($request);
        $invoice = new Invoice();

        $invoice->number = $request->number;
        $invoice->date = $request->data;
        $invoice->total = $request->total;
        $invoice->customer_id = $request->customer;
        $invoice->save();

        return redirect()->route('invoices.index')->with('message', 'Faktura dodana poprawnie');
    }

    public function update($id, Request $request)
    {

        $invoice = Invoice::find($id);

        $invoice->number = $request->number;
        $invoice->date = $request->data;
        $invoice->total = $request->total;

        $invoice->save();

        return redirect()->route('invoices.index')->with('message', 'Faktura zmieniona poprawnie');
    }
    public function delete($id, Request $request)
    {

        Invoice::destroy($id);


        return redirect()->route('invoices.index')->with('message', 'Faktura usunięta poprawnie');
    }
}
