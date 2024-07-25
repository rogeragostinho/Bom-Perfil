@extends('admin.layout.index')

@section('conteudo')
    <div class="row mt-5 justify-content-center">
        <div class="col-10">
             @include('components.mensagem')
        </div>
       
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <img class="img-fluid" src="{{url('storage/'.$servico->imagem_url)}}" alt="">
                        </div>
                        <div class="col-6">
                            <div class="row ">
                                <div class="col-12">
                                    <p><span class="fw-bold">Nome: </span>{{ $servico->nome }} </p>
                                    <p><span class="fw-bold">Preço: </span>{{ number_format( $servico->preco, 2, ',', '.') }} </p>
                                    <p><span class="fw-bold">Categoria: </span>{{ $servico->categoria }} </p>
                                    <p><span class="fw-bold">Descrição: </span>{{ $servico->descricao}} </p>
                                </div>
                                <div class="col-12">
                                    <div class="row g-1 mt-5">
                                        <div class="col-auto">
                                            <a href="{{ route('servicos.edit', $servico->id) }}"
                                                class="btn text-white btn-sm fw-bold" style="background-color:#145f7c;">EDITAR</a>
                                        </div>
                                        <div class="col-auto">
                                            <form action="{{ route('servicos.destroy', $servico->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger fw-bold btn-sm">EXCLUIR</button>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
