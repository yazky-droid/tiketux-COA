<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ChartOfAccount;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ChartOfAccountController extends Controller
{
    public function index():View {
        $coas = ChartOfAccount::paginate(10);
        
        return view('coa.index', compact('coas'));
    }
    
    public function create(): View {
        $category = Category::all();
        return view('coa.create', compact('category'));
    }

    public function store(Request $request): RedirectResponse {
        // validate form
        $this->validate($request, [
            'kode' => 'required|min:3',
            'nama' => 'required|min:5',
            'category_id' => 'required|min:1',
        ]);

        ChartOfAccount::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'category_id' => $request->category_id,
        ]);


        return redirect()->route('coa.index')->with(['success' => 'Data Berhasil Dibuat!']);
    }

    public function edit($id): View {
        $coa = ChartOfAccount::findOrFail($id);
        $category = Category::all();

        return view('coa.edit', compact('coa', 'category'));
    }

    public function update(Request $request, $id): RedirectResponse {
        // validate form
        $this->validate($request, [
            'kode' => 'required|min:3',
            'nama' => 'required|min:5',
            'category_id' => 'required|min:1',
        ]);

        // get data by id
        $coa = ChartOfAccount::findOrFail($id);
        
        // update
        $coa->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'category_id' => $request->category_id,
        ]);


        // redirect to index
        return redirect()->route('coa.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse {
        // get the data by id
        $coa = ChartOfAccount::findOrFail($id);

        $coa->delete();

        // redirect to index
        return redirect()->route('coa.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
