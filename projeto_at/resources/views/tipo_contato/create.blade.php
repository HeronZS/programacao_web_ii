@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Criar Novo Tipo de Contato</h1>
            <a href="{{ route('tipo-contato.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Voltar
            </a>
        </div>
        
        <form action="{{ route('tipo-contato.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required 
                       placeholder="Digite o nome do tipo de contato">
                @error('nome')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="4"
                          placeholder="Digite uma descrição (opcional)"></textarea>
            </div>
            
            <div class="action-buttons">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Salvar
                </button>
                <button type="reset" class="btn btn-outline-secondary">
                    <i class="fas fa-eraser"></i> Limpar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection