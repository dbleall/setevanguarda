<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Produto') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3"> 
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Editar Produto</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('products.index') }}" enctype="multipart/form-data"> Back</a>
                            </div>
                        </div>
                    </div>
                    @if(session('status'))
                    <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group mt-2">
                                    <label for="product_name">Nome da Produto</label>
                                    <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}">
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="product_category">Category</label>
                                    <input type="text" name="product_category" class="form-control" value="{{ $product->product_category }}">
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
 
                                <div class="row">
                                   <div class="col-6">
                                        <div class="form-group mt-2">
                                            <label for="product_code">Código</strong>
                                            <input type="text" name="product_code" class="form-control" value="{{ $product->product_code }}">
                                            @error('name')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                   </div>
                                   <div class="col-6">
                                        <div class="form-group mt-2">
                                            <label for="product_price">Preço</label>
                                            <input type="text" name="product_price" class="form-control" value="{{ $product->product_price }}">
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
                                             <input type="text" name="product_condition_payment" class="form-control" value="{{ $product->product_condition_payment }}">
                                             @error('name')
                                             <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                             @enderror
                                         </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mt-2">
                                            <label for="product_suplier">Fabricante</label>
                                             <input type="text" name="product_suplier" class="form-control" value="{{ $product->product_suplier }}">
                                             @error('name')
                                             <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                             @enderror
                                         </div>
                                    </div>
                                 </div>    
                                 <div class="form-group mt-2">
                                    <label for="product_description">Descrição</label>
                                    <textarea class="form-control"  rows="3" name="product_description">{{ $product->product_suplier }}</textarea>
                                  </div> 
                                  <div class="form-group mt-2">
                                    <label for="product_description2">Informações Técnicas</label>
                                    <textarea class="form-control"  rows="3" name="product_description2">{{ $product->product_suplier }}</textarea>
                                  </div>                      
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Editar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>