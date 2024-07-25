@extends('admin.layout.index')

@section('conteudo')
    <div class="container">
        <div class="row p-5 pb-0">
            <div class="col-12">
                @include('components.mensagem')
            </div>
            <div class="col bg-white">
                <div class="row py-2">
                    <div class="col-auto"><a href="{{route('register')}}" class="btn text-white m-0 fw-bold" style="font-size:0.9em; background-color:#145f7c;">ADICIONAR</a></div>    
                </div>
            </div>
        </div>
        <div class="row p-5 pt-4">
            <div class="col bg-white">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{$usuario->name}} </td>
                                <td>{{$usuario->email }}</td>
                                <td>
                                    @if ($usuario->tipo != 'superadmin')
                                    <form action="{{route('users.destroy', $usuario->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger fw-bold" style="font-size:0.7em">ELIMINAR</button>
                                    </form>    
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
