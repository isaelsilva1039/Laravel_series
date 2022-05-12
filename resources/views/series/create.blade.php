<x-layout title="Nova serie">

    <form action="/series/salvar" method="post">
        @csrf

        <label  class="form-label">Nome:</label>
        <input type="text"  name="nome" class="form-control mb-2">
        <button type="submit" class="btn btn-primary" value="Adicionar">Adicionar</button>
    </form>

</x-layout>
