<h1>Telefones List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Telefone</th>
      <th>Cliente</th>
      <th>Tipo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($telefones as $telefone): ?>
    <tr>
      <td><a href="<?php echo url_for('telefone/edit?id='.$telefone->getId()) ?>"><?php echo $telefone->getId() ?></a></td>
      <td><?php echo $telefone->getTelefone() ?></td>
      <td><?php echo $telefone->getClienteId() ?></td>
      <td><?php echo $telefone->getTipo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('telefone/new') ?>">New</a>
