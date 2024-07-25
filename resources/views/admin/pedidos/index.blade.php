@extends('admin.layout.index')

@section('conteudo')
    <div class="container">
        <div class="row p-0 p-md-5">
            <div class="col-12">
                @include('components.mensagem')
            </div>
            <div class="col bg-white">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nº</th>
                            <th>Data</th>
                            <th>Estado</th>
                            <th>Cliente</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pedidos as $pedido)
                            <tr>
                                <td>{{ $pedido->id }} </td>
                                <td>{{ Carbon\Carbon::parse($pedido->data)->format('d-m-Y') }}</td>
                                <td>
                                    @if ($pedido->estado == 'pendente')
                                        <span class="text-warning fw-bold">
                                            {{ $pedido->estado }}
                                        </span>
                                    @else
                                        @if ($pedido->estado == 'concluido')
                                            <span class="text-success fw-bold">
                                                {{ $pedido->estado }}
                                            </span>
                                        @else
                                            <span class="text-info fw-bold">
                                                {{ $pedido->estado }}
                                            </span>
                                        @endif
                                    @endif
                                </td>
                                <td>{{ $pedido->cliente_nome }}</td>
                                <td>{{ number_format($pedido->total, 2, ',', '.') }}</td>
                                <th>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-auto">
                                                <a href="{{ route('pedidos.show', $pedido->id) }}"
                                                    class="btn fw-bold text-white"
                                                    style="font-size:0.7em; background-color:#145f7c;">
                                                    VER
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button style=" font-size:0.7em" type="submit"
                                                        class="btn btn-danger fw-bold">
                                                        ELIMINAR
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
