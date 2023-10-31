<?php

namespace App\Http\Controllers;
use App\Models\Ecommerce;
use Illuminate\Http\Request;

class Econtroller extends Controller
{
    public function index()
{
$ecommerces = Ecommerce::all();
return view('ecommerce.index', compact('ecommerces'));
}
public function create()
{
return view('ecommerce.create');
}
public function store(Request $request)
{
$request->validate([
'kode_barang' => 'required|unique:ecommerces',
'nama_barang' => 'required',
'harga' => 'required',
]);
Ecommerce::create($request->all());
return redirect()->route('ecommerce.index')
->with('success', 'Barang berhasil ditambahkan');
}
public function edit($id)
{
$ecommerce = Ecommerce::find($id);
return view('ecommerce.edit', compact('ecommerce'));
}
public function update(Request $request, $id)
{
$request->validate([
'nama_barang' => 'required',
'harga' => 'required',
]);
$ecommerce = Ecommerce::find($id);
$ecommerce->update($request->all());
return redirect()->route('ecommerce.index')
->with('success', 'Barang berhasil diperbarui');
}
public function destroy($id)
{
$ecommerce = Ecommerce::find($id);
$ecommerce->delete();
return redirect()->route('ecommerce.index')
->with('success', 'Barang berhasil dihapus');
}
}
