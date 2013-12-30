<?php $this->set( 'title_for_layout', "Listado de preguntas frecuentes" ); ?>
<script>
 $( function() { $("a", "#accion").button(); });
</script>
<div id="accion">
    <?php echo $this->Html->link( 'Agregar nueva pregunta', array('action' => 'add')); ?>
    <?php echo $this->Html->link( 'Categorías', array( 'controller' => 'categorias', 'action' => 'index' ) ); ?>
</div>
<br />
<h2>Preguntas frecuentes</h2>
<table cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
            <th><?php echo $this->Paginator->sort('id_pregunta');?></th>
            <th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
            <th><?php echo $this->Paginator->sort('pregunta');?></th>
            <th><?php echo $this->Paginator->sort('respuesta');?></th>
            <th class="actions">Acciones</th>
    </tr>
    <?php
    $i = 0;
    foreach ( $preguntas as $pregunta ): ?>
    <tr>
        <td><?php echo h('#'.$pregunta['Pregunta']['id_pregunta']); ?>&nbsp;</td>
        <td><?php echo $this->Html->link( $pregunta['Categoria']['nombre'], array( 'controller' => 'categorias', 'action' => 'view', $pregunta['Categoria']['id_categoria'] ) ); ?></td>
        <td><?php echo $this->Text->truncate($pregunta['Pregunta']['pregunta'], 50 ); ?>&nbsp;</td>
        <td><?php echo $this->Text->truncate($pregunta['Pregunta']['respuesta'], 50 ); ?>&nbsp;</td>
        <td class="actions">
            <?php echo $this->Html->link( 'Ver', array('action' => 'view', $pregunta['Pregunta']['id_pregunta'])); ?>
            <?php echo $this->Html->link( 'Editar', array('action' => 'edit', $pregunta['Pregunta']['id_pregunta'])); ?>
            <?php echo $this->Form->postLink( 'Eliminar', array('action' => 'delete', $pregunta['Pregunta']['id_pregunta']), null, 'Esta seguro que desea eliminar la pregunta?' ); ?>
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
