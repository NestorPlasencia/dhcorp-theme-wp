
<form method="post" action="<?php echo admin_url( 'admin-post.php' ) ?>">
    <div class="form-columns">
        <div>
            <label>Nombre*</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label>Celular*</label>
            <input type="number" name="cellphone" id="cellphone" required>
        </div>
        <div>
            <label>Email*</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label>Tipo de cita*</label>
            <select name="cita" id="cita">
                <option value="virtual">Virtual</option>
                <option value="presencial">Presencial</option>
            </select>
        </div>
    </div>
    <div class="form-textarea">
        <label>Mensaje*</label>
        <textarea rows="2" name="message" id="message" required></textarea>
    </div>
    <div class="text-center">
        <input type="hidden" name="action" value="process_form">
        <button>Enviar mensaje</button>
        <p>¿Quieres conversar con uno de nuestros asesores de servicio? Llama al (01) 648 6037</p>
    </div>
</form>
