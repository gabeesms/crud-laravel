<h1>Pessoas Cadastradas</h1>

<a href="/pessoas/create">Cadastrar Nova</a>

<hr>

@foreach ($pessoas as $p)
<p>Nome: {{ $p->nome}}</p>
<p>Telefone: {{ $p->telefone}}</p>
<p>Email: {{ $p->email}}</p>

<hr>
@endforeach