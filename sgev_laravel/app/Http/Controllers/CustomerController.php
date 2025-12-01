<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(15);
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $r)
    {
        $data = $r->validate([
            'name' => 'required|min:3',
            'email' => 'nullable|email',
            'phone' => 'nullable|min:8',
        ]);

        Customer::create($data);

        return redirect()
            ->route('customers.index')
            ->with('success', 'Cliente criado com sucesso!');
    }

    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $r, Customer $customer)
    {
        $data = $r->validate([
            'name' => 'required|min:3',
            'email' => 'nullable|email',
            'phone' => 'nullable|min:8',
        ]);

        $customer->update($data);

        return redirect()
            ->route('customers.index')
            ->with('success', 'Cliente atualizado com sucesso!');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()
            ->route('customers.index')
            ->with('success', 'Cliente removido com sucesso!');
    }
}
