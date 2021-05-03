@extends('template')


@section('conteudo')
<h1>Altera Clientes</h1>
<form action="{{route('cliente_alterar',['id'=> $u->id])}})}}" method="POST">
	@csrf
	<div class="">
		
		<div class="form-floating mb-2">
			<input type="text" name="nome" class="form-control" placeholder="Nome do Usuario" id="nome_id" />
			<label for="nome_id"> Nome de Usuario</label>
		</div>
		<div class="form-floating mb-2">
			<input type="email" name="email" class="form-control" placeholder="Seu Email" id="email_id" />
			<label for="senha_id"> Seu Email</label>
		</div>
		<div class="form-floating mb-2">
			<input type="password" name="senha" class="form-control" placeholder="Sua Senha" id="senha_id" />
			<label for="senha_id"> Sua Senha</label>
		</div>
		<div class="form-floating mb-2">
			<input type="text" name="endereco" class="form-control" placeholder="Seu Endereco" id="endereco_id" />
			<label for="endereco_id"> Seu Endereco</label>
		</div>
		<div class="form-floating mb-2">
			<input type="text" name="cep" class="form-control" placeholder="Seu CEP" id="cep_id" />
			<label for="cep_id"> Seu CEP</label>
		</div>
		<div class="form-floating mb-2">
			<input type="text" name="cidade" class="form-control" placeholder="Sua Cidade" id="cidade_id" />
			<label for="cidade_id"> Sua Cidade</label>
		</div>
			<select class="form-select-lg-mb-5" name="estado" id="estado" >
            <option selected>Selecione o seu Estado</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
			<input type="submit" name="Entrar" class="btn btn-danger" />
		</div>
</form>		
@endsection('conteudo')