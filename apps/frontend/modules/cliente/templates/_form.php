<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('cliente/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('cliente/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'cliente/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['nome_fantasia']->renderLabel() ?></th>
        <td>
          <?php echo $form['nome_fantasia']->renderError() ?>
          <?php echo $form['nome_fantasia'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['razao_social']->renderLabel() ?></th>
        <td>
          <?php echo $form['razao_social']->renderError() ?>
          <?php echo $form['razao_social'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cpf_cnpj']->renderLabel() ?></th>
        <td>
          <?php echo $form['cpf_cnpj']->renderError() ?>
          <?php echo $form['cpf_cnpj'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['endereco']->renderLabel() ?></th>
        <td>
          <?php echo $form['endereco']->renderError() ?>
          <?php echo $form['endereco'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cep']->renderLabel() ?></th>
        <td>
          <?php echo $form['cep']->renderError() ?>
          <?php echo $form['cep'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['bairro']->renderLabel() ?></th>
        <td>
          <?php echo $form['bairro']->renderError() ?>
          <?php echo $form['bairro'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cidade']->renderLabel() ?></th>
        <td>
          <?php echo $form['cidade']->renderError() ?>
          <?php echo $form['cidade'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['uf']->renderLabel() ?></th>
        <td>
          <?php echo $form['uf']->renderError() ?>
          <?php echo $form['uf'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['responsavel']->renderLabel() ?></th>
        <td>
          <?php echo $form['responsavel']->renderError() ?>
          <?php echo $form['responsavel'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['responsavel_cpf']->renderLabel() ?></th>
        <td>
          <?php echo $form['responsavel_cpf']->renderError() ?>
          <?php echo $form['responsavel_cpf'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['responsavel_end']->renderLabel() ?></th>
        <td>
          <?php echo $form['responsavel_end']->renderError() ?>
          <?php echo $form['responsavel_end'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['responsavel_cep']->renderLabel() ?></th>
        <td>
          <?php echo $form['responsavel_cep']->renderError() ?>
          <?php echo $form['responsavel_cep'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['responsavel_bairro']->renderLabel() ?></th>
        <td>
          <?php echo $form['responsavel_bairro']->renderError() ?>
          <?php echo $form['responsavel_bairro'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['responsavel_cidade']->renderLabel() ?></th>
        <td>
          <?php echo $form['responsavel_cidade']->renderError() ?>
          <?php echo $form['responsavel_cidade'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['responsavel_uf']->renderLabel() ?></th>
        <td>
          <?php echo $form['responsavel_uf']->renderError() ?>
          <?php echo $form['responsavel_uf'] ?>
        </td>
      </tr>
      
      
      
    </tbody>
  </table>
</form>
