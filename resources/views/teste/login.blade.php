<h1>login</h1>

<p>Bem vindo {{$nome}}</p>

<ul>
    @foreach ($alunos as $aluno)
        <li>{{$aluno}}</li>
    @endforeach
</ul>

<hr>
<table>
    <thead border="1">
        <th>#ID</th>
        <th>NOME</th>
    </thead>
    <tbody>          
                @foreach ($categorias as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->nome}}</td>
                    </tr>
                @endforeach    
          
    </tbody>
</table>