<?php
$this->set( 'title_for_layout', "Resultados de busqueda en ayuda" );
?>
<div class="row-fluid">
    <div class="span12">
        <h4>Resultado de la busqueda de <?php echo $texto; ?></h4>
        <?php if( count( $preguntas ) > 0 ) : ?>
        <ul class="nav nav-pills nav-stacked">
        <?php foreach( $preguntas as $pregunta ) :
            echo $this->Html->tag( 'li',
                    $this->Html->link( $pregunta['Pregunta']['pregunta'] .' '.
                    $this->Html->tag( 'span', 'Leida '.$pregunta['Pregunta']['leido'].' veces ', array( 'class' => 'label' ) ).
                    ' '.
                    $this->Html->tag( 'span', '0 comentarios', array( 'class' => 'label' ) ),
                                   array( 'plugin' => 'pregunta_frecuente', 'controller' => 'pregunta_frecuente', 'action' => 'view', $pregunta['Pregunta']['id_pregunta'] ),
                                   array( 'escape' => false )
                                )

            );
        endforeach;
        ?>
        </ul>
        <?php else : ?>
        <p>No se encontró ningun resultado para su busqueda.</p>
        <?php endif; ?>
        <?php echo $this->Html->link( 'Ver más categorias',
                                      array( 'controller' => 'pregunta_frecuente', 'action' => 'index' ),
                                      array( 'class' => 'btn')
              );
         ?><br /><br />
    </div>
</div>
