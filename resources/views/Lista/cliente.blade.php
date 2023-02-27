@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Lista de Clientes') }}</h1>

    {{-- msg nenhum dado na tbl cliente --}}
    @if (count($clientes) == 0)
        <div class="card mb-4 py-3 border-left-primary">
            <div class="card-body">
                Não existe nenhum cliente cadastrado.
                Para cadastrar clique <a href="{{ route('cliente.create') }}">aqui.</a>
            </div>
        </div>
    @endif
    {{-- msg nenhum dado na tbl cliente --}}

    {{-- msg cliente --}}
    @if (session('msg'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Aviso',
                text: '{{ session('msg') }}',
            })
        </script>
    @endif
    {{-- msg cliente --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Clientes Cadastrados</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable table-hover" id="dataTable" width="100%"
                                cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending" style="width: 171px;">Nome
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 262px;">Tipo de Atendimento</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 122px;">Cidade</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 55px;">Data Cadastro</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 116px;">Celular</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 103px;">Ação</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" style="width: 20%" colspan="1">Nome</th>
                                        <th rowspan="1" style="width: 15%" colspan="1">Tipo de Atendimento</th>
                                        <th rowspan="1" style="width: 15%" colspan="1">Cidade</th>
                                        <th rowspan="1" colspan="1">Data Cadastro</th>
                                        <th rowspan="1" style="width: 15%" colspan="1">Celular</th>
                                        <th rowspan="1" colspan="1">Ação</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr class="odd">
                                            <td class="sorting_1">{{ $cliente->nome }}</td>
                                            <td>
                                                @if ($cliente->tp_atendimento == 1)
                                                    Particular
                                                @endif
                                                @if ($cliente->tp_atendimento == 2)
                                                    Defensoria Pública
                                                @endif
                                                @if ($cliente->tp_atendimento == 3)
                                                    Indicação
                                                @endif
                                            </td>
                                            <td>{{ $cliente->cidade }}</td>
                                            <td>{{ date('d-m-Y', strTotime($cliente->created_at)) }}</td>
                                            <td>{{ $cliente->celular }}</td>
                                            <td class="text-center">
                                                <a class="btn btn-primary btn-sm" href="{{ route('cliente.info', $cliente->id) }}">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    View
                                                </a>
                                                <a class="btn btn-info btn-sm" href="{{ route('cliente.edit', $cliente->id) }}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                <form action="{{ route('cliente.destroy', $cliente->id) }}" style="display: inline-block"
                                                    method="post" class="delete">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i> Delete</button>

                                                    {{-- if para continuar o ok do sweetalert --}}
                                                    @if (session('msg') == 'ok')
                                                        <script>
                                                            Swal.fire(
                                                                'Deletado!',
                                                                'Cliente excluído com sucesso.',
                                                                'success'
                                                            )
                                                        </script>
                                                    @endif
                                                    {{-- if para continuar o ok do sweetalert --}}

                                                    {{-- script para confirmação e envio do submit --}}
                                                    <script>
                                                        $('.delete').submit(function(e) {
                                                            e.preventDefault();

                                                            Swal.fire({
                                                                title: 'Tem certeza?',
                                                                text: "Você irá perder os dados deste cliente!",
                                                                icon: 'warning',
                                                                showCancelButton: true,
                                                                confirmButtonColor: '#3085d6',
                                                                cancelButtonColor: '#d33',
                                                                confirmButtonText: 'Sim!',
                                                                cancelButtonText: 'Cancelar'
                                                            }).then((result) => {
                                                                if (result.isConfirmed) {
                                                                    this.submit();
                                                                }
                                                            })
                                                        });
                                                    </script>
                                                    {{-- script para confirmação e envio do submit --}}
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
