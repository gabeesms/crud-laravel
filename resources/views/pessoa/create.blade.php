<h1>Formulário de Pessoa</h1>

<form action="/pessoas" method="POST">
    @csrf
    <input type="text" name="nome" required>
    <input type="text" name="telefone" required>
    <input type="text" name="email" required>
    <button type="submit">Salvar</button>
</form>

<br>

<a href="/pessoas">Voltar</a>