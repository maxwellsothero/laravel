@include ('_partials/header')
@include ('_partials/navbar')
@include ('_partials/menu')

<div class="page-wrapper">
        <div class="container-fluid">
            <div class="card card-body">
                <h1 class="text-center">listar clientes</h1>
                    <hr>

                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>#ID</th>
                            <th>Nome</th>
                            <th>Email</th>
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
                                       
                                    </tr>
                                 @endforeach  
                    </tbody>

                </table>
            </div>
        </div>
   
</div>

@include ('_partials/footer')