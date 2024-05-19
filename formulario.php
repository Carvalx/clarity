<div class="background-formulario">
    <div class="formulario-texto">
        <div class="titulo-formulario">
            <h2>¿Tienes alguna duda?, Contáctanos!</h2>
            <p>Con gusto te ayudaremos a resolver tus dudas, y brindarte la confianza para tí y a tu mascota.</p>
        </div>

        <form action="">
            <div class="formulario">
                <div class="item-formulario">
                    <label for="nombreForm">Nombre*:</label>
                    <input type="text" id="nombreForm" placeholder="Nombre..." required
                    title="Nombre">
                </div>

                <div class="item-formulario">
                    <label for="apellidoForm">Apellido:</label>
                    <input type="text" id="apellidoForm" placeholder="Apellido..." data-opcional
                    title="Apellido">
                </div>

                <div class="item-formulario">
                    <label for="correoForm">Correo*:</label>
                    <input type="email" id="correoForm" placeholder="Correo..." required
                    title="Correo">
                </div>

                <div class="item-formulario">
                    <label for="telForm">Teléfono:</label>
                    <input type="tel" id="telForm" placeholder="Teléfono..." data-opcional
                    title="Teléfono">
                </div>
            </div>

            <div class="textarea">
                <textarea name="textarea" id="textArea" placeholder="Escribe tu consulta aquí..." minlength="0" maxlength="750"></textarea>
            </div>

            <div class="confirmacionForm">
                <input type="checkbox" id="confirmacion" required>
                <p>Acepto la <a href="?page=privacidad">política de privacidad</a> del Centro Veterinario Clarity Pet.</p>
            </div>

            <div class="enviar-div">
                <input type="submit" id="submit" class="enviar" name="enviar" value="Enviar"
                title="Enviar">
            </div>
            
        </form>
    </div>
</div>