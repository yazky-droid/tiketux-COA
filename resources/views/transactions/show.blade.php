@extends('../layouts.app')
 
@section('title', 'Show Transaction')

@section('content')

<div class="container mt-5 ">
    <div class="p-5 rounded-t-lg bg-slate-300">
        <div class="w-100">
            <div>
                <h3 class="text-center my-4">Show Transaction Detail</h3>
                <h5 class="text-center"><a href="https://yazkymaulana.my.id">www.yazkymaulana.my.id</a></h5>
            </div>    
            <div class="bg-slate-200 p-10 shadow-sm rounded ">
                <a href="{{ route('transactions.index')}}" class="bg-slate-400 p-2 px-5 rounded shadow-sm hover:text-slate-100 my-20">Back</a>
                <div class="w-full flex flex-col items-center justify-center">
                    <div class="w-full max-w-xs mt-2">
                        <p><span>Nama COA: </span>{{ $transaction->coa_nama }}</p>
                        <div class="flex justify-between">
                            <div class="text-lg">
                                <span>Tanggal: </span>
                                <p>{{ $transaction->tanggal }}</p>
                            </div>
                            <div class="text-md">
                                <span>Kode: </span>
                                <p>{{ $transaction->coa_kode }}</p>
                            </div>

                        </div>
                        
                        <p><span>Description: </span>{{ $transaction->desc }}</p>
                        <div class="flex justify-between mt-5">
                            <div class="flex gap-4">
                                <span>Debit: </span><p class="bg-red-400 py-1.5 px-3 rounded-full">{{ $transaction->debit }}</p>
                            </div>
                            <div class="flex">    
                                <span>Credit: </span><p class="bg-green-300 py-1.5 px-3 rounded-full">{{ $transaction->credit }}</p>
                            </div>
                        </div>
                      </div>

                </div>
            </div>
        </div>    
    </div>    
</div>   

@endsection
