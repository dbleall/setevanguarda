<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fornecedores') }}
             
        </h2>
        <a class="btn btn-success" href="{{ route('supliers.create') }}"> Criar Fornecedor</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">               
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <table class="table table-bordered">
                    <tr>
                        <th>S.No</th>
                        <th>Fornecedor</th>
                        <th width="280px">Ações</th>
                    </tr>
                    @foreach ($supliers as $suplier)
                    <tr>
                        <td>{{ $suplier->id }}</td>
                        <td>{{ $suplier->suplier_name }}</td>
                        <td>
                        <form action="{{ route('supliers.destroy',$suplier->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('supliers.edit',$suplier->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Deletar</button>   
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>