        
        <?php wp_footer(  ); ?>

        <?php if ( is_home() || is_front_page() )  : ?>
            
        <?php else : ?>
            <footer>
                <div class="container">
                    <div class="container-top">
                        <div class="content-left">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/brand.png" alt="DH Corp">
                            <p>DH CORP se ha dedicado a estudiar, entender y gestionar el comportamiento de los equipos de trabajo, buscando impulsar ORGANIZACIONES FELICES y PRODUCTIVAS. Nos especializamos en la identificación de las variables clave de nuestra cultura y su psicología, permitiéndonos ahora una gestión óptima de las personas dentro de las organizaciones.</p>
                            <div>
                                <span class="footer-title">Síguenos</span>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-google-plus-g"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="content-middle">
                            <p class="footer-title">Enlaces</p>
                            <ul>
                                <li><a href="<?php echo get_site_url();?>/">Inicio</a></li>
                                <li><a href="<?php echo get_site_url();?>/quienes-somos">Quiénes somos</a></li>
                                <li><a href="<?php echo get_site_url();?>/servicios">Servicios</a></li>
                                <!-- <li><a href="https://medium.com/dh-corp-test">Blog</a></li>-->
                                <li><a href="<?php echo get_site_url();?>/contacto">Contacto</a></li> 
                            </ul>
                        </div>
                        <div class="content-right">
                            <p class="footer-title">Contáctanos</p>
                            <div class="contact">
                                <i class="fas fa-mobile-alt"></i>
                                <span>(511) 997-332-667</span>
                            </div>
                            <div class="contact">
                                <i class="far fa-envelope"></i>
                                <span>hansgutierrez@dh-facilitadores.org</span>
                            </div>
                            <!-- <h5>Hoja Informativa</h5>
                            <div class="form-group">
                                <input type="email" placeholder="Tu email">
                                <button>Enviar</button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </footer>
        <?php endif;  ?>
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/script/menu.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/script/slider.js"></script>

