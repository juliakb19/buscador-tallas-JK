<?php
/*
Plugin Name: Buscador de Tallas
Description: Un plugin para crear un buscador de tallas de neumáticos.
Version: 1.0
Author: Júlia Krukonis
*/

// Shortcode para mostrar el formulario
function buscador_tallas_form() {
    ob_start(); ?>
    <form id="buscador-tallas">
        <label for="ancho">Ancho:</label>
        <select id="ancho" name="ancho">
            <option value="145">145</option>
            <option value="195">195</option>
            <!-- Añadir más opciones según tus datos -->
        </select>

        <label for="perfil">Perfil:</label>
        <select id="perfil" name="perfil">
            <option value="80">80</option>
            <option value="65">65</option>
            <!-- Añadir más opciones -->
        </select>

        <label for="radio">Radio:</label>
        <select id="radio" name="radio">
            <option value="13">13</option>
            <option value="15">15</option>
            <!-- Añadir más opciones -->
        </select>

        <button type="button" id="buscar">Buscar</button>
    </form>

    <div id="resultado"></div>
    <?php
    return ob_get_clean();
}
add_shortcode('buscador_tallas', 'buscador_tallas_form');

// Cargar el JavaScript
function agregar_estilos_buscador_tallas() {
    wp_enqueue_style('estilos-buscador-tallas', plugin_dir_url(__FILE__) . 'buscador-tallas.css');
}
add_action('wp_enqueue_scripts', 'agregar_estilos_buscador_tallas');

?>