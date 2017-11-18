@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row color-bg">
            <div class="col-md-10 col-md-offset-1">
                <h1>Ifjúsági Erkölcstan</h1>

                <nav role="navigation" class="table-of-contents">
                    <h3>Tartalomjegyzék:</h3>
                    <ol class="bev">
                        <li><a href="#bev">Irányelvek lelkipásztorok, hitoktatók, ifjúsági csoportvezetők számára</a></li>
                    </ol>
                    <ol>
                        <li><a href="#f01">Keresztény erkölcsi alapmegfontolások</a></li>
                        <li><a href="#f02">Kapcsolatom a valósággal</a></li>
                        <li><a href="#f03">Az Istenről való beszéd – gondolkodás, Isten a közösség légkörében</a></li>
                        <li><a href="#f04">Az Úr napja és az én szentmisém – az Újszövetség személyes áldozata</a></li>
                        <li><a href="#f05">A szülők</a></li>
                        <li><a href="#f06">Az élet védelme</a></li>
                        <li><a href="#f07">Nemiség, szemérem</a></li>
                        <li><a href="#f08">Szexualitás és személyiség</a></li>
                        <li><a href="#f09">Szexuális erkölcs és életforma</a></li>
                        <li><a href="#f10">Bűnök és erények a szexualitás terén</a></li>
                        <li><a href="#f11">Válaszút előtt - élethivatás</a></li>
                        <li><a href="#f12">Ádvent - Új esély - TTT</a></li>
                        <li><a href="#f13">A megtestesült Isten követése</a></li>
                        <li><a href="#f14">A tulajdon tisztelete</a></li>
                        <li><a href="#f15">A becsület</a></li>
                        <li><a href="#f16">Házasság, eskü, hűség</a></li>
                        <li><a href="#f17">Irigység, ellenségkép</a></li>
                        <li><a href="#f18">Élet Krisztusban, élet az egyházban</a></li>
                        <li><a href="#f19">Hivatás választás</a></li>
                        <li><a href="#f20">Együttélés a szentségekkel</a></li>
                        <li><a href="#f21">Lelki élet - Avasd lelkes eleven élményévé</a></li>
                        <li><a href="#f22">Az elmélkedés</a></li>
                        <li><a href="#f23">Isten, mások, önmagam</a></li>
                        <li><a href="#f24">Felelősség</a></li>
                        <li><a href="#f25">Nagyböjt</a></li>
                        <li><a href="#f26">Nagyheti liturgia</a></li>
                        <li><a href="#f27">Húsvét</a></li>
                        <li><a href="#f28">A fontossági sorrend</a></li>
                        <li><a href="#f29">Isten Igéje</a></li>
                        <li><a href="#f30">A krisztusi életstílus</a></li>
                        <li><a href="#f31">Tanúság, misszió, lélekmentés</a></li>
                        <li><a href="#f32">A pénz</a></li>
                    </ol>
                </nav>

                <h2 id="bev">Irányelvek lelkipásztorok, hitoktatók, ifjúsági csoportvezetők számára<a class="change_section" href="#f01">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a></h2>

                @include('erkolcstan.bev')

                <h2 id="f01">Keresztény erkölcsi alapmegfontolások<a class="change_section" href="#bev"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a><a class="change_section" href="#f02">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a></h2>

                @include('erkolcstan.01')

                <h2 id="f02">Kapcsolatom a valósággal<a class="change_section" href="#f01"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a><a class="change_section" href="#f03">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a></h2>

                @include('erkolcstan.02')

                <h2 id="f03">Az Istenről való beszéd – gondolkodás, Isten a közösség légkörében<a class="change_section" href="#f02"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a><a class="change_section" href="#f04">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a></h2>

                @include('erkolcstan.03')

                <h2 id="f04">Az Úr napja és az én szentmisém – az Újszövetség személyes áldozata<a class="change_section" href="#f03"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a><a class="change_section" href="#f05">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a></h2>

                @include('erkolcstan.04')
                <h2 id="f05">A szülők
                    <a class="change_section" href="#f04"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f06">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.05')
                <h2 id="f06">Az élet védelme
                    <a class="change_section" href="#f05"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f07">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.06')
                <h2 id="f07">Nemiség, szemérem
                    <a class="change_section" href="#f06"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f08">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.07')
                <h2 id="f08">Szexualitás és személyiség
                    <a class="change_section" href="#f07"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f09">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.08')
                <h2 id="f09">Szexuális erkölcs és életforma
                    <a class="change_section" href="#f08"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f10">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.09')
                <h2 id="f10">Bűnök és erények a szexualitás terén
                    <a class="change_section" href="#f09"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f11">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.10')
                <h2 id="f11">Válaszút előtt - élethivatás
                    <a class="change_section" href="#f10"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f12">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.11')
                <h2 id="f12">Ádvent - Új esély - TTT
                    <a class="change_section" href="#f11"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f13">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.12')
                <h2 id="f13">A megtestesült Isten követése
                    <a class="change_section" href="#f12"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f14">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.13')
                <h2 id="f14">A tulajdon tisztelete
                    <a class="change_section" href="#f13"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f15">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.14')
                <h2 id="f15">A becsület
                    <a class="change_section" href="#f14"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f16">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.15')
                <h2 id="f16">Házasság, eskü, hűség
                    <a class="change_section" href="#f15"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f17">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.16')
                <h2 id="f17">Irigység, ellenségkép
                    <a class="change_section" href="#f16"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f18">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.17')
                <h2 id="f18">Élet Krisztusban, élet az egyházban
                    <a class="change_section" href="#f17"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f19">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.18')
                <h2 id="f19">Hivatás választás
                    <a class="change_section" href="#f18"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f20">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.19')
                <h2 id="f20">Együttélés a szentségekkel
                    <a class="change_section" href="#f19"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f21">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.20')
                <h2 id="f21">Lelki élet - Avasd lelkes eleven élményévé
                    <a class="change_section" href="#f20"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f22">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.21')
                <h2 id="f22">Az elmélkedés
                    <a class="change_section" href="#f21"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f23">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.22')
                <h2 id="f23">Isten, mások, önmagam
                    <a class="change_section" href="#f22"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f24">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.23')
                <h2 id="f24">Felelősség
                    <a class="change_section" href="#f23"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f25">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.24')
                <h2 id="f25">Nagyböjt
                    <a class="change_section" href="#f24"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f26">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.25')
                <h2 id="f26">Nagyheti liturgia
                    <a class="change_section" href="#f25"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f27">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.26')
                <h2 id="f27">Húsvét
                    <a class="change_section" href="#f26"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f28">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.27')
                <h2 id="f28">A fontossági sorrend
                    <a class="change_section" href="#f27"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f29">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.28')
                <h2 id="f29">Isten Igéje
                    <a class="change_section" href="#f28"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f30">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.29')
                <h2 id="f30">A krisztusi életstílus
                    <a class="change_section" href="#f29"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f31">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.30')
                <h2 id="f31">Tanúság, misszió, lélekmentés
                    <a class="change_section" href="#f30"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                    <a class="change_section" href="#f32">következő fejezet <span class="glyphicon glyphicon-step-forward"></span></a>
                </h2>
                @include('erkolcstan.31')
                <h2 id="f32">A pénz
                    <a class="change_section" href="#f31"><span class="glyphicon glyphicon-step-backward"></span> előző fejezet</a>
                </h2>
                @include('erkolcstan.32')
            </div>
        </div>
    </div>
@endsection
