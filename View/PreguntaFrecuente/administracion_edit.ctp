<div id="acciones">
    <?php echo $this->Html->link( 'Lista de preguntas', array('action' => 'index') );
          echo $this->Html->link( 'Lista de categorias', array( 'controller' => 'categorias', 'action' => 'index' ) ); ?>
</div>
<div class="turnos form">
<?php echo $this->Form->create('Pregunta');?>
    <fieldset>
        <legend>Editar Pregunta Frecuente</legend>
    <?php
        echo $this->Form->input('id_pregunta');
        echo $this->Form->input('categoria_id');
        echo $this->Form->input('pregunta');
        echo $this->Form->input('respuesta');
    ?>
    </fieldset>
<?php echo $this->Form->end( 'Guardar' );?>
</div>