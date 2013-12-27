<div id="acciones">
    <?php echo $this->Html->link( 'Lista de categorias', array('action' => 'index') );
          echo $this->Html->link( 'Lista de preguntas', array( 'controller' => 'preguntas_frecuentes', 'action' => 'index' ) ); ?>
</div>
<div class="turnos form">
<?php echo $this->Form->create('Categoria');?>
    <fieldset>
        <legend>Agregar Categoria de Pregunta Frecuente</legend>
    <?php
        echo $this->Form->input('nombre', array( 'type' => 'text' ) );
        echo $this->Form->input('parent_id');
        echo $this->Form->input('id_categoria');
    ?>
    </fieldset>
<?php echo $this->Form->end( 'Guardar' );?>
</div>