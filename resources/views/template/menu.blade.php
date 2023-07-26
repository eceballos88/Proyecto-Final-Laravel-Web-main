<script>
    const myCarouselElement = document.querySelector('#myCarousel')

    const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 2000,
        touch: false
    })
</script>

<br><br>

<!--	Tablas  -->

<section class="section section-sm">
    <div class="container">
        <h3>Tablas</h3>
        <div class="row row-30">
            <div class="col-sm-6 col-lg-4">
                <article class="box-icon-classic">
                    <div
                        class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                        <div class="unit-left">
                            <div class="box-icon-classic-icon fl-bigmug-line-equalization3"></div>
                        </div>
                        <div class="unit-body">
                            <h5 class="box-icon-classic-title"><a href="{!! asset('Coche') !!}">Coches</a></h5>
                            <p class="box-icon-classic-text">Ver lista de coches</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <article class="box-icon-classic">
                    <div
                        class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                        <div class="unit-left">
                            <div class="box-icon-classic-icon fl-bigmug-line-circular220"></div>
                        </div>
                        <div class="unit-body">
                            <h5 class="box-icon-classic-title"><a href="{!! asset('mecanico') !!}">Mecanicos</a></h5>
                            <p class="box-icon-classic-text">Ver lista de mecanicos</p>
                        </div>  
                    </div>
                </article>
            </div>
            
            <div class="col-sm-6 col-lg-4">
                <article class="box-icon-classic">
                    <div
                        class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                        <div class="unit-left">
                            <div class="box-icon-classic-icon fl-bigmug-line-circular220"></div>
                        </div>
                        <div class="unit-body">
                            <h5 class="box-icon-classic-title"><a href="{!! asset('venta') !!}">Ventas</a></h5>
                            <p class="box-icon-classic-text">Ver lista de ventas</p>
                        </div>  
                    </div>
                </article>
            </div>
            
        </div>
    </div>
</section>
<!-- Page Footer-->
