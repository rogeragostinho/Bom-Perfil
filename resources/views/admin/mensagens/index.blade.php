@extends('admin.layout.index')

@section('conteudo')
    <div class="container">
        <div class="row p-5">
            <div class="col-12">
                @include('components.mensagem')
            </div>
            <div class="col bg-white">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nº</th>
                            <th>Data</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mensagens as $mensagem)
                            <tr>
                                <td>{{ $mensagem->id }} </td>
                                <td>{{ $mensagem->created_at }}</td>
                                <td>
                                    {{ $mensagem->email }}
                                </td>
                                <td>{{ $mensagem->telefone }}</td>

                                <th>
                                    <a href="{{ route('mensagens.show', $mensagem->id) }}" class="btn fw-bold text-white" style="font-size:0.7em; background-color:#145f7c;">
                                        VER
                                    </a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
