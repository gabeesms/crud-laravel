<h1>Formulário de Pessoa</h1>

<form action="/pessoas" method="POST">
    @csrf
    <input type="text" name="nome">
    <input type="text" name="telefone">
    <input type="text" name="email">
    <button type="submit">Salvar</button>
</form>

<br>

<a href="/pessoas">Voltar</a>