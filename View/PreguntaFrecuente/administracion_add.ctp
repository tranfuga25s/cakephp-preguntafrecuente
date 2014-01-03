<?php
echo $this->Html->script( 'PreguntaFrecuente.ckeditor/ckeditor', array( 'once' => true, 'inline' => false ) );
?>
<div id="acciones">
    <?php echo $this->Html->link( 'Lista de preguntas', array('action' => 'index') );
          echo $this->Html->link( 'Lista de categorias', array( 'controller' => 'categorias', 'action' => 'index' ) ); ?>
</div>
<div class="turnos form">
<?php echo $this->Form->create('Pregunta');?>
    <fieldset>
        <legend>Agregar Pregunta Frecuente</legend>
    <?php
        echo $this->Form->input('categoria_id');
        echo $this->Form->input('pregunta', array( 'class' => 'ckeditor' ) );
        echo $this->Form->input('respuesta', array( 'class' => 'ckeditor' ) );
    ?>
    </fieldset>
<?php echo $this->Form->end( 'Agregar' );?>
</div>