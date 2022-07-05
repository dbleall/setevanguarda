<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informações') }}
             
        </h2>
        <a class="btn btn-success" href="{{ route('products.edit','1') }}"> Editar Informações</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">               
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="row">
                    <div class="col-6">
                        @foreach ($infos as $info)
                            {{$info->id }}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>