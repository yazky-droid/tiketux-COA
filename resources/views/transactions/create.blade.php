@extends('../layouts.app')
 
@section('title', 'Create Transaction')

@section('content')
  
<div class="container mt-5 ">
    <div class="p-5 rounded-t-lg bg-slate-300">
        <div class="w-100">
            <div>
                <h3 class="text-center my-4 text-4xl">Add Transaction</h3>
                <h5 class="text-center"><a href="https://yazkymaulana.my.id">www.yazkymaulana.my.id</a></h5>
            </div>
            <div class="bg-slate-200 p-10 shadow-sm rounded ">
                <a href="{{ route('transactions.index')}}" class="bg-slate-400 p-2 px-5 rounded shadow-sm hover:text-slate-100 my-20">Back</a>
                <div class="w-full flex flex-col items-center justify-center">
                    <div class="w-full max-w-xs mt-2">
                        <form action="{{ route('transactions.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" >
                            @csrf

                          <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                              Tanggal
                            </label>                            
                            <input type="date" name="tanggal" id="date" class="w-full shadow border rounded py-2 px-3" value="{{ old('tanggal') }}">
  
                            {{-- error message for content --}}
                                @error('tanggal')
                                    <div class="max-w-sm w-full text-red-500 my-2">
                                        {{ $message }}    
                                    </div>                                    
                                @enderror
                          </div>
                          <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                              Category Name
                            </label>
                            <select class="form-control shadow border rounded w-full py-2 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="coa-option" name="coa_kode">
                              @foreach ($coas as $item)
                                 <option value="{{ $item->kode }}">{{ $item->nama }}</option>
                              @endforeach
                           </select>

                            {{-- error message for content --}}
                                @error('coa_kode')
                                    <div class="max-w-sm w-full text-red-500 my-2">
                                        {{ $message }}    
                                    </div>                                    
                                @enderror
                          </div>

                          <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                            Description  
                            </label>
                            <textarea name="desc" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="5" placeholder="Add the description">{{ old('desc') }}</textarea>
                            {{-- error message for content --}}
                                @error('desc')
                                    <div class="max-w-sm w-full text-red-500 my-2">
                                        {{ $message }}    
                                    </div>                                    
                                @enderror
                          </div>
                          <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                              Debit
                            </label>
                            <input name="debit" value="{{ old('debit') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " type="number" placeholder="Add the debit">

                            {{-- error message for content --}}
                                @error('debit')
                                    <div class="max-w-sm w-full text-red-500 my-2">
                                        {{ $message }}    
                                    </div>                                    
                                @enderror
                          </div>
                          <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                              Credit
                            </label>
                            <input name="credit" value="{{ old('credit') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " type="number" placeholder="Add the credit">

                            {{-- error message for content --}}
                                @error('credit')
                                    <div class="max-w-sm w-full text-red-500 my-2">
                                        {{ $message }}    
                                    </div>                                    
                                @enderror
                          </div>
                          <div class="flex items-center justify-between">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Save
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
