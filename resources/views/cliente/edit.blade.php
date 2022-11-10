@include ('_partials/header')
@include ('_partials/navbar')
@include ('_partials/menu')

<div class="page-wrapper">
        <div class="container-fluid">
            <div class="card card-body">
                <h1 class="text-center">Editar cliente</h1>
                    <hr>

                    <form action="" method="post" class="m-3">
                        
                        @csrf
                        @foreach ($cliente as $cli)
                            <label for="nome">Nome</label>
                                <input type="text" id="nome" name="nome" class="form-control mb-3" value="<?= $cli->nome?>">
                            <label for="email">Email</label>
                                <input type="text" id="email" name="email" class="form-control mb-3" value="<?= $cli->email?>">    
                            <label for="cpf">CPF</label>
                                <input type="text" id="cpf" name="cpf" class="form-control mb-3" value="<?= $cli->cpf?>">    
                            <label for="endereco">Endereço</label>
                                <input type="text" id="endereco" name="endereco" class="form-control mb-3" value="<?= $cli->endereco?>">
                            <button class="btn btn-primary">Atualizar</button>                            
                        @endforeach
                        
                    </form>

            </div>
        </div>
   
</div>

@include ('_partials/footer')