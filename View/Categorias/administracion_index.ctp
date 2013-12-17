<?php $this->set( 'title_for_layout', "Listado de categorias de preguntas frecuentes" ); ?>
<script>
 $( function() { $("a", "#accion").button(); });
</script>
<div id="accion">
    <?php echo $this->Html->link( 'Agregar nueva categoria', array('action' => 'add')); ?>
</div>
<br />
<h2>Categorias de Preguntas frecuentes</h2>
<table cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
            <!-- <th>Logo</th> -->
            <th><?php echo $this->Paginator->sort('id_categoria');?></th>
            <th><?php echo $this->Paginator->sort('nombre');?></th>
            <th><?php echo $this->Paginator->sort('Padre');?></th>
            <th class="actions">Acciones</th>
    </tr>
    <?php
    $i = 0;
    foreach ( $categorias as $categoria ): ?>
    <tr>
        <td><?php echo h($categoria['Categoria']['id_categoria']); ?>&nbsp;</td>
        <td><?php echo h($categoria['Categoria']['nombre']); ?>&nbsp;</td>
        <td><?php echo h($categoria['Padre']['Categoria']['nombre']); ?>&nbsp;</td>
        <td class="actions">
            <?php echo $this->Html->link( 'Ver', array('action' => 'view', $categoria['Categoria']['id_categoria'] ) ); ?>
            <?php echo $this->Html->link( 'Editar', array('action' => 'edit', $categoria['Categoria']['id_categoria'])); ?>
            <?php echo $this->Form->postLink( 'Eliminar', array('action' => 'delete', $categoria['Categoria']['id_categoria']), null, 'Esta seguro que desea eliminar la pregunta?' ); ?>
        </td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<p><?php echo $this->Paginator->counter(array('format' =>'Pagina {:page} de {:pages}, mostrando {:current} de {:count}, desde {:start} al {:end}' ) ); ?></p>
<div class="paging">
<?php
    echo $this->Paginator->prev('< Anterior', array(), null, array('class' => 'prev disabled'));
    echo $this->Paginator->numbers(array('separator' => ''));
    echo $this->Paginator->next( 'Siguiente >', array(), null, array('class' => 'next disabled'));
?>
</div>
