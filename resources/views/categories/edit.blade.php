@extends('../layouts.app')
 
@section('title', 'Create Categories')

@section('content')

<div class="container mt-5 ">
    <div class="p-5 rounded-t-lg bg-slate-300">
        <div class="w-100">
            <div>
                <h3 class="text-center my-4">Edit Category</h3>
                <h5 class="text-center"><a href="https://yazkymaulana.my.id">www.yazkymaulana.my.id</a></h5>
            </div>    
            <div class="bg-slate-200 p-10 shadow-sm rounded ">
                <a href="{{ route('categories.index')}}" class="bg-slate-400 p-2 px-5 rounded shadow-sm hover:text-slate-100 my-20">Back</a>
                <div class="w-full flex flex-col items-center justify-center">
                    <div class="w-full max-w-xs mt-2">
                        <form action="{{ route('categories.update', $category->id) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" >
                            @csrf
                            @method('PUT')

                          <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                              Category Name
                            </label>
                            <input name="nama" value="{{ old('nama', $category->nama) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " type="text" placeholder="Add the category">

                            {{-- error message for content --}}
                                @error('nama')
                                    <div class="max-w-sm w-full text-red-500 my-2">
                                        {{ $message }}    
                                    </div>                                    
                                @enderror
                          </div>
                          <div class="flex items-center justify-between">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Update
                            </button>
                            <button type="reset" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" >
                                Reset
                            </button>
                          </div>
                        </form>
                        <p class="text-center text-gray-500 text-xs">
                          &copy;COA 2023
                        </p>
                      </div>

                </div>
            </div>
        </div>    
    </div>    
</div>   

@endsection
