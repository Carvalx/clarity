<?php
$current_page = isset($_GET['page']) ? $_GET['page'] : '';

function activaPage($page, $current_page) {
    return $page === $current_page ? 'activo' : '';
}

function is_dropdown_selected($pages, $current_page) {
    return in_array($current_page, $pages) ? 'activo' : '';
}
?>

<a href="index.php" class="logo"><img src="img/clarity.png" title="Clarity Pet" alt="No image"></a>
    <div class="menu-enlaces">
        <ul>
            <li><a href="?page=inicio" class="<?php echo activaPage('inicio', $current_page); ?>">INICIO</a></li>
            <li>|</li>
            <li><a href="?page=acerca-nosotros" class="<?php echo activaPage('acerca-nosotros', $current_page); ?>">ACERCA DE NOSOTROS</a></li>
            <li>|</li>
            <li>
                <div class="dropdown">
                    <button class="boton-servicios <?php echo is_dropdown_selected(['medicina-general', 'diagnostico', 'cirugias',
                'laboratorio', 'asesoramiento', 'tienda', 'laserterapia', 'adiestramiento'], $current_page); ?>">SERVICIOS VETERINARIOS</button>
                    <div class="dropdown-content">
                        <a href="?page=medicina-general" class="<?php echo activaPage('medicina-general', $current_page); ?>">Medicina General</a>
                        <a href="?page=diagnostico" class="<?php echo activaPage('diagnostico', $current_page); ?>">Diagnóstico</a>
                        <a href="?page=cirugias" class="<?php echo activaPage('cirugias', $current_page); ?>">Cirugías</a>
                        <a href="?page=laboratorio" class="<?php echo activaPage('laboratorio', $current_page); ?>">Laboratorio</a>
                        <a href="?page=asesoramiento" class="<?php echo activaPage('asesoramiento', $current_page); ?>">Asesoramiento</a>
                        <a href="?page=tienda" class="<?php echo activaPage('tienda', $current_page); ?>">Tienda</a>
                        <a href="?page=laserterapia" class="<?php echo activaPage('laserterapia', $current_page); ?>">Laserterapia</a>
                        <a href="?page=adiestramiento" class="<?php echo activaPage('adiestramiento', $current_page); ?>">Adiestramiento</a>
                    </div>
                </div>
            </li>
            <li>|</li>
            <li><a href="?page=donar-adoptar" class="<?php echo activaPage('donar-adoptar', $current_page); ?>">DONAR/ADOPTAR</a></li>
            <li>|</li>
            <li><a href="?page=contacto" class="<?php echo activaPage('contacto', $current_page); ?>">CONTACTO</a></li>
        </ul>
    </div>