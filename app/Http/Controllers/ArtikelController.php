<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function index() {
        $artikel = ArtikelModel::get_all();
        return view('artikel.tables', compact('artikel'));
    }

    public function create() {
        return view('artikel.form');
    }
    
    public function show($id) {
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.konten', compact('artikel'));
    }

    public function store(Request $request) {
        $request['slug'] = strtolower($request['judul']);
        $request['created_at'] = date("Y-m-d H:i:s");
        $request['updated_at'] = date("Y-m-d H:i:s");
        $new_artikel = ArtikelModel::save($request->all());
        return redirect('/artikel');
    }

    public function edit($id) {
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.edit', compact('artikel'));
    }

    public function update($id, Request $request) {
        $artikel = ArtikelModel::update($id, $request->all());
        return redirect('/artikel');
    }

    public function destroy($id) {
        $delete = ArtikelModel::delete($id);
        return redirect('/artikel');
    }

}
