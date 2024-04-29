<!-- Botão de adicionar na parte superior esquerda -->
<button type="button" class="btn btn-success" style="margin-bottom: 10px;"
    onclick="window.location='{{ route('systems.create') }}';">
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
        @foreach ($systems as $system)
            <tr>
                <td>{{ $system->id }}</td>
                <td>
                    <img src="{{ asset('storage/' . $system->image) }}" alt="System Image" width="100"
                        height="100">
                </td>
                <td>{{ $system->name }}</td>
                <td>{{ $system->url }}</td>
                <td>
                    <button type="button" class="btn btn-primary"
                        onclick="window.location='{{ route('systems.edit', $system->id) }}';">
                        <i class="fas fa-edit"></i> Editar
                    </button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalExemplo{{ $system->id }}">
                        <i class="fas fa-trash-alt"></i> Excluir
                    </button>
                    <form action="{{ route('systems.destroy', $system->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal fade" id="modalExemplo{{ $system->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Deseja realmente excluir este sistema?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Fechar</button>
                                        <button type="submit" class="btn btn-primary">Excluir</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </td>
                </td>
            </tr>
        @endforeach
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
