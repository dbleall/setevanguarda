<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criar Produto') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3"> 
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('products.index') }}"> Voltar</a>
                            </div>
                        </div>
                    </div>
                    @if(session('status'))
                    <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group mt-2">
                                    <label for="product_name">Nome da Produto</label>
                                    <input type="text" name="product_name" class="form-control" placeholder="Nome da Produto">
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="product_category">Category</label>
                                    <input type="text" name="product_category" class="form-control" placeholder="Categoria do Produto">
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label>Imagem do produto</label>
                                    <input type="file" name="product_image1" class="form-control">
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                    <input type="file" name="product_image2" class="form-control" >
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                    <input type="file" name="product_image3" class="form-control" >
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                    <input type="file" name="product_image4" class="form-control" >
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                    <input type="file" name="product_image5" class="form-control" >
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>      
                                <div class="row">
                                   <div class="col-6">
                                        <div class="form-group mt-2">
                                            <label for="product_code">Código</strong>
                                            <input type="text" name="product_code" class="form-control" placeholder="Código do produto">
                                            @error('name')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                   </div>
                                   <div class="col-6">
                                        <div class="form-group mt-2">
                                            <label for="product_price">Preço</label>
                                            <input type="text" name="product_price" class="form-control" placeholder="Preço">
                                            @error('name')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                   </div>
                                </div>     
                                <div class="row">
                                    <div class="col-6">
                                         <div class="form-group mt-2">
                                            <label for="product_condition_payment">Parcelado em vezes</label>
                                             <input type="text" name="product_condition_payment" class="form-control" placeholder="Parcelado em vezes">
                                             @error('name')
                                             <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                             @enderror
                                         </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mt-2">
                                            <label for="product_suplier">Fabricante</label>
                                             <input type="text" name="product_suplier" class="form-control" placeholder="Fabricante">
                                             @error('name')
                                             <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                             @enderror
                                         </div>
                                    </div>
                                 </div>    
                                 <div class="form-group mt-2">
                                    <label for="product_description">Descrição</label>
                                    <textarea class="form-control" name="product_description" rows="3"></textarea>
                                  </div> 
                                  <div class="form-group mt-2">
                                    <label for="product_description2">Informações Técnicas</label>
                                    <textarea class="form-control" name="product_description2" rows="3"></textarea>
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