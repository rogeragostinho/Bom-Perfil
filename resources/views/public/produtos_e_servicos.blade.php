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

        <!-- seção dos produtos -->
        <div class="product-section mt-150 mb-150" id="produtos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">
                            <h3><span class="orange-text">Nossos</span> Produtos</h3>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    @foreach ($produtos as $produto)
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="{{route('site.produto', $produto->id)}}"><img src="{{ url('storage/' . $produto->imagem_url) }}"
                                            alt="" style="height: 280px;"></a>
                                </div>
                                <h3>{{ $produto->nome }} </h3>
                                <p class="product-price"><span>Comércio</span>{{ number_format($produto->preco, 2, ',', '.') }} </p>
                                <form action="{{ route('carrinho.add') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="tipo" value="produto">
                                    <input type="hidden" name="id" value="{{ $produto->id }}">
                                    <input type="hidden" name="nome" value="{{ $produto->nome }}">
                                    <input type="hidden" name="preco" value="{{ $produto->preco }}">
                                    <input type="hidden" name="imagem_url" value="{{ $produto->imagem_url }}">
                                    <button type="submit" class="botao">
                                        <i class="fas fa-shopping-cart"></i> Adiciona ao carrinho
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
    
                        
                </div>
            </div>
        </div>
        <!-- fim seção dos produtos -->


        <!-- seção dos serviços -->
    @if (count($servicos) > 0)
    <div class="product-section mt-150 mb-150" id="servicos">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Nossos</span> Serviços</h3>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($servicos as $servico)
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="{{route('site.servico', $servico->id)}}"><img src="{{ url('storage/' . $servico->imagem_url) }}"
                                    alt="" style="height: 280px;"></a>
                        </div>
                        <h3>{{ $servico->nome }} </h3>
                        <p class="product-price"><span>Comércio</span>{{number_format($servico->preco, 2, ',', '.')  }} </p>
                        <form action="{{ route('carrinho.add') }}" method="post">
                            @csrf
                            <input type="hidden" name="tipo" value="servico">
                            <input type="hidden" name="id" value="{{ $servico->id }}">
                            <input type="hidden" name="nome" value="{{ $servico->nome }}">
                            <input type="hidden" name="preco" value="{{ $servico->preco }}">
                            <input type="hidden" name="imagem_url" value="{{ $servico->imagem_url }}">
                            <button type="submit" class="botao">
                                <i class="fas fa-shopping-cart"></i> Adiciona ao carrinho
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endif

<!-- fim seção dos serviços -->
    
@endsection
