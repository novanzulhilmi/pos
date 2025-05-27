<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::latest()->paginate(10);
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = new Customer();
        return view ('customers.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|unique:customers,email',
            'name' => 'required|string|max:100',
            'address' => 'required|string',
            'phone' => 'required|string|max:16',
        ]);

        $customers = Customer::firstOrCreate(
            [
                'email' => $request->email,
            ],
            [
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone,
            ]
        );

        if($customers->wasRecentlyCreated) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data berhasil ditambahkan',
                'data' => $customers
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data sudah tersedia - Gagal menambahkan',
                'data' => $customers,
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customers = Customer::findOrFail($id);
        return view("customers.edit", compact('customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'  => 'required|string|max:50',
            'description' => 'nullable|string'
        ]);

        try {
            $customers = Customer::findOrFail($id);
            $customers->update([
                'name' => $request->name,
                'description' => $request->description
            ]);
            return redirect(route('categories.index'))->with(['success' => 'Pelanggan: ' . $customers->name . ' Telah Diupdate']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
