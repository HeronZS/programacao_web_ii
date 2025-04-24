@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Editar Tipo de Contato</h1>
            <a href="{{ route('tipo-contato.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Voltar
            </a>
        </div>
        
        <form action="{{ route('tipo-contato.update', $tipoContato->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" 
                       value="{{ old('nome', $tipoContato->nome) }}" required>
                @error('nome')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="4">{{ old('descricao', $tipoContato->descricao) }}</textarea>
            </div>
            
            <div class="action-buttons">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Atualizar
                </button>
                <a href="{{ route('tipo-contato.show', $tipoContato->id) }}" class="btn btn-outline-secondary">
                    <i class="fas fa-times"></i> Cancelar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection