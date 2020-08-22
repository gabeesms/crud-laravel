<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<h1>Deseja mesmo excluir a pessoa '{{ $pessoa->nome }}'?</h1>

<form action="/pessoas/{{ $pessoa->id }}" method="POST">
    @csrf
    @method('DELETE')
    <input class="btn btn-danger" type="submit" value="Sim">
</form>

<a class="btn btn-primary" href="/pessoas">Não</a>