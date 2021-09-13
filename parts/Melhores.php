<!-- script CAROUSEL SLICK -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">

<!-- MELHORES FILMES -->
<h5 class="txt-title">MELHORES FILMES</h5>

<!-- slide items -->
<div class="autoplay">

    <!-- FILME -->
    <div class="film flex">
        <!-- TITULO -->
        <h3 class="film-title">INVOCAÇÃO DO MAL</h3>
        <!-- CAPA -->
        <div class="gradient shadow"></div>
        <img class="capa" src="./img/capas/invocacaodomal.jpg">
        <!-- NOTA -->
        <div class="nota flex">
            <span class="film-rate">7/10</span>
            <img class="star" src="./img/star.png">
        </div>
    </div>


    <!-- FILME -->
    <div class="film flex">
        <!-- TITULO -->
        <h3 class="film-title">A FREIRA</h3>
        <!-- CAPA -->
        <div class="gradient shadow"></div>
        <img class="capa" src="./img/capas/afreira.jpg">
        <!-- NOTA -->
        <div class="nota flex">
            <span class="film-rate">4.5/10</span>
            <img class="star" src="./img/star.png">
        </div>
    </div>


    <!-- FILME -->
    <div class="film flex">
        <!-- TITULO -->
        <h3 class="film-title">SOBRENATURAL</h3>
        <!-- CAPA -->
        <div class="gradient shadow"></div>
        <img class="capa" src="./img/capas/sobrenatural.jpg">
        <!-- NOTA -->
        <div class="nota flex">
            <span class="film-rate">6/10</span>
            <img class="star" src="./img/star.png">
        </div>
    </div>

</div>

<!-- ------------------------------------------------------------------------ -->
<!-- PIORES FILMES -->
<h5 class="txt-title">PIORES FILMES</h5>

<!-- slide items -->
<div class="autoplay2">

    <!-- FILME -->
    <div class="film flex">
        <!-- TITULO -->
        <h3 class="film-title">O SEGREDO DE NORA</h3>
        <!-- CAPA -->
        <div class="gradient shadow"></div>
        <img class="capa" src="./img/capas/osegredodenora.jpg">
        <!-- NOTA -->
        <div class="nota flex">
            <span class="film-rate">7/10</span>
            <img class="star" src="./img/star.png">
        </div>
    </div>


    <!-- FILME -->
    <div class="film flex">
        <!-- TITULO -->
        <h3 class="film-title">O POÇO</h3>
        <!-- CAPA -->
        <div class="gradient shadow"></div>
        <img class="capa" src="./img/capas/opoco.jpg">
        <!-- NOTA -->
        <div class="nota flex">
            <span class="film-rate">0.5/10</span>
            <img class="star" src="./img/star.png">
        </div>
    </div>


    <!-- FILME -->
    <div class="film flex">
        <!-- TITULO -->
        <h3 class="film-title">CARGA EXPLOSIVA</h3>
        <!-- CAPA -->
        <div class="gradient shadow"></div>
        <img class="capa" src="./img/capas/cargaexplosiva.jpg">
        <!-- NOTA -->
        <div class="nota flex">
            <span class="film-rate">6/10</span>
            <img class="star" src="./img/star.png">
        </div>
    </div>

</div>

<script>
$('.autoplay').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
});

$('.autoplay2').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
});
</script>