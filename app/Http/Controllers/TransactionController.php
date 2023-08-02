<?php

namespace App\Http\Controllers;

use App\Models\ChartOfAccount;
use App\Models\Transaction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TransactionController extends Controller
{
    public function switchNama($coa_kode){
        switch($coa_kode) {
            case(401):
               return $coa_nama = 'Gaji Karyawan';
                break;
            case(402):
               return $coa_nama = 'Gaji Ketua MPR';
                break;
            case(403):
               return $coa_nama = 'Profit Trading';
                break;
            case(601):
               return $coa_nama = 'Biaya Sekolah';
                break;
            case(602):
               return $coa_nama = 'Bensin';
                break;
            case(603):
               return $coa_nama = 'Parkir';
                break;
            case(604):
               return $coa_nama = 'Makan Siang';
                break;
            case(605):
               return $coa_nama = 'Makanan Pokok Bulanan';
                break;
            default:
               return $coa_nama = 'Nama COA tidak tersedia.';
        }
    }

    public function index():View {
        $transactions = Transaction::paginate(10);
        
        return view('transactions.index', compact('transactions'));
    }
    
    public function create(): View {
        $coas = ChartOfAccount::all();

        return view('transactions.create', compact('coas'));
    }

    public function store(Request $request): RedirectResponse {
        // validate form
        $this->validate($request, [
            'tanggal' => 'required',
            'coa_kode' => 'required|min:3',
            'desc' => 'required|min:5',
            'debit' => 'required|min:1',
            'credit' => 'required|min:1',
        ]);

        // defining the coa_name by coa_code, to minimize the typo or misspelling by user
        $coa_nama = TransactionController::switchNama($request->coa_kode);

        Transaction::create([
            'tanggal' => $request->tanggal,
            'coa_kode' => $request->coa_kode,
            'coa_nama' => $coa_nama,
            'desc' => $request->desc,
            'debit' => $request->debit,
            'credit' => $request->credit,
        ]);


        return redirect()->route('transactions.index')->with(['success' => 'Data Berhasil Dibuat!']);
    }

    public function show($id): View {
        // get category by id

        $transaction = Transaction::findOrFail($id);

        return view('transactions.show', compact('transaction'));
    }

    public function edit($id): View {
        $transaction = Transaction::findOrFail($id);
        $coas = ChartOfAccount::all();

        return view('transactions.edit', compact('transaction','coas'));
    }

    public function update(Request $request, $id): RedirectResponse {
        // validate form
        $this->validate($request, [
            'tanggal' => 'required',
            'coa_kode' => 'required|min:3',
            'desc' => 'required|min:5',
            'debit' => 'required|min:1',
            'credit' => 'required|min:1',
        ]);

        // defining the coa_name by coa_code, to minimize the typo or misspelling by user
        $coa_nama = TransactionController::switchNama($request->coa_kode);


        // get data by id
        $transaction = Transaction::findOrFail($id);

        // update
        $transaction->update([
            'tanggal' => $request->tanggal,
            'coa_kode' => $request->coa_kode,
            'coa_nama' => $coa_nama,
            'desc' => $request->desc,
            'debit' => $request->debit,
            'credit' => $request->credit,
        ]);


        // redirect to index
        return redirect()->route('transactions.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse {
        // get the data by id
        $transaction = Transaction::findOrFail($id);

        $transaction->delete();

        // Back to index
        return redirect()->route('transactions.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
