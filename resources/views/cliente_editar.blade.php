@extends('template')


@section('conteudo')
<h1>Altera Clientes</h1>
<form action="{{route('cliente_alterar',['id'=> $u->id])}})}}" method="POST">
	@csrf
	<div class="">
		
		<div class="form-floating mb-2">
			<input type="text" name="nome" class="form-control" placeholder="Nome do Usuario" id="nome_id" />
			<label for="name_id"> Nome de Usuario</label>
		</div>
		<div class="form-floating mb-2">
			<input type="email" name="email" class="form-control" placeholder="Seu Email" id="email_id" />
			<label for="email_id"> Seu Email</label>
		</div>
		<div class="form-floating mb-2">
			<input type="password" name="senha" class="form-control" placeholder="Sua Senha" id="senha_id" />
			<label for="senha_id"> Sua Senha</label>
		</div>
	
			<input type="submit" name="Entrar" class="btn btn-danger" value="Editar Dados" />
		</div>
</form>		
@endsection('conteudo')