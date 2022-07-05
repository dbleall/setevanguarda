<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informações') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3"> 
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('infos.index') }}"> Voltar</a>
                            </div>
                        </div>
                    </div>
                    @if(session('status'))
                    <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ route('infos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="form-group">
                                <label>Nome da Loja</label>
                                <input type="text" name="info_name" class="form-control" placeholder="Nome da loja">
                                @error('info_name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="form-group">
                                <label>info_logo</label>
                                <input type="file" name="info_logo" class="form-control">
                                @error('info_logo')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-6 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input type="text" name="info_phone" class="form-control" placeholder="Telefone">
                                    @error('info_phone')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Segundo Telefone</label>
                                    <input type="text" name="info_phone2" class="form-control" placeholder="Segundo Telefone">
                                    @error('info_phone2')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                    </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" name="info_facebook" class="form-control" placeholder="http://www.facebook.com/seufacebook">
                                @error('info_facebook')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="form-group">
                                <label>Instagram</label>
                                <input type="text" name="info_instagram" class="form-control" placeholder="http://www.instagram.com/seufacebook">
                                @error('info_instagram')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <textarea class="form-control" name="info_description" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="form-group">
                                    <label>Rua</label>
                                    <input type="text" name="info_address_street" class="form-control" placeholder="Rua">
                                    @error('info_address_street')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="form-group">
                                    <label>Número</label>
                                    <input type="text" name="info_address_number" class="form-control" placeholder="Número">
                                    @error('info_address_number')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="form-group">
                                    <label>Cidade</label>
                                    <input type="text" name="info_address_city" class="form-control" placeholder="Rua">
                                    @error('info_address_city')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <input type="text" name="info_address_state" class="form-control" placeholder="Estado">
                                    @error('info_address_state')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="form-group">
                                    <label>Pais</label>
                                    <input type="text" name="info_address_country" class="form-control" placeholder="Pais">
                                    @error('info_address_country')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="form-group">
                                    <label>CEP</label>
                                    <input type="text" name="info_address_cep" class="form-control" placeholder="CEP">
                                    @error('info_address_cep')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Criar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>