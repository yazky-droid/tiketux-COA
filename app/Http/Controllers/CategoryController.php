<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index():View {
        $categories = Category::paginate(10);

        return view('categories.index', compact('categories'));
    }

    public function create(): View {
        return view('categories.create');
    }

    public function store(Request $request): RedirectResponse {
        // validate form
        $this->validate($request, [
            'nama' => 'required|min:5',
        ]);

        Category::create([
            'nama' => $request->nama,
        ]);


        return redirect()->route('categories.index')->with(['success' => 'Data Berhasil Dibuat!']);
    }

    public function show($id): View {
        // get category by id

        $category = Category::findOrFail($id);

        return view('categories.show', compact('category'));
    }

    public function edit($id): View {
        $category = Category::findOrFail($id);

        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id): RedirectResponse {
        // validate form
        $this->validate($request, [
            'nama'     => 'required|min:5',
        ]);

        // get data by id
        $category = Category::findOrFail($id);

        // update
        $category->update([
            'nama'  => $request->nama
        ]);


        // redirect to index
        return redirect()->route('categories.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse {
        // get the data by id
        $category = Category::findOrFail($id);

        $category->delete();

        // redirect to index
        return redirect()->route('categories.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
