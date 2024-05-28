<div class="background-formulario">
    <div class="formulario-texto">
        <div class="titulo-formulario">
            <h2>¿Tienes alguna duda?, Contáctanos!</h2>
            <p>Con gusto te ayudaremos a resolver tus dudas, y brindarte la confianza para tí y a tu mascota.</p>
        </div>

        <form action="enviar-formulario.php" method="POST">
            <div class="formulario">
                <div class="item-formulario">
                    <label for="nombreForm">Nombre*:</label>
                    <input type="text" id="nombreForm" name="nombreForm" placeholder="Nombre..."
                     autocapitalize="on" autocomplete="on" title="Nombre" required>
                </div>

                <div class="item-formulario">
                    <label for="asuntoForm">Asunto*:</label>
                    <select class="asuntoForm" name="asuntoForm" id="asuntoForm" required>
                        <option value="">---Seleccionar---</option>
                        <option value="Consulta">Consulta</option>
                        <option value="Adoptar un compañero">Adoptar un compañero</option>
                        <option value="Donar">Donar comida</option>
                        <option value="Medicina General">Medicina General</option>
                        <option value="Diagnóstico">Diagnóstico</option>
                        <option value="Cirugías">Cirugías</option>
                        <option value="Laboratorio">Laboratorio</option>
                        <option value="Asesoramiento">Asesoramiento</option>
                        <option value="Laserterapía">Laserterapía</option>
                        <option value="Adiestramiento">Adiestramiento</option>
                    </select>
                </div>

                <div class="item-formulario">
                    <label for="correoForm">Correo*:</label>
                    <input type="email" id="correoForm" name="correoForm" placeholder="Correo..." 
                     title="Correo" required>
                </div>

                <div class="item-formulario">
                    <label for="telForm">Teléfono:</label>
                    <input type="tel" id="telForm" name="telForm" placeholder="Teléfono..." 
                    data-opcional title="Teléfono" autocomplete="on">
                </div>
            </div>

            <div class="textarea">
                <textarea name="textArea" id="textArea" placeholder="Escribe tu consulta aquí..." minlength="0" maxlength="750"></textarea>
            </div>

            <div class="confirmacionForm">
                <input type="checkbox" id="confirmacion" name="confirmacion" required
                autocapitalize="on" autocomplete="off">
                <p>Acepto la <a href="?page=privacidad">política de privacidad</a> del Centro Veterinario Clarity Pet.</p>
            </div>

            <div class="enviar-div">
                <input type="submit" id="submit" class="enviar" name="enviar" value="Enviar"
                title="Enviar">
            </div>
            
        </form>
    </div>
</div>