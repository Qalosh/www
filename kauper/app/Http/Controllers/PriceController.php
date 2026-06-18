<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    // Список всіх цін
    public function index()
    {
        $prices = Price::all();
        return view('pages.prices', compact('prices'));
    }

    // Адмін - список
    public function adminIndex()
    {
        $prices = Price::all();
        return view('admin.prices.index', compact('prices'));
    }

    // Адмін - форма додавання
    public function create()
    {
        return view('admin.prices.create');
    }

    // Адмін - зберегти
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'name'     => 'required',
            'unit'     => 'required',
            'price'    => 'required|numeric',
        ]);

        Price::create($request->all());
        return redirect('/admin/prices')->with('success', 'Ціну додано!');
    }

    // Адмін - форма редагування
    public function edit(Price $price)
    {
        return view('admin.prices.edit', compact('price'));
    }

    // Адмін - оновити
    public function update(Request $request, Price $price)
    {
        $request->validate([
            'category' => 'required',
            'name'     => 'required',
            'unit'     => 'required',
            'price'    => 'required|numeric',
        ]);

        $price->update($request->all());
        return redirect('/admin/prices')->with('success', 'Ціну оновлено!');
    }

    // Адмін - видалити
    public function destroy(Price $price)
    {
        $price->delete();
        return redirect('/admin/prices')->with('success', 'Ціну видалено!');
    }
}