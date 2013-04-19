<?php
/***
 * Pagina inicial del sistema.
 * @author Esteban Zeller
 * @version 1
 * @package PreguntasFrecuentes
 */
?>
<div class="preguntafrecuente index">
	<h2>Preguntas frecuentes</h2>
	<div class="contents">
		<div class="categorias">
			<h3>Categorias</h3>
			<p>lista de categorias</p>
		</div>
		<div class="buscar">
			<h3>Buscar</h3>
			<p>Formulario</p>
		</div>
		<div class="masleidas">
			<h3>Preguntas más leidas</h3>
			<?php echo $this->element( 'masleido' ); ?>
		</div>
		<div class="mascomentadas">
			<h3>Preguntas más comentadas</h3>
			<?php echo $this->element( 'mascomentado' ); ?>
		</div>
	</div>
</div>
<div class="pie">
	<small>Desarrollado por TR Sistemas Informaticos Integrales</small>
</div>
