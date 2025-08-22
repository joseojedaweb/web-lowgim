<?php get_header(); ?>

<style>
    .divFooter {}

    .contact-info {
        padding: 20px 0;
    }

    .contact-icon {
        color: black;
        font-size: 24px;
        margin-right: 15px;
        vertical-align: top;
    }

    .form-control {
        border: 1px solid black;
        color: black;
        margin-bottom: 20px;
    }

    .form-check-input {
        background-color: rgb(0, 0, 0);
        border-color: rgb(0, 0, 0);
    }

    .btn-submit {
        background-color: #7FFF00;
        color: #333;
        padding: 8px 30px;
        border: none;
        float: right;
    }

    .promo-badge {
        background-color: #ffbf00;
        color: #333;
        font-weight: bold;
        width: 180px;
        height: 180px;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-size: 24px;
        line-height: 1.2;
        position: relative;
        margin-top: 20px;
    }

    .map-container {
        border: 1px solid #444;
    }

    .small-text {
        font-size: 12px;
        color: #ccc;
    }

    textarea.form-control {
        min-height: 150px;
        border: 1px solid black;
    }

    h1 {
        text-align: right;
        font-size: 2.5rem;
        margin-bottom: 30px;
    }

    .policy-link {
        color: black;
        text-decoration: underline;
    }
</style>
<div class="container">
    <div class="divFooter text-center mt-3">
        <h2 class="title">Contacto</h2>
        <div class="row justify-content-center mt-4">
            <div class="col-12 ">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-info text-left">
                            <p>
                                <i class="fas fa-map-marker-alt contact-icon"></i>
                                calle ejemplo, 6 Marchena, Sevilla
                            </p>
                            <p>
                                <i class="fas fa-phone contact-icon"></i>
                                600 00 00 00
                            </p>
                            <p>
                                <i class="far fa-clock contact-icon"></i>
                                Horario de contacto:<br>
                                De Lunes a Viernes de 09:00 A 22:00<br><br>
                                Horario del gimnasio:<br>
                                De Lunes a Domingo las 24h
                            </p>
                        </div>

                        <div class="map-container">
                            <img src="" alt="Google Map showing the location of Lowgim" class="img-fluid">
                            <div class="bg-white text-dark p-3">
                                <div>Lowgim</div>
                                <div class="text-primary">Ampliar el mapa</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 mt-5">
                        <h2 class="text-center">¿EN QUÉ PODEMOS AYUDARTE?</h2>
                        <?php echo do_shortcode('[contact-form-7 id="000000" title="Formulario de contacto 1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>