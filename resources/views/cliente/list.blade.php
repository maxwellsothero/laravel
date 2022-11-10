@include ('_partials/header')
@include ('_partials/navbar')
@include ('_partials/menu')

<div class="page-wrapper">
        <div class="container-fluid">
            <div class="card card-body">
                <h1 class="text-center">Lista de Clientes</h1>
                    <hr>
                    @if (session('sucesso'))
                        <div class="alert alert-success alert-dismissible">{{session('sucesso')}}</div>
                    @endif    

                <table class="table table-striped">
                    <thead class="table-hover table-primary bg-primary text-white">
                        <tr>
                            <th>#ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>CPF</th>
                            <th>Endereço</th>
                            <th>Ação</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                                @foreach ($clientes as $cli)
                                    <tr>
                                        <td>{{$cli->id}}</td>
                                        <td>{{$cli->nome}}</td>
                                        <td>{{$cli->email}}</td>
                                        <td>{{$cli->cpf}}</td>
                                        <td>{{$cli->endereco}}</td>
                                        <td>
                                            <a href="/excluir-cliente/{{$cli->id}}" class="btn btn-rounded btn-outline-danger">Excluir</a>
                                            <a href="/editar-cliente/{{$cli->id}}" class="btn btn-rounded btn-outline-warning">Editar</a>
                                        </td>
                           
                                       
                                    </tr>
                                 @endforeach  
                    </tbody>

                </table>
            </div>
        </div>
   
</div>

@include ('_partials/footer')