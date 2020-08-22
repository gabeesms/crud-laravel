<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<h1>Pessoas Cadastradas</h1>

<a class="btn btn-primary" href="/pessoas/create">Cadastrar Nova</a>

<hr>

<table class="table table-bordered">
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    @foreach ($pessoas as $p)
    <tr>
        <td>{{ $p->nome}}</td>
        <td>{{ $p->telefone}}</td>
        <td>{{ $p->email}}</td>
        <td>
            <a href="/pessoas/{{ $p->id }}/edit">Editar</a>
            <a href="/pessoas/{{ $p->id }}">Excluir</a>
            {{-- <form action="/pessoas/{{ $p->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Excluir">
            </form> --}}
        </td>
        
    </tr>
    @endforeach
</table>