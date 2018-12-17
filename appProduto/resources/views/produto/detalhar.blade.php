@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('visualizar.produto') }}">Produtos</a></li>
                        <li class="breadcrumb-item active">Adicionar</li>
                    </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="endereco">Descrição:</label>  
                        <input class="form-control" name="descricao" type="text" value="{{ $produto->descricao }}" readonly>
                    </div>  
                    <div class="form-group">
                        <label for="nome">Código de Referência:</label>  
                        <input class="form-control" name="codigo_referencia" value="{{ $produto->codigo_referencia }}" type="text" readonly>
                    </div>  
                    <div class="form-group">
                        <label for="nome">Preço:</label>  
                        <input class="form-control" name="preco" value="{{ $produto->preco }}" type="number" readonly>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
