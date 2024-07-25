@extends('admin.layout.index')

@section('conteudo')
    <div class="container">
        <div class="row px-5 my-4">
            <div class="col-12 bg-white px-4">
                <div class="row justify-content-between my-4 ">
                    @include('components.mensagem')
                    <div class="col-auto">
                        <a href="{{ route('servicos.create') }}" class="btn text-white fw-bold" style="background-color:#145f7c;">ADICIONAR</a>
                    </div>
                    <div class="col-auto">
                        <form class="" method="GET">
                            <div class="input-group">
                                <input class="form-control" type="text" name="search" placeholder="Pesquisar por..."
                                    aria-label="Search for..." aria-describedby="btnNavbarSearch"
                                    value="{{ $search }}" />
                                <button class="btn text-white"id="btnNavbarSearch" type="submit" style="background-color:#145f7c;"><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 bg-white px-4">
                <div class="row ">
                    @foreach ($servicos as $servico)
                        <div class="col-4 mb-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ url('storage/' . $servico->imagem_url) }}" class="card-img-top" height="250px" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $servico->nome }}</h5>
                                    <h5 class="card-text my-3 text-info">{{number_format($servico->preco,2,',','.') }}</h5>
                                    <a href="{{ route('servicos.show', $servico->id) }}"
                                        class="btn text-white" style="background-color:#145f7c;">Detalhes</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
