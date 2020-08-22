@extends('template.master');
@section('titulo', 'Mensagem')
@section('conteudo')


<h1>Deseja mesmo excluir a pessoa '{{ $pessoa->nome }}'?</h1>

<form action="/pessoas/{{ $pessoa->id }}" method="POST">
    @csrf
    @method('DELETE')
    <input class="btn btn-danger" type="submit" value="Sim">
</form>

<a class="btn btn-primary" href="/pessoas">Não</a>

@endsection