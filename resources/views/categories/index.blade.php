@extends('../layouts.app')
 
@section('title', 'Categories')
 
 
@section('content')
        <div class="container mt-5 ">
            <div class="p-5 rounded-t-lg bg-slate-300">
                <div class="w-100">
                    <div>
                        <h3 class="text-center my-4">Tutorial CRUD Laravel 10</h3>
                        <h5 class="text-center"><a href="https://yazkymaulana.my.id">www.yazkymaulana.my.id</a></h5>
                    </div>    
                    <div class="bg-slate-200 p-10 shadow-sm rounded ">
                        <div class="w-full ">
                            <a href="{{ route('categories.create')}}" class="bg-slate-400 p-2 rounded shadow-sm hover:text-slate-100 my-20">Tambah Data</a>
                            <table class="table-fixed w-full max-w-3xl mt-5 my-0 mx-auto border border-neutral-900">
                                <thead class="border-b border-neutral-500 font-medium dark:border-neutral-500 uppercase">
                                    <tr>
                                        <th scope="col" class="border-r px-6 py-4 border-neutral-400 dark:border-neutral-500">no</th>
                                        <th scope="col" class="border-r px-6 py-4 border-neutral-400 dark:border-neutral-500">category name</th>
                                        <th scope="col" class="border-r px-6 py-4 border-neutral-400 dark:border-neutral-500">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1;
                                        
                                    @endphp
                                    @forelse ($categories as $category)
                                        <tr class="border-b border-neutral-800 dark:border-neutral-500">
                                            <td class="text-center py-2">
                                               {{ $no++ }} 
                                            </td>
                                            <td class="text-center py-2">{{ $category->nama }}</td>
                                            <td class="text-center py-2">
                                                <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('categories.destroy',$category->id) }}" method="POST">
                                                    <a href="{{ route('categories.show', $category->id) }}" class="rounded-full bg-green-300 px-2">SHOW</a>
                                                    <a href="{{ route('categories.edit', $category->id) }}" class="rounded-full bg-blue-300 px-2">EDIT</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="rounded-full bg-red-400 px-2">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty

                                        <div class="p-6 my-5 mx-auto bg-red-200 rounded-xl shadow-sm flex items-center space-x-4 w-full">
                                            <p class="text-center text-slate-800">Data Category Belum Tersedia.</p>
                                        </div>
                                        
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>    
            </div>    
        </div>
@endsection