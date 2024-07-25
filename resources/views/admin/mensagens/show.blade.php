@extends('admin.layout.index')

@section('conteudo')
    <div class="container">
        <div class="row p-5">
            <div class="col-12 bg-white p-4">
                <div class="row">
                    <div class="col ">
                        <div class="row">
                            <div class="col">
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <p><span class="fw-bold">Data: </span> {{ $mensagem->created_at }} </p>
                                    </div>
                                    <div class="col-auto">
                                        <form action="{{route('mensagens.destroy', $mensagem->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger fw-bold btn-sm">ELIMINAR</button>
                                        </form>
                                    </div>
                                </div>
                                
                                <p><span class="fw-bold">Nome:</span>
                                        
                                            {{$mensagem->nome }}
                                        
                                    </p>
                                <p><span class="fw-bold">Email: </span> {{ $mensagem->email }} </p>
                                <p><span class="fw-bold">Telefone: </span> {{ $mensagem->telefone }} </p>
                                <p><span class="fw-bold">Objetivo: </span> {{ $mensagem->objetivo }} </p>
                                <p><span class="fw-bold">Mensagem: </span> {{ $mensagem->mensagem }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
