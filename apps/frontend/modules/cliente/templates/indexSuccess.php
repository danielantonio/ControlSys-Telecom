<h1>Clientes</h1>

<table style="border-spacing: 10px">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nome Fantasia</th>
      <th>Razão Social</th>
      <th>Cidade</th>
      <th>UF</th>
      <th>Responsável</th>
      <th>Situacão</th>      
    </tr>
  </thead>
  <tbody>
    <?php foreach ($clientes as $cliente): ?>
    <tr>
      <td><a href="<?php echo url_for('cliente/show?id='.$cliente->getId()) ?>"><?php echo $cliente->getId() ?></a></td>
      <td><?php echo $cliente->getNomeFantasia() ?></td>
      <td><?php echo $cliente->getRazaoSocial() ?></td>
      <td><?php echo $cliente->getCidade() ?></td>
      <td><?php echo $cliente->getUf() ?></td>
      <td><?php echo $cliente->getResponsavel() ?></td>
      <td><?php echo $cliente->getSituacao() ?></td>      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('cliente/new') ?>">Add</a>
