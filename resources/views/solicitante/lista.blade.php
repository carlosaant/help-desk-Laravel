@extends('layouts.crud')

@section('titulo', 'Cadastro de Cidades')

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
                <th>Código</th>
                <th>Nome</th>
                <th>Estado</th>
                <th>-Ação</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="4">
                    {{$solicitantes->links()}}
                </td>
            </tr>
        </tfoot>
        <tbody>
            @foreach($solicitantes as $solicitante)
            <tr>
                <td>{{ $solicitante->email }}</td>
                <td>{{ solicitante->nome }}</td>
                <td>test</td>
                <td>
                    <a href="" title="Editar" class="btn btn-primary">Editar</a>
                    <input type="submit" name="Excluir" class="btn btn-danger" value="Excluir" 
                           formaction=""/>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</form>
@endif
<a href="" title="Novo estado" class="btn btn-primary">Novo</a>
@endsection