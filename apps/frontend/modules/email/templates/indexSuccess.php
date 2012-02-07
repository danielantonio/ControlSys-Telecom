<h1>Emails List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Email</th>
      <th>Cliente</th>
      <th>Tipo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($emails as $email): ?>
    <tr>
      <td><a href="<?php echo url_for('email/edit?id='.$email->getId()) ?>"><?php echo $email->getId() ?></a></td>
      <td><?php echo $email->getEmail() ?></td>
      <td><?php echo $email->getClienteId() ?></td>
      <td><?php echo $email->getTipo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('email/new') ?>">New</a>
