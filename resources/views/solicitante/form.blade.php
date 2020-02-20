@extends('layouts.crud')

@section('titulo', 'Cadastro de Solicitantes')

@section('corpo')
<form method="post" action="{{ empty($solicitantes->id) ? route('solicitante.store') : route('solicitante.update', $solicitantes)}}">
    @csrf
    @if(!empty($solicitantes->id))
    @method('put')
    @endif
    <div class="form-row">
        <div class="col-12">
            <label>Email</label>
            <input type="text" name="email" maxlength="150" class="form-control"
                   value="{{$solicitantes->email}}"/>
        </div>
        <div class="col-12">
            <label>Nome</label>
            <input type="text" name="nome" maxlength="150" class="form-control"
                   value="{{$solicitantes->nome}}"/>
        </div>
        <div class="col-12">
            <label>Telefone</label>
            <input type="text" name="telefone" maxlength="150" class="form-control"
                   value="{{$solicitantes->telefone}}"/>
        </div>
        <div class="col-12">
            <label>Observação</label>
            <input type="text" name="observacao" maxlength="150" class="form-control"
                   value="{{$solicitantes->observacao}}"/>
        </div>
        <div class="col-12 mt-3">
            <input type="submit" value="Gravar" class="btn btn-primary"/>
        </div>
    </div>
</form>

<p class="mt-2">
    <a href="{{ route('solicitante.index')}}" title="Voltar" class="btn btn-primary">Voltar</a>
</p>
@endsection