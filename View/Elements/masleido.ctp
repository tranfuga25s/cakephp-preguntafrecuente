<?php
/***
 * Archivo que renderiza la vista de elementos más leidos
 * @author Esteban Zeller
 * @package PreguntasFrecuentes
 * @version 0.1
 */
 $preguntas = $this->requestAction( array( 'controller' => 'pregunta_frecuente', 'action' => 'masleido' ) );
 
 ?>
 <h4>Preguntas mas leidas</h4>
 <ul class="nav nav-pills nav-stacked">
 <?php
 foreach( $preguntas as $pregunta ) {
     
     echo $this->Html->tag( 'li', 
                             $this->Html->link( $this->Text->truncate( $pregunta['Pregunta']['pregunta'], 100 ),
                                                array( 'controller' => 'pregunta_frecuente', 'action' => 'view', $pregunta['Pregunta']['id_pregunta'] ) ).
                             $this->Html->tag( 'span', 'Leida '.$pregunta['Pregunta']['leido'].' veces', array( 'class' => 'label' ) ) );
 } ?>    
 </ul>