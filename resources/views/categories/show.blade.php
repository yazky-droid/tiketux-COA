@extends('../layouts.app')
 
@section('title', 'Create Categories')

@section('content')

<div class="container mt-5 ">
    <div class="p-5 rounded-t-lg bg-slate-300">
        <div class="w-100">
            <div>
                <h3 class="text-center my-4">Show Category</h3>
                <h5 class="text-center"><a href="https://yazkymaulana.my.id">www.yazkymaulana.my.id</a></h5>
            </div>    
            <div class="bg-slate-200 p-10 shadow-sm rounded ">
                <a href="{{ route('categories.index')}}" class="bg-slate-400 p-2 px-5 rounded shadow-sm hover:text-slate-100 my-20">Back</a>
                <div class="w-full flex flex-col items-center justify-center">
                    <div class="w-full max-w-xs mt-2">
                        <p>{{ $category->nama }}</p>
                      </div>

                </div>
            </div>
        </div>    
    </div>    
</div>   

@endsection
