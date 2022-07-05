<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Informações') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3"> 
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Editar Informações</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('infos.index') }}" enctype="multipart/form-data"> Back</a>
                            </div>
                        </div>
                    </div>
                    @if(session('status'))
                    <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ route('infos.update',$info->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                <label>Nome da Loja</label>
                                <input type="text" name="info_name" class="form-control" value="{{ $info->info_name }}">
                                @error('info_name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            
                            <div class="col-6 col-sm-12">
                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input type="text" name="info_phone" class="form-control" value="{{ $info->info_name }}">
                                    @error('info_phone')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6 col-sm-12">
                                <div class="form-group">
                                    <label>Segundo Telefone</label>
                                    <input type="text" name="info_phone2" class="form-control" value="{{ $info->info_name }}">
                                    @error('info_phone2')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                    </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" name="info_facebook" class="form-control" value="{{ $info->info_name }}">
                                @error('info_facebook')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                <label>Instagram</label>
                                <input type="text" name="info_instagram" class="form-control" value="{{ $info->info_name }}">
                                @error('info_instagram')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <textarea class="form-control" name="info_description" id="" cols="30" rows="10">{{ $info->info_name }}</textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Rua</label>
                                    <input type="text" name="info_address_street" class="form-control" value="{{ $info->info_name }}">
                                    @error('info_address_street')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Número</label>
                                    <input type="text" name="info_address_number" class="form-control" value="{{ $info->info_name }}">
                                    @error('info_address_number')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Cidade</label>
                                    <input type="text" name="info_address_city" class="form-control" value="{{ $info->info_name }}">
                                    @error('info_address_city')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <input type="text" name="info_address_state" class="form-control" value="{{ $info->info_name }}">
                                    @error('info_address_state')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Pais</label>
                                    <input type="text" name="info_address_country" class="form-control" value="{{ $info->info_name }}">
                                    @error('info_address_country')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>CEP</label>
                                    <input type="text" name="info_address_cep" class="form-control" value="{{ $info->info_name }}">
                                    @error('info_address_cep')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Editar Informações</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>