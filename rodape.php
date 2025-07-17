  <!-- footer start -->
  <section class="footer-blog section-ptb extra-bg">
    <div class="container">
        <div class="section-capture text-center">
            <span class="d-inline-block sub-title dominant-color meb-9 meb-xl-17 heading-weight" data-animate="animate__fadeIn">Blog da Supri Biotec</span>
            <div class="section-title" data-animate="animate__fadeIn">
                <h2 class="section-heading">Últimos Artigos</h2>
            </div>
        </div>
        <div class="row row-mtm" data-animate="animate__fadeIn">
            <?php
            $rss = simplexml_load_file('https://supribiotec.com.br/blog/feed/');
            $max = 3;
            $count = 0;
            if ($rss) {
                foreach ($rss->channel->item as $item) {
                    if ($count >= $max) break;
                    echo '<div class="col-12 col-md-4">';
                    echo '<div class="single-blog-post body-bg p-3 border-radius h-100">';
                    echo '<h5 class="heading-color font-18 meb-15"><a href="' . $item->link . '" target="_blank">' . htmlspecialchars($item->title) . '</a></h5>';
                    echo '<p class="font-14">' . substr(strip_tags($item->description), 0, 100) . '...</p>';
                    echo '<a href="' . $item->link . '" class="dominant-link font-14 mt-2 d-inline-block" target="_blank">Leia mais</a>';
                    echo '</div>';
                    echo '</div>';
                    $count++;
                }
            } else {
                echo '<div class="col-12 text-center">Não foi possível carregar os artigos no momento.</div>';
            }
            ?>
        </div>
    </div>
</section>
            <!-- footer-insta end -->
            <!-- footer-top start -->
            <div class="footer-area section-ptb">
                <div class="container">
                    <div class="row row-mtm100">
                    <div class="col-12 col-md-12 col-lg-4">
    <div class="row">
        <div class="col-12 col-xxl-10">
            <div class="footer-info text-center text-lg-start">
                <div class="footer-theme-logo">
                    <a href="index.html" class="d-block theme-logo">
                        <img src="assets/image/index2/logo2.png" class="width-88 width-xl-144 img-fluid" alt="Supri Biotec">
                    </a>
                </div>
                <div class="footer-company-detail mst-23">
                    <p class="font-16">
                        A Supri Biotec é referência nacional na distribuição de produtos para laboratórios. Atuamos com qualidade, confiança e compromisso com nossos clientes em todo o Brasil.
                    </p>
                </div>
                <div class="footer-social mst-23">
                    <ul class="social-ul ul-mt30 justify-content-center justify-content-lg-start">
                        <li class="social-li">
                            <a href="https://facebook.com/supribiotec" target="_blank" class="d-block body-dominant-color icon-16" aria-label="Facebook"><i class="ri-facebook-fill d-block lh-1"></i></a>
                        </li>
                        <li class="social-li">
                            <a href="https://instagram.com/supribiotec" target="_blank" class="d-block body-dominant-color icon-16" aria-label="Instagram"><i class="ri-instagram-fill d-block lh-1"></i></a>
                        </li>
                        <li class="social-li">
                            <a href="https://www.pinterest.com/supribiotec" target="_blank" class="d-block body-dominant-color icon-16" aria-label="Pinterest"><i class="ri-pinterest-fill d-block lh-1"></i></a>
                        </li>
                        <li class="social-li">
                            <a href="https://twitter.com/supribiotec" target="_blank" class="d-block body-dominant-color icon-16" aria-label="Twitter"><i class="ri-twitter-fill d-block lh-1"></i></a>
                        </li>
                        <li class="social-li">
                            <a href="https://youtube.com/@supribiotec" target="_blank" class="d-block body-dominant-color icon-16" aria-label="YouTube"><i class="ri-youtube-fill d-block lh-1"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 col-md-12 col-lg-8 footer-list">
    <div class="row">
        <div class="col-12 col-md-4 ft-list">
            <div class="footer-menu">
                <h6 class="ft-title dominant-color font-18 text-uppercase">Menu</h6>
                <div class="ft-link">
                    <ul class="ftlink-ul ul-ft pst-16">
                        <li class="ftlink-li"><a href="?pg=inicio" class="d-inline-block body-dominant-color font-16">Início</a></li>
                        <li class="ftlink-li"><a href="?pg=sobre" class="d-inline-block body-dominant-color font-16">Sobre Nós</a></li>
                        <li class="ftlink-li"><a href="catalogo.pdf" target="_blank" class="d-inline-block body-dominant-color font-16">Catalogo</a></li>
                        <li class="ftlink-li"><a href="/blog" class="d-inline-block body-dominant-color font-16">Blog</a></li>
                        <li class="ftlink-li"><a href="?pg=contato" class="d-inline-block body-dominant-color font-16">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 ft-list">
            <div class="footer-menu">
                <h6 class="ft-title dominant-color font-18 text-uppercase">Marcas</h6>
                <div class="ft-link">
                    <ul class="ftlink-ul ul-ft pst-16">
                        <li class="ftlink-li"><span class="d-inline-block body-dominant-color font-16">Kasvi</span></li>
                        <li class="ftlink-li"><span class="d-inline-block body-dominant-color font-16">Cellco</span></li>
                        <li class="ftlink-li"><span class="d-inline-block body-dominant-color font-16">Alfa Plásticos</span></li>
                        <li class="ftlink-li"><span class="d-inline-block body-dominant-color font-16">SolidSteel</span></li>
                        <li class="ftlink-li"><span class="d-inline-block body-dominant-color font-16">Êxodo Científica</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 ft-list">
            <div class="footer-menu">
                <h6 class="ft-title dominant-color font-18 text-uppercase">Marcas</h6>
                <div class="ft-link">
                    <ul class="ftlink-ul ul-ft pst-16">
                        <li class="ftlink-li"><span class="d-inline-block body-dominant-color font-16">Synth</span></li>
                        <li class="ftlink-li"><span class="d-inline-block body-dominant-color font-16">Química Moderna</span></li>
                        <li class="ftlink-li"><span class="d-inline-block body-dominant-color font-16">J. Prolab</span></li>
                        <li class="ftlink-li"><span class="d-inline-block body-dominant-color font-16">Sensoglass</span></li>
                        <li class="ftlink-li"><span class="d-inline-block body-dominant-color font-16">Laborglas</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

                    </div>
                </div>
            </div>
            <!-- footer-top end -->
            <!-- footer-bottom start -->
            <div class="copyright ptb-15 extra-bg">
                <div class="container">
                    <div class="row align-items-md-center">
                        <div class="col-12 col-md-6 font-16 text-center text-md-start"><a href="http://prowebdesigner.com.br/" target="_blank">Desenvolvido por Agência Pró Webdesigner</a></div>

                    </div>
                </div>
            </div>
            <!-- footer-bottom end -->
        </footer>
        <!-- footer end -->
        <!-- quickview-modal start -->
 
        <!-- quickview-modal end -->
        <!-- mobile-menu start -->
      
        <!-- plugin js -->
        <script src="assets/js/plugin.js"></script>
        <!-- theme js -->
        <script src="assets/js/theme2.js"></script>
    </body>

</html>