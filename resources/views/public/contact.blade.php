@extends('public.layout.index2')

@section('conteudo')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Suporte 24/7</p>
                        <h1>Contacte nos</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- contact form -->
    <div class="contact-from-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="form-title">
                        <h2>Tens Alguma Questão?</h2>
                        <p>Deixe nos as suas sugestões,nós teremos o prazer de lhe responder e satisfazer as suas
                            inquientações! </p>
                    </div>
                    <div id="form_status"></div>
                    <div class="contact-form">
                        <form method="POST" action="{{ route('mensagens.store') }}">
                            @csrf
                            <p>
                                <input type="text" placeholder="Nome" name="nome" id="name">
                                <input type="email" placeholder="Email" name="email" id="email">
                            </p>
                            <p>
                                <input type="tel" placeholder="Telefone" name="telefone" id="phone">
                                <input type="text" placeholder="Objectivo" name="objetivo" id="subject">
                            </p>
                            <p>
                                <textarea name="mensagem" id="message" cols="30" rows="10" placeholder="Messagem"></textarea>
                            </p>

                            <p><input type="submit" value="Submeter"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-form-wrap">
                        <div class="contact-form-box">
                            <h4><i class="fas fa-map"></i>Endereço Da Loja</h4>
                            <p>24/24, Luanda, Municipipo Viana,<br> distrito urbano<br>Estalagem <br>País Angola</p>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="far fa-clock"></i> Hora De Atendimento</h4>
                            <p>SEG- SEXTA-FEIRA: 8 ás 21 <br> SÁB - DOM: 10 ás 20 H </p>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="fas fa-address-book"></i> Contactos</h4>
                            <p>Telefone: 950 850 000/931 620 003 <br> Email: Geral@bomperfil.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact form -->

    <!-- find our location -->
    <!--<div class="find-location blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p> <i class="fas fa-map-marker-alt"></i> Encontre-nos</p>
                </div>
            </div>
        </div>
    </div>-->
    <!-- end find our location -->

    <!-- google map section -->
    <!--<div class="embed-responsive embed-responsive-21by9">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26432.42324808999!2d-118.34398767954286!3d34.09378509738966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf07045279bf%3A0xf67a9a6797bdfae4!2sHollywood%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1576846473265!5m2!1sen!2sbd"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
            class="embed-responsive-item"></iframe>
    </div>-->
    <!-- end google map section -->
@endsection
