@extends('layouts.crud')

@section('titulo', 'Listagem de Solicitantes')

@section('corpo')
@if(empty($solicitantes))
    <h1>Nenhum registro cadastrado.</h1>
@else
<form method="post" action="" >
    @csrf 
    @method('delete')
    <table class="table table-sm table-striped">
        <thead>
            <tr>
                <th>Email</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tfoot>
       
        </tfoot>
        <tbody>
            @foreach($solicitantes as $solicitante)
            <tr>
                <td>{{ $solicitante->email }}</td>
                <td>{{ $solicitante->nome }}</td>
                <td>{{ $solicitante->telefone }}</td>
                <td>
                    <a href="" title="Editar Solicitante" class="btn btn-primary">Editar</a>
                    <input type="submit" name="Excluir Solicitante" class="btn btn-danger" value="Excluir" 
                           formaction="{{route('solicitante.destroy', $solicitante)}}"/>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</form>
@endif
<a href="{{ route('solicitante.create')}}" title="Novo Solicitante" class="btn btn-primary">Novo</a>
@endsection