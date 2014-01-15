<?php
/***
 * Pagina inicial del sistema.
 * @author Esteban Zeller
 * @version 1
 * @package PreguntasFrecuentes
 */
?>
<div class="preguntafrecuente index row-fluid">
	<h2>Preguntas frecuentes</h2>
	<div class="categorias span6">
		<h4>Categorias</h4>
		<ul class="nav nav-pills nav-stacked">
		<?php foreach( $categorias as $clave => $categoria ) :
            echo $this->Html->tag( 'li',
                $this->Html->link( $categoria,
                                   array( 'plugin' => 'pregunta_frecuente', 'controller' => 'categorias', 'action' => 'view', $clave )
                                ) );
		endforeach;
		?>
		</ul>
	</div>
	<div class="buscar span3">
		<h4>Buscar</h4>
		<?php
		echo $this->Form->create( 'PreguntaFrecuente', array( 'class' => 'form-search',
		                                                      'url' => array( 'controller' => 'pregunta_frecuente',
                                                                              'action' =>'buscar' ) ) );
        echo $this->Form->input( 'texto', array(
            'div' => array( 'class' => 'input-append' ),
            'label' => false,
            'class' => 'span9 search-query',
            'placeholder' => 'Buscar pregunta...',
            'required' => true,
            'after' => $this->Form->end( array( 'label' => 'Buscar',
                                                'div' => false,
                                                'class' => 'btn' ) )
        ) );
        echo $this->Form->end();
		?>
	</div>
	<div class="masleidas span4 well"><?php echo $this->element( 'masleido' ); ?></div>
	<div class="mascomentadas span4 well"><?php echo $this->element( 'mascomentado' ); ?></div>
</div>
<div class="pie">
	<small>Desarrollado por TR Sistemas Informaticos Integrales</small>
</div>
