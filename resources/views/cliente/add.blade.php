@include ('_partials/header')
@include ('_partials/navbar')
@include ('_partials/menu')

<div class="page-wrapper">
        <div class="container-fluid">
            <div class="card card-body">
                <h1 class="text-center">Novo cliente</h1>
                    <hr>

                    <form action="" method="post" class="m-3">
                        
                        @csrf
                        <label for="nome">Nome</label>
                            <input type="text" id="nome" name="nome" class="form-control mb-3">
                        <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control mb-3">    
                        <label for="cpf">CPF</label>
                            <input type="text" id="cpf" name="cpf" class="form-control mb-3">    
                        <label for="endereco">Endereço</label>
                            <input type="text" id="endereco" name="endereco" class="form-control mb-3">
                        <button class="btn btn-primary">Cadastrar</button>    
                    </form>

            </div>
        </div>
   
</div>

@include ('_partials/footer')