@extends('public.layout.index')

@section('conteudo')
    <!-- features list section -->
    <div class="list-section pt-80 pb-80">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="content">
                            <h3>Free Shipping</h3>
                            <p>When order over $75</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="content">
                            <h3>24/7 Support</h3>
                            <p>Get support all day</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="list-box d-flex justify-content-start align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <div class="content">
                            <h3>Refund</h3>
                            <p>Get refund within 3 days!</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end features list section -->

    <!-- product section -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Nossos</span> Serviços</h3>
                        <p>Lider em soluções para comércio, agricultura e agropecuária </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img
                                    src="assets/img/agriculture-adpp-angola-900x550-1-770x471-1.jpg
							" alt=""
                                    style="height: 280px;"></a>
                        </div>
                        <h3>Agricultura</h3>
                        <p class="product-price"><span>serviços</span> 85$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i>Saber mais</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="assets/img/foto3-1240x827.jpg" height="280px"
                                    alt=""></a>
                        </div>
                        <h3>Estação de serviço</h3>
                        <p class="product-price"><span>Serviços</span> 70$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Saber mais</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img
                                    src="assets/img/mesa_de_reuniao_escritorio_4_lugares_1_60m_x_80cm_tampo_30mm_2263_1_e8f68ce07e148e0ec476c0097749b37b.webp"
                                    alt="" style="height: 280px;"></a>
                        </div>
                        <h3>Mesa de reunião</h3>
                        <p class="product-price"><span>comercio</span> 35$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i>Adiciona ao carrinho</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product section -->

    <!-- cart banner section -->
    <section class="cart-banner pt-100 pb-100">
        <div class="container">
            <div class="row clearfix">
                <!--Image Column-->
                <div class="image-column col-lg-6">
                    <div class="image">
                        <div class="price-box">
                            <div class="inner-price">
                                <span class="price">
                                    <strong>30%</strong> <br> off per kg
                                </span>
                            </div>
                        </div>
                        <img src="assets/img/gerente-negro-carismatico-tendo-conferencia-de-negocios-usando-laptop_116547-17790 (1).avif"
                            alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
                    <h3><span class="orange-text">BOM </span> PERFIL</h3>
                    <h4>pORQUE NOS ESCOLHER</h4>
                    <div class="text">Lider em soluções para comércio, agricultura e agropecuaria
                        com foco inabalavel na inovação e na sustentabilidade. proporcionamos serviços que levam seu negócio
                        a novos patamares.
                        Escolha Bom Perfil e colha os melhores resultados.
                    </div>
                    <!--Countdown Timer-->
                    <div class="time-counter">
                        <div class="time-countdown clearfix" data-countdown="2020/2/01">
                            <div class="counter-column">
                                <div class="inner"><span class="count">00</span>Dia</div>
                            </div>
                            <div class="counter-column">
                                <div class="inner"><span class="count">00</span>Hora</div>
                            </div>
                            <div class="counter-column">
                                <div class="inner"><span class="count">00</span>Minuto</div>
                            </div>
                            <div class="counter-column">
                                <div class="inner"><span class="count">00</span>Segundo</div>
                            </div>
                        </div>
                    </div>
                    <a href="cart.html" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Adicionar ao carrinho</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

    <!-- testimonail-section -->
    <div class="testimonail-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="testimonial-sliders">
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="assets/img/images.jpeg" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Francisco Paulo <span>propetário da loja</span></h3>
                                <p class="testimonial-body">
                                    " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto beatae
                                    vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem accusantium "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="assets/img/images.png" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>David Niph <span>Local shop owner</span></h3>
                                <p class="testimonial-body">
                                    " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto beatae
                                    vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem accusantium "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="assets/img/images.jpeg" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Jacob Sikim <span>Local shop owner</span></h3>
                                <p class="testimonial-body">
                                    " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto beatae
                                    vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem accusantium "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end testimonail-section -->

    <!-- advertisement section -->
    <div class="abt-section mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="abt-bg">
                        <a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ" class="video-play-btn popup-youtube"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="abt-text">
                        <p class="top-sub">Desde o ano 2022</p>
                        <h2>Nossos <span class="orange-text">Serviços</span></h2>
                        <p>Na Bom Perfil, unimos tradição e tecnologia para oferecer o melhor em comercio, agricultura e
                            agropecuaria.</p>
                        <p>Nossos Serviços são projectadas para maximizar, a eficiência e o retorno dos seus investimentos,
                            com uma estação de serviço de qualidade estamos prontos para todas as suas
                            necessidades. Escolha Bom Perfil e veja a diferença. </p>
                        <a href="about.html" class="boxed-btn mt-4">Saber mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end advertisement section -->

    <!-- shop banner -->
    <!-- <section class="shop-banner">
     <div class="container">
      <h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
      <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
      <a href="shop.html" class="cart-btn btn-lg">Shop Now</a>
     </div>
    </section> -->
    <!-- end shop banner -->

    <!-- latest news -->
    <div class="latest-news pt-150 pb-150">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Nossas</span> atividades</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                            beatae optio.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <!-- 	<a href="single-news.html"><div class=""></div></a> -->
                        <img src="agropecuaria.jpeg" style="height: 180px;" alt="">
                        <div class="news-text-box">
                            <h3><a href="single-news.html">Agropecuaria .</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 Dezembro, 2024</span>
                            </p>
                            <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                Praesent vitae mattis nunc, egestas viverra eros.</p>
                            <a href="single-news.html" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <!-- <a href="single-news.html"><div class="latest-news-bg news-bg-2"></div></a> -->
                        <img src="frango.jpeg" alt="">
                        <div class="news-text-box">
                            <h3><a href="single-news.html">Produtos alimentar.</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 Dezembro, 2024</span>
                            </p>
                            <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                Praesent vitae mattis nunc, egestas viverra eros.</p>
                            <a href="single-news.html" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-latest-news">
                        <!-- <a href="single-news.html"><div class="latest-news-bg news-bg-3"></div></a> -->
                        <img src="carros.jpeg" alt="" srcset="">
                        <div class="news-text-box">
                            <h3><a href="single-news.html">Estação de serviço.</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                            </p>
                            <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                Praesent vitae mattis nunc, egestas viverra eros.</p>
                            <a href="single-news.html" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="news.html" class="boxed-btn">More News</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end latest news -->
@endsection
