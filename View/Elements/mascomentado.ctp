<?php
/***
 * Archivo que renderiza la vista de elementos más comentados
 * @author Esteban Zeller
 * @package PreguntasFrecuentes
 * @version 0.1
 */
 $preguntas = $this->requestAction( array( 'controller' => 'pregunta_frecuente', 'action' => 'mascomentado' ) );
 
 foreach( $preguntas as $pregunta ) {
	 
	 echo $this->Html->tag( 'p', $this->Html->link( $this->Text->truncate( $pregunta['Pregunta']['titulo'], 100 ),
	 						 						array( 'controller' => 'pregunta_frecuente', 'action' => 'view', $pregunta['Pregunta']['id_pregunta'] ) ).
	 						 	'tiene '.count( $pregunta['Pregunta']['Comentarios'] ).' comentarios' );
 }
