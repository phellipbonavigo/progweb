<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atividade 08 </title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<form >
	
	@csrf
	<div class="row mb-5 id=topo">
		T
	</div>
	<div class="row">
		<div class="col-md-6 offset-md-3">

		<h3> Cadastrar Usuário </h3>
  <div class="form-floating mb-2">
     <div class="col-auto">
      <label class="sr-only" for="name_id">Nome de Usuário</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
        </div>
        <input type="text" class="form-control" id="name_id" placeholder="Usuário">
   </div>

  <div class="form-floating mb-2">
    <div class="col-auto">
      <label class="sr-only" for="cidade_id">Cidade</label>
      <input type="text" class="form-control mb-2" id="cidade_id" placeholder="Cidade">
    </div>
    <div class="form-floating mb-2">
    <div class="col-auto">
      <label class="sr-only" for="endereco_id">Endereço</label>
      <input type="text" class="form-control mb-2" id="endereco_id" placeholder="Rua Antônio Appi 462">
    </div>
    <div class="form-floating mb-2">
    <div class="col-auto">
      <label class="sr-only" for="cep_id">CEP</label>
      <input type="text" class="form-control mb-2" id="cep_id" placeholder="CEP">
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
 		<div class="col-auto">
 	<br>
      <button type="submit" class="btn btn-primary mb-2">Enviar</button>
    </div>

  </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</body>
</html> 