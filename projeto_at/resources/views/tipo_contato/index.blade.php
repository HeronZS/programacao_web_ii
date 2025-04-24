@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Tipos de Contato</h1>
        <a href="{{ route('tipo-contato.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Novo Tipo
        </a>
    </div>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tiposContato as $tipo)
                <tr>
                    <td>{{ $tipo->id }}</td>
                    <td>{{ $tipo->nome }}</td>
                    <td>{{ Str::limit($tipo->descricao, 50) }}</td>
                    <td class="table-actions">
                        <a href="{{ route('tipo-contato.show', $tipo->id) }}" class="btn btn-info btn-sm" title="Ver">
                            <i class="fas fa-eye">Detalhes</i>
                        </a>
                        <a href="{{ route('tipo-contato.edit', $tipo->id) }}" class="btn btn-warning btn-sm" title="Editar">
                            <i class="fas fa-edit">Editar</i>
                        </a>
                        <form action="{{ route('tipo-contato.destroy', $tipo->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" title="Excluir" onclick="return confirm('Tem certeza que deseja excluir este item?')">
                                <i class="fas fa-trash-alt">Deletar</i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection