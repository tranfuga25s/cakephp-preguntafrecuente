<?php
$this->set( 'title_for_layout', "Preguntas frecuentes de ".$categoria['Categoria']['nombre'] );
?>
<div class="row-fluid">
    <div class="span12">
        <h4>Preguntas Frecuentes de <?php echo $categoria['Categoria']['nombre']; ?></h4>
        <ul class="nav nav-pills nav-stacked">
        <?php foreach( $categoria['Pregunta'] as $pregunta ) :
            echo $this->Html->tag( 'li', 
                    $this->Html->link( $pregunta['pregunta'] .' '.
                    $this->Html->tag( 'span', 'Leida '.$pregunta['leido'].' veces ', array( 'class' => 'label' ) ).
                    ' '.
                    $this->Html->tag( 'span', '0 comentarios', array( 'class' => 'label' ) ), 
                                   array( 'plugin' => 'pregunta_frecuente', 'controller' => 'pregunta_frecuente', 'action' => 'view', $pregunta['id_pregunta'] ),
                                   array( 'escape' => false )
                                )
                 
            ); 
        endforeach; 
        ?>
        </ul>
        <?php echo $this->Html->link( 'Ver más categorias', 
                                      array( 'controller' => 'pregunta_frecuente', 'action' => 'index' ), 
                                      array( 'class' => 'btn') 
              ); 
         ?><br /><br />
    </div>
</div>
