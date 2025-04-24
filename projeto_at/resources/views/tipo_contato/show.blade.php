@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Detalhes do Tipo de Contato</h3>
                <a href="{{ route('tipo-contato.index') }}" class="btn btn-light btn-sm">
                    <i class="fas fa-arrow-left"></i> Voltar
                </a>
            </div>
        </div>
        
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-2 font-weight-bold">ID:</div>
                <div class="col-md-10">{{ $tipoContato->id }}</div>
            </div>
            
            <div class="row mb-3">
                <div class="col-md-2 font-weight-bold">Nome:</div>
                <div class="col-md-10">{{ $tipoContato->nome }}</div>
            </div>
            
            <div class="row mb-3">
                <div class="col-md-2 font-weight-bold">Descrição:</div>
                <div class="col-md-10">{{ $tipoContato->descricao ?? 'Nenhuma descrição cadastrada' }}</div>
            </div>
            
            <div class="row">
                <div class="col-md-2 font-weight-bold">Criado em:</div>
                <div class="col-md-10">{{ $tipoContato->created_at->format('d/m/Y H:i') }}</div>
            </div>
        </div>
        
        <div class="card-footer bg-light">
            <div class="action-buttons">
                <a href="{{ route('tipo-contato.edit', $tipoContato->id) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Editar
                </a>
                <form action="{{ route('tipo-contato.destroy', $tipoContato->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" 
                            onclick="return confirm('Tem certeza que deseja excluir este tipo de contato?')">
                        <i class="fas fa-trash-alt"></i> Excluir
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection