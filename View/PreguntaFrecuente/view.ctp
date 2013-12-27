<?php
$this->set( 'title_for_layout', $pregunta['Pregunta']['pregunta'] );
?>
<div class="row-fluid">
    <div class="span12">
        <h4><?php echo $pregunta['Pregunta']['pregunta']; ?></h4>
    </div>
</div>
<div class="row-fluid">    
    <div class="span12 well well-small">
        <?php echo $pregunta['Pregunta']['respuesta']; ?>
    </div>
</div>
<div class="row-fluid">    
    <div class="span4 well">
        <h5>Comentarios</h5>
        <ul class="nav nav-pills nav-stacked">
        <?php
        foreach( $pregunta['Comentarios'] as $comentario ) :
            echo $this->Html->tag( 'li',
                $this->Html->tag( 'div', $comentario['comentario'] )
            );
        endforeach;
        ?>
        </ul>
        <?php echo $this->element( 'comentario', array( 'pregunta_id' => $pregunta['Pregunta']['id_pregunta'] ) ); ?>
    </div>
    <div class="span4 well">
        <h5>Preguntas similares</h5>
        <ul class="nav nav-pills nav-stacked">
            <li>Pregunta similar</li>
        </ul>
    </div>
    <div class="span4 well">
        <?php echo $this->Html->link( $this->Html->tag( 'span', '', array( 'class' => 'icon  icon-thumbs-up') ).' Me fue util',
                                       array( 'controller' => 'pregunta_frecuente', 'action' => 'util', $pregunta['Pregunta']['id_pregunta'] ),
                                       array( 'class' => 'btn', 'escape' => false )
              );
              echo $this->Html->link( $this->Html->tag( 'span', '', array( 'class' => 'icon icon-thumbs-down') ). 'Reportar',
                                      array( 'controller' => 'pregunta_frecuente', 'action' => 'reportar', $pregunta['Pregunta']['id_pregunta'] ),
                                      array( 'class' => 'btn', 'escape' => false )
              ); 
        ?>
    </div>
</div>