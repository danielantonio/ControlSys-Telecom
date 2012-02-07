

<table cellspacing="5" style="text-align: left ">
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $cliente->getId() ?></td>
    </tr>
    <tr>
      <th>Nome fantasia:</th>
      <td><?php echo $cliente->getNomeFantasia() ?></td>
    </tr>
    <tr>
      <th>Razao social:</th>
      <td><?php echo $cliente->getRazaoSocial() ?></td>
    </tr>
    <tr>
      <th>Cpf cnpj:</th>
      <td><?php echo $cliente->getCpfCnpj() ?></td>
    </tr>
    <tr>
      <th>Endereco:</th>
      <td><?php echo $cliente->getEndereco() ?></td>
    </tr>
    <tr>
      <th>Cep:</th>
      <td><?php echo $cliente->getCep() ?></td>
    </tr>
    <tr>
      <th>Bairro:</th>
      <td><?php echo $cliente->getBairro() ?></td>
    </tr>
    <tr>
      <th>Cidade:</th>
      <td><?php echo $cliente->getCidade() ?></td>
    </tr>
    <tr>
      <th>Uf:</th>
      <td><?php echo $cliente->getUf() ?></td>
    </tr>
        <tr>
      <th>Criado:</th>
      <td><?php echo $cliente->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Atualizado:</th>
      <td><?php echo $cliente->getUpdatedAt() ?></td>
    </tr>

  </tbody>
</table>

<table>
    <tr>
    <th><h2>Responsável</h2></th>        
    </tr>
</table>


<table cellspacing="5" style="text-align: left ">
    <tbody>
    <tr>
      <th>Nome:</th>
      <td><?php echo $cliente->getResponsavel() ?></td>
    </tr>
    <tr>
      <th>CPF:</th>
      <td><?php echo $cliente->getResponsavelCpf() ?></td>
    </tr>
    <tr>
      <th>Endereço:</th>
      <td><?php echo $cliente->getResponsavelEnd() ?></td>
    </tr>
    <tr>
      <th>CEP:</th>
      <td><?php echo $cliente->getResponsavelCep() ?></td>
    </tr>
    <tr>
      <th>Bairro:</th>
      <td><?php echo $cliente->getResponsavelBairro() ?></td>
    </tr>
    <tr>
      <th>Cidade:</th>
      <td><?php echo $cliente->getResponsavelCidade() ?></td>
    </tr>
    <tr>
      <th>UF:</th>
      <td><?php echo $cliente->getResponsavelUf() ?></td>
    </tr>
    <tr>
      <th>Situacao:</th>
      <td><?php echo $cliente->getSituacao() ?></td>
    </tr>
  </tbody>  
</table>

<table>
    <tr>
    <th><h2>Emails</h2></th>    
    <td><?php echo link_to('Add', 'email/new?cliente_id='.$cliente->getId())?></td>
    </tr>
</table>


<table cellspacing="5" style="text-align: left  ">
  <thead>
    <th>Nome</th>
    <th>Email</th>
    <th>Tipo</th>
  </thead>
  <tbody>   
    <?php foreach ($emails as $email): ?>
  
  
    <tr>      
      <td><?php echo $email->getNome(); ?></td>
      <td><?php echo $email->getEmail(); ?></td>
      <td><?php echo $email->getTipo(); ?></td>
      <td><a href="<?php echo url_for('email/edit?id='.$email->getId()) ?>">Edit</a>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>



<table>
    <tr>
    <th><h2>Telefones</h2></th>    
    <td><?php echo link_to('Add', 'telefone/new?cliente_id='.$cliente->getId())?></td>
    </tr>
</table>
<table >
  <thead cellspacing="5" style="text-align: left  ">
    <th>Nome</th>
    <th>Telefone</th>
    <th>Tipo</th>
  </thead>
  <tbody>
    <?php foreach ($telefones as $telefone): ?>
    <tr>      
      <td><?php echo $telefone->getNome(); ?></td>
      <td><?php echo $telefone->getTelefone(); ?></td>
      <td><?php echo $telefone->getTipo(); ?></td>
      <td><a href="<?php echo url_for('telefone/edit?id='.$telefone->getId()) ?>">Edit</a>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


<hr />

<a href="<?php echo url_for('cliente/edit?id='.$cliente->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('cliente/index') ?>">List</a>
