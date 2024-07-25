@extends('public.layout.index2')

@section('conteudo')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Fresco e Organico</p>
                        <h1>carrinho</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <table></table>

    <!-- cart -->
    <div class="cart-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr class="table-head-row">
                                    <th class="product-remove"></th>
                                    <th class="product-image">Imagem</th>
                                    <th class="product-name">Nome</th>
                                    <th class="product-price">Preço</th>
                                    <th class="product-quantity">Quantidade</th>
                                    <th class="product-total"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items = LaraCart::getItems() as $item)
                                    <tr class="table-body-row">
                                        <td class="product-remove">
                                            <a href="{{ route('carrinho.delete', $item->id) }}">
                                                <i class="far fa-window-close">
                                                </i>
                                            </a>
                                        </td>
                                        <td class="product-image">
                                            <img src="{{ url('storage/' . $item->imagem_url) }}" alt="">

                                        </td>
                                        <td class="product-quantity">
                                            {{ $item->name }} - {{$item->tipo}}
                                        </td>
                                        <td>
                                            {{ number_format($item->price, 2, ',', '.') }}
                                        </td>
                                        <form action="{{ route('carrinho.update') }}" method="post">

                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <td>
                                                @if ($item->tipo == 'servico')
                                                    <input name="quantidade" type="number" min="1"
                                                        value="{{ $item->qty }}" max="1">
                                                @else
                                                    <input name="quantidade" type="number" min="1"
                                                        value="{{ $item->qty }}">
                                                @endif

                                            </td>
                                            <td>
                                                <button type="submit" class="botao"> Atualizar
                                                </button>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="total-section">
                        <table class="total-table">
                            <thead class="total-table-head">
                                <tr class="table-total-row">
                                    <th>Total</th>
                                    <th>Preço</th>
                                </tr>
                            </thead>

                            <tbody><!--
                                        <tr class="total-data">
                                            <td><strong>Subtotal: </strong></td>
                                            <td> kz</td>
                                        </tr>
                                        <tr class="total-data">
                                            <td><strong>Expedição: </strong></td>
                                            <td>450kz</td>
                                        </tr>-->
                                <tr class="total-data">
                                    <td><strong>Total: </strong></td>
                                    <td>{{ LaraCart::total() }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="cart-buttons">
                            <a href="{{ route('site.produtos_e_servicos') }}" class="boxed-btn">Continuar a comprar</a>
                            <a href="{{ route('site.checkout') }}" class="boxed-btn black">Verificar</a>
                        </div>
                    </div>

                    <!--<div class="coupon-section">
                                <h3>Aplicar</h3>
                                <div class="coupon-form-wrap">
                                    <form action="index.html">
                                        <p><input type="text" placeholder="Coupon"></p>
                                        <p><input type="submit" value="Aplicar"></p>
                                    </form>
                                </div>
                            </div>-->
                </div>
            </div>
        </div>
    </div>
@endsection
