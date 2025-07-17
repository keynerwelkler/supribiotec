  <div class="contact-banner-touch section-pt">
                <div class="container">
                    <div class="row row-mtm flex-lg-row-reverse align-items-lg-center">
                        <div class="col-12 col-lg-7 col-xl-8" data-animate="animate__fadeIn">
                            <!-- contact-banner start -->
                            <div class="contact-banner">
                                <div class="banner-hover">
                                    <span class="d-block banner-img br-hidden">
                                        <img src="recepcao.webp" class="w-100 img-fluid" alt="contact-1">
                                    </span>
                                </div>
                            </div>
                            <!-- contact-banner end -->
                        </div>
                        <div class="col-12 col-lg-5 col-xl-4">
                            <!-- contact-touch start -->
                            <div class="contact-touch">
    <div class="row row-mtm30">

        <!-- Endereço -->
        <div class="col-12" data-animate="animate__fadeIn">
            <div class="contact-touch-content d-flex flex-wrap">
                <span class="contact-touch-icon width-88 height-88 dominant-color icon-24 d-flex align-items-center justify-content-center extra-bg rounded-circle">
                    <i class="ri-map-pin-range-line d-block lh-1"></i>
                </span>
                <div class="contact-touch-info width-calc-88 psl-15 psl-sm-30">
                    <h6 class="font-18 meb-8">Endereço</h6>
                    <div class="ul-mtm20">
                        <span>Edifício Sagitário - SEPN, Via W3 Norte, 506 - Bloco D</span>
                        <span>Asa Norte, Brasília - DF, 70740-504</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Telefone / WhatsApp -->
        <div class="col-12" data-animate="animate__fadeIn">
            <div class="contact-touch-content d-flex flex-wrap">
                <span class="contact-touch-icon width-88 height-88 dominant-color icon-24 d-flex align-items-center justify-content-center extra-bg rounded-circle">
                    <i class="ri-phone-line d-block lh-1"></i>
                </span>
                <div class="contact-touch-info width-calc-88 psl-15 psl-sm-30">
                    <h6 class="font-18 meb-8">Telefone / WhatsApp</h6>
                    <div class="ul-mtm20">
                        <span><a href="tel:+556130373870" class="d-inline-block body-dominant-color">(61) 3037-3870</a></span>
                        <span><a href="https://wa.me/556192345665" class="d-inline-block body-dominant-color" target="_blank">(61) 9 2345-6665 (WhatsApp)</a></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Email -->
        <div class="col-12" data-animate="animate__fadeIn">
            <div class="contact-touch-content d-flex flex-wrap">
                <span class="contact-touch-icon width-88 height-88 dominant-color icon-24 d-flex align-items-center justify-content-center extra-bg rounded-circle">
                    <i class="ri-mail-line d-block lh-1"></i>
                </span>
                <div class="contact-touch-info width-calc-88 psl-15 psl-sm-30">
                    <h6 class="font-18 meb-8">E-mail</h6>
                    <div class="ul-mtm20">
                        <span><a href="mailto:comercial@supribiotec.com.br" class="d-inline-block body-dominant-color">comercial@supribiotec.com.br</a></span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

                            <!-- contact-touch end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact-banner-touch end -->
            <!-- contact-form start -->
            <section class="contact-form section-ptb">
                <div class="container">
                <div class="section-capture text-center" data-animate="animate__fadeIn">
    <div class="section-title">
        <h2 class="section-heading">Entre em contato</h2>
    </div>
</div>

<form onsubmit="sendToWhatsApp(event)" class="mt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="mb-3" data-animate="animate__fadeIn">
                <label for="name" class="field-label mb-2">Nome</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Seu nome" required>
            </div>
            <div class="mb-3" data-animate="animate__fadeIn">
                <label for="message" class="field-label mb-2">Mensagem</label>
                <textarea id="message" name="message" class="form-control" rows="5" placeholder="Digite sua mensagem" required></textarea>
            </div>
            <div class="text-center mt-4" data-animate="animate__fadeIn">
                <button type="submit" class="btn btn-primary px-5 py-2">📲 Enviar para WhatsApp</button>
            </div>
        </div>
    </div>
</form>

<script>
function sendToWhatsApp(e) {
    e.preventDefault();

    const name = document.getElementById("name").value.trim();
    const message = document.getElementById("message").value.trim();

    if (name && message) {
        const texto = `Olá, meu nome é ${name}.%0A${message}`;
        const telefone = "556192345665";
        const url = `https://wa.me/${telefone}?text=${texto}`;
        window.open(url, '_blank');
    } else {
        alert("Por favor, preencha todos os campos.");
    }
}
</script>


                </div>

                <br><br><br><br>
                <div class="contact-map contact-map-info" data-animate="animate__fadeIn">
                <div class="container">
                <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.6460789725315!2d-47.89146792408079!3d-15.76985122235284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3a4e59a3a5cb%3A0xfcf2ede3c3674620!2sEdificio%20Sagit%C3%A1rius!5e0!3m2!1spt-BR!2sbr!4v1742867593718!5m2!1spt-BR!2sbr" 
    class="d-block w-100 br-hidden" 
    height="400" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade" 
    title="Localização Supri Biotec">
</iframe>
                </div>
                </div></div></div>