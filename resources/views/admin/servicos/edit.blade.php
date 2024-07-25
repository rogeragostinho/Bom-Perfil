@extends('admin.layout.index')

@section('conteudo')
    <div class="row mt-5 justify-content-center">

        <div class="col-8">
            @include('components.mensagem')
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header p-3">
                    <h4 class="text-center fw-bold">EDITAR SERVIÇO</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('servicos.update', $servico->id) }}" method="post" enctype="multipart/form-data"
                        class="p-4 pt-3">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" id="exampleFormControlInput1"
                                value="{{ $servico->nome }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Preço</label>
                            <input type="number" class="form-control" name="preco" id="exampleFormControlInput2"
                                value="{{ $servico->preco }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput4" class="form-label">Categoria</label>
                            <input type="text" class="form-control" name="categoria" id="exampleFormControlInput4"
                                value="{{ $servico->categoria }}">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Imagem</label>
                            <input class="form-control" name="imagem" type="file" id="formFile"
                                value="{{ url('storage/' . $servico->imagem_url) }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                            <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3">{{ $servico->descricao }} </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3 fw-bold" style="width: 100%">CONFIRMAR</button>

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
