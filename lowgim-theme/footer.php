<style>
.icono-facebook:hover {
  color: #007bff;
  transform: scale(1.6);
}
.icono-instagram:hover {
  color: #E4405F;
  transform: scale(1.6);
}
.lista_enlaces ul {
  padding: 0;
  margin: 0;
}
.lista_enlaces ul li {
  display: block;
  margin-bottom: 6px;
  line-height: 1.5;
}
.lista_enlaces a {
  font-size: 10px;
  padding-top: 0px;
  padding-bottom: 0px;
  text-decoration: none;
}
.lista_enlaces a span {
  position: relative;
  display: inline-block;
}
.lista_enlaces a span::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -2px;
  width: 0%;
  height: 2px;
  background-color: #2c8314;
  transition: width 0.3s ease-in-out;
}
.lista_enlaces a:hover span::after {
  width: 100%;
}
footer {
  background:rgb(207, 205, 201);
  padding-bottom: 0px !important;
}
#p-footer {
  color: rgb(126, 125, 125);
}
#copyright {
  background: rgb(34, 34, 34) !important;
}
#copyright p {
  color: white !important;
}
#copyright a {
  color: rgba(247, 247, 247, 0.61) !important;
}
#copyright a:hover {
  color: rgb(255, 255, 255) !important;
}
#p-multiplika {
  font-weight: 500;
}
#a-enlace-multiplika {
  text-decoration: underline;
  display: inline-block;
  transition: transform 0.3s ease, color 0.3s ease;
}
#a-enlace-multiplika:hover {
  color: rgb(248, 242, 242) !important;
  transform: scale(1.1) !important;
}
#copyright a span {
  position: relative;
  display: inline-block;
}
#copyright a span::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -1px;
  width: 0%;
  height: 1px;
  background-color: rgba(247, 247, 247, 0.61);
}
#copyright a:hover span::after {
  width: 100%;
}

</style>


<footer class="footer footer-big mt-5">
    <div class="container">
        <div class="content">
            <div class="row">

                <!--columna 1 logo-->
                <div class="col-md-3 my-auto py-4 d-flex flex-column justify-content-center align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo_vectorizado_fondo_eliminado.png"
                        class="w-100 logo" alt="luxury mediterraean soul catering">


                    <div class="social-line social-line-big-icons" style="padding:0px;">

                        <div class="row d-flex justify-content-center align-items-start">
                            <div class="col-4 col-md-4 d-flex justify-content-center">
                                <a href="mailto:contact@example.com" class="btn btn-dark btn-footer btn-icon btn-outline-default mx-2">
                                    <i class="far fa-envelope" style="font-size:25px"></i>
                                </a>
                                <a href="tel:+60600000000" class="btn btn-dark btn-footer btn-icon btn-outline-default mx-2">
                                    <i class="fas fa-phone" style="font-size:25px"></i>
                                </a>
                                <a href="https://wa.me/60600000000" class="btn btn-dark btn-footer btn-icon btn-outline-default mx-2">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a href="https://www.facebook.com/" class="btn btn-dark btn-footer btn-icon btn-outline-default mx-2">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/" class="btn btn-dark btn-footer btn-icon btn-outline-default mx-2">
                                    <i class="fab fa-instagram"></i>
                                </a>

                            </div>
                        </div>
                    </div>

                <!--columna 2 texto-->
                </div>
                <div class="col-md-6 mb-5 my-auto py-4">
                    <div class="mx-4">
                        <div class="mb-3 text-uppercase text-center"><b>Lowgim 24</b></div>

                        <p id="p-footer">LowGim es tu gimnasio de confianza en Marchena(Sevilla), abierto 24 horas al día, los 365 días del año. Accede a cualquier hora y entrena sin límites en nuestras modernas instalaciones equipadas con zona de cardio, pesas y clases dirigidas. Únete hoy a la comunidad LowGym y mejora tu forma física con libertad, seguridad y a tu propio ritmo.
                        </p>
                    </div>
                </div>

                 <!--columna 3 enlaces-->
                <div class="col-md-3 px-5 my-auto py-4">
                    <div class="lista_enlaces">
                        <div class="mb-3"><b>LINKS</b></div>

                        <ul class="text-left">
                            <li>
                                <a href="<?php echo esc_url(home_url('/instalacion/')); ?>"><span>INSTALACION</span></a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/tarifas/')); ?>"><span>TARIFAS
                                        </span></a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/actividades/')); ?>"><span>ACTIVIDADES</span></a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/blog/')); ?>"><span>BLOG</span></a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/contact-us/')); ?>"><span>CONTACTANOS
                                        Us</span></a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/mi-cuenta/')); ?>"><span>AREA CLIENTE</span></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="copyright d-flex justify-content-center text-center py-3 bg-dark" id="copyright">
        <div class="row justify-content-center px-3">
            <div class="col-auto mx-5">
                <p class="mb-0">
                    <a href="<?php echo esc_url(home_url('/terminos-condiciones/')); ?>"
                        class="text-decoration-none text-secondary" target="_blank">
                        <span>Términos y condiciones</span>
                    </a> |
                    <a href="<?php echo esc_url(home_url('/politica-privacidad/')); ?>"
                        class="text-decoration-none text-secondary" target="_blank">
                        <span>Política de privacidad</span>
                    </a> |
                    <a href="<?php echo esc_url(home_url('/politica-cookies/')); ?>"
                        class="text-decoration-none text-secondary" target="_blank">
                        <span>Política de cookies</span>
                    </a>
                </p>
            </div>
            <div class="col-auto mx-5">
                <p class="mb-0" id="p-multiplika">
                    Copyright &copy;
                    <?php echo date('Y'); ?>
                    Developed by <a href="https://multiplika.es/" id="a-enlace-multiplika"><b>Multiplika</b></a> |
                    Codemartia
                    SL. All rights reserved.
                </p>
            </div>
        </div>
    </div>
    </div>
</footer>


</div>
<!--   Core JS Files   -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/core/bootstrap.min.js"
    type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/nouislider.min.js"
    type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/moment.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/bootstrap-tagsinput.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/bootstrap-selectpicker.js"
    type="text/javascript"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/bootstrap-datetimepicker.js"
    type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/now-ui-kit.js?v=1.3.1"
    type="text/javascript"></script>
<script>
    $(document).ready(function () {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>

<?php wp_footer(); ?>
</body>

</html>