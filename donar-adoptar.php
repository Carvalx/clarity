<div class="divisor-seccion">
    <p>~~~~~~~</p><img src="img/rodolfo.png" title="Rodolfo" alt="No image" class="icono-seccion"><p>~~~~~~~</p>
</div>

<div class="donacion">
    <h2>Has donación de comida</h2>
    <div>
        <p>Erradiquemos el hambre de los animales abandonados: con tu ayuda, podemos darles una vida digna y llena de amor. ¡Únete a nuestra causa y haz la diferencia!

        El hambre en los animales abandonados en España se debe al abandono, la insuficiencia de recursos en refugios, la falta de conciencia sobre el bienestar animal y la regulación inadecuada. Donar mejorar significativamente la vida de los animales abandonados, garantizando su nutrición y cuidado adecuado.
        </p>
        <img src="img/donar.jpg" alt="No image" title="Perritos abandonados">
    </div>
    
</div>

<div class="divisor-seccion">
    <p>~~~~~~~</p><img src="img/pedrito.png" title="Pedrito" alt="No image" class="pedrito"><p>~~~~~~~</p>
</div>

<div class="adoptar">
    <h2>Adopta un compañero</h2>
    <div>
        <img src="img/adoptar.jpg" alt="No image" title="Seré tu gran amigo, adoptame por favor!">
        <p>Adoptar un animal es un acto de amor que cambia vidas. Al abrir tu hogar a una mascota abandonada, le das una segunda oportunidad para vivir feliz y amado, mientras ayudas a reducir la sobrepoblación en los refugios.
        
        Adoptar no solo trae un compañero fiel y cariñoso a tu vida, sino que también llena tu hogar de alegría y gratitud. Cada vez que miras esos ojos llenos de amor, sabes que has hecho algo maravilloso al darles el hogar y la felicidad que siempre merecieron.</p>
    </div>
</div>

<div class="background-formulario">
    <div class="formulario-texto">
        <div class="titulo-formulario">
            <h2>¿Te interesa donar o adoptar?,<br> Contáctanos y te daremos información!</h2>
            <p>Con gusto te ayudaremos en brindarte asesoramiento. Apreciaremos mucho tus acciones. Gracias.</p>
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