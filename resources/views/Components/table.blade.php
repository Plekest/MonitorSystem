<!-- Botão de adicionar na parte superior esquerda -->
<button type="button" class="btn btn-success" style="margin-bottom: 10px;" onclick="window.location='{{ route('systems.create') }}';">
    <i class="fas fa-plus"></i> Adicionar
</button>

<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col"></th>
            <th scope="col">Nome</th>
            <th scope="col">URL</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach ($systems as $system)
            <td>{{$system->name}}</td>
            <td>{{$system->name}}</td>
            <td>{{$system->name}}</td>
            <td>@{{$system->name}}</td>
            <td>
                <!-- Botão de editar -->
                <button type="button" class="btn btn-primary">
                    <i class="fas fa-edit"></i> Editar
                </button>
                <!-- Botão de excluir -->
                <button type="button" class="btn btn-danger">
                    <i class="fas fa-trash-alt"></i> Excluir
                </button>
            </td>
        @endforeach
        </tr>
    </tbody>
    <tfoot class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            <th scope="col">Ações</th>
        </tr>
    </tfoot>
</table>

