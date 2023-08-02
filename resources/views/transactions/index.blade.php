@extends('../layouts.app')
 
@section('title', 'Transactions')
 
 
@section('content')
        <div class="container mt-5">
            <div class="p-5 rounded-t-lg bg-slate-300">
                <div class="w-100">
                    <div>
                        <h3 class="text-center my-4">Transactions</h3>
                        <h5 class="text-center"><a href="https://yazkymaulana.my.id">www.yazkymaulana.my.id</a></h5>
                    </div>    
                    <div class="bg-slate-200 p-10 shadow-sm rounded">
                        <div class="w-full">
                            <a href="{{ route('transactions.create')}}" class="bg-slate-400 p-2 rounded shadow-sm hover:text-slate-100 my-20">Tambah Data</a>
                            <table class="table-fixed w-full max-w-4xl mt-5 my-0 mx-auto border border-neutral-900">
                                <thead class="border-b border-neutral-500 font-medium dark:border-neutral-500 uppercase">
                                    <tr>
                                        <th scope="col" class="border-r px-6 py-4 border-neutral-400 dark:border-neutral-500">no</th>
                                        <th scope="col" class="border-r px-6 py-4 border-neutral-400 dark:border-neutral-500">tanggal</th>
                                        <th scope="col" class="border-r px-6 py-4 border-neutral-400 dark:border-neutral-500">coa kode</th>
                                        <th scope="col" class="border-r px-6 py-4 border-neutral-400 dark:border-neutral-500">coa nama</th>
                                        <th scope="col" class="border-r px-6 py-4 border-neutral-400 dark:border-neutral-500">desc</th>
                                        <th scope="col" class="border-r px-6 py-4 border-neutral-400 dark:border-neutral-500">debit</th>
                                        <th scope="col" class="border-r px-6 py-4 border-neutral-400 dark:border-neutral-500">credit</th>
                                        <th scope="col" class="border-r px-6 py-4 border-neutral-400 dark:border-neutral-500">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1;
                                        
                                    @endphp
                                    @forelse ($transactions as $transaction)
                                        <tr class="border-b border-neutral-800 dark:border-neutral-500">
                                            <td class="text-center py-2">
                                               {{ $no++ }} 
                                            </td>
                                            <td class="text-center py-2">{{ $transaction->tanggal }}</td>
                                            <td class="text-center py-2">{{ $transaction->coa_kode }}</td>
                                            <td class="text-center py-2">{{ $transaction->coa_nama }}</td>
                                            <td class="text-center py-2 truncate hover:text-clip">{{ $transaction->desc }}</td>
                                            <td class="text-center py-2">{{ $transaction->debit }}</td>
                                            <td class="text-center py-2">{{ $transaction->credit }}</td>
                                            <td class="text-center py-2">
                                                <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('transactions.destroy',$transaction->id) }}" method="POST">
                                                    <a href="{{ route('transactions.show', $transaction->id) }}" class="rounded-full bg-green-300 px-2">SHOW</a>
                                                    <a href="{{ route('transactions.edit', $transaction->id) }}" class="rounded-full bg-blue-300 px-2">EDIT</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="rounded-full bg-red-400 px-2">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty

                                        <div class="p-6 my-5 mx-auto bg-red-200 rounded-xl shadow-sm flex items-center space-x-4 w-full">
                                            <p class="text-center text-slate-800">Data Transaction Belum Tersedia.</p>
                                        </div>
                                        
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $transactions->links() }}
                        </div>
                    </div>
                </div>    
            </div>    
        </div>
@endsection