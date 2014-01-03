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
    <!-- <div class="span7 well">
        <h5>Comentarios</h5>
        <ul class="nav nav-pills nav-stacked">
        <?php
        if( isset( $pregunta['Comentarios'] ) && count( $pregunta['Comentarios'] ) > 0 ) :
        foreach( $pregunta['Comentarios'] as $comentario ) :
            echo $this->Html->tag( 'li',
                $this->Html->tag( 'div', $comentario['comentario'] )
            );
        endforeach;
        endif;
        ?>
        </ul>
        <?php //echo $this->element( 'comentario', array( 'pregunta_id' => $pregunta['Pregunta']['id_pregunta'] ) ); ?>
    </div> -->
    <div class="span5 well">
        <div class="btn-group">
        <?php
              if( $dio_util == false ) {
                  echo $this->Html->link( $this->Html->tag( 'span', '', array( 'class' => 'icon icon-thumbs-up icon-white') ).' Me fue util',
                                           array( 'controller' => 'pregunta_frecuente', 'action' => 'util', $pregunta['Pregunta']['id_pregunta'] ),
                                           array( 'class' => 'btn btn-primary', 'escape' => false )
                  );
              } else {
                  echo $this->Html->link( $this->Html->tag( 'span', '', array( 'class' => 'icon icon-thumbs-up icon-white') ).' Me fue util',
                                           array( 'controller' => 'pregunta_frecuente', 'action' => 'util', $pregunta['Pregunta']['id_pregunta'] ),
                                           array( 'class' => 'btn btn-primary disabled', 'escape' => false )
                  );
              }
              echo $this->Html->link( $this->Html->tag( 'span', '', array( 'class' => 'icon icon-thumbs-down') ). 'Reportar',
                                      array( 'controller' => 'pregunta_frecuente', 'action' => 'reportar', $pregunta['Pregunta']['id_pregunta'] ),
                                      array( 'class' => 'btn', 'escape' => false )
              );
        ?>
        </div>
        <?php
        if( isset( $preguntas_similares ) && $preguntas_similares != false && count( $preguntas_similares ) > 0 ) :
        ?>
        <h5>Preguntas similares</h5>
        <ul class="nav nav-pills nav-stacked">
            <?php
            foreach( $preguntas_similares as $pregunta ) :
                echo $this->Html->tag( 'li',
                    $this->Html->tag( 'div', $pregunta['Pregunta']['pregunta'] )
                );
            endforeach;
            ?>
        </ul>
        <?php
        endif;
        ?>
    </div>
</div>