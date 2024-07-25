@extends('admin.layout.index')

@section('conteudo')
    <div class="container">
        <div class="row p-0 p-md-5">
            <div class="col-12 bg-white p-4">
                <div class="row">
                    <div class="col-12">
                        @include('components.mensagem')
                    </div>
                </div>
                <div class="row">
                    <div class="col ">
                        <div class="row">
                            <div class="col">
                                <p><span class="fw-bold">Data: </span>
                                    {{ Carbon\Carbon::parse($pedido->data)->format('d-m-Y') }} </p>
                                <p><span class="fw-bold">Estado:
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
                                </p>
                                <p><span class="fw-bold">Cliente: </span> {{ $pedido->cliente_nome }} </p>
                                <p><span class="fw-bold">Email: </span> {{ $pedido->cliente_email }} </p>
                                <p><span class="fw-bold">Telefone: </span> {{ $pedido->cliente_telefone }} </p>
                                <p><span class="fw-bold">Endereco: </span> {{ $pedido->cliente_endereco }} </p>
                            </div>
                            <div class="col-auto">
                                <div class="row justify-content-end text-end">
                                    <div class="col-12 mb-4">
                                        <a class="btn btn-primary fw-bold " href="{{ route('faturas.gerar', $pedido->id) }}"
                                            target="_blank" rel="noopener noreferrer">GERAR FATURA</a>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 mb-2">
                                                <form action="{{ route('pedidos.update', $pedido->id) }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="estado" value="pendente">
                                                    <button type="submit"
                                                        class="btn btn-warning fw-bold btn-sm">PENDENTE</button>
                                                </form>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <form action="{{ route('pedidos.update', $pedido->id) }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="estado" value="processando">
                                                    <button type="submit"
                                                        class="btn btn-info fw-bold btn-sm">PROCESSANDO</button>
                                                </form>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <form action="{{ route('pedidos.update', $pedido->id) }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="estado" value="concluido">
                                                    <button type="submit"
                                                        class="btn btn-success fw-bold btn-sm">CONCLUÍDO</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        @php
                            $total = 0;
                        @endphp
                        @if (count($pedido->Produtos) > 0)
                            <hr>
                            <h5 class="fw-bold">PRODUTOS</h5>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Preco</th>
                                                <th>Qtd</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @for ($i = 0; $i < count($pedido->Produtos); $i++)
                                                <tr>
                                                    <td>
                                                        {{ $pedido->Produtos[$i]->nome }}
                                                    </td>
                                                    <td>
                                                        {{ number_format($pedido->Produtos[$i]->preco, 2, ',', '.') }}
                                                    </td>
                                                    <td>
                                                        {{ $pedido->Produtos[$i]->pivot->quantidade }}
                                                    </td>
                                                    <td>
                                                        {{ number_format($pedido->Produtos[$i]->pivot->quantidade * $pedido->Produtos[$i]->preco, 2, ',', '.') }}
                                                        @php
                                                            $total +=
                                                                $pedido->Produtos[$i]->pivot->quantidade *
                                                                $pedido->Produtos[$i]->preco;
                                                        @endphp
                                                    </td>
                                                </tr>
                                            @endfor
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        @endif

                        @if (count($pedido->Servicos) > 0)
                            <hr class="mt-4">
                            <h5 class="fw-bold">SERVIÇOS</h5>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Preco</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @for ($i = 0; $i < count($pedido->Servicos); $i++)
                                                <tr>
                                                    <td>
                                                        {{ $pedido->Servicos[$i]->nome }}
                                                    </td>
                                                    <td>
                                                        {{ number_format($pedido->Servicos[$i]->preco, 2, ',', '.') }}
                                                    </td>
                                                    <td>
                                                        {{ number_format($pedido->Servicos[$i]->preco, 2, ',', '.') }}
                                                        @php
                                                            $total += $pedido->Servicos[$i]->preco;
                                                        @endphp
                                                    </td>
                                                </tr>
                                            @endfor
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col mt-4 text-end py-3 mx-2" style="background-color: #ebecee">
                                <h5><span class="fw-bold">Total(AKZ): </span>
                                    {{ number_format($total, 2, ',', '.') }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
