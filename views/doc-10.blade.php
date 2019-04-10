@extends('tpl-4')


@section('main')

    @include('partials.breadcrumb')

    <section class="container">
        <div class="row">
            <div class="col-12 mt-4 mb-5">
                <h1 class="title--1">{{ $modx->documentObject['longtitle'] }}</h1>
                <p class="text--1">{{ $modx->documentObject['description'] }}</p>
                <div class="red--underline"></div>

                {!!  $modx->documentObject['content'] !!}



            </div>
        </div>
    </section>

    <section class="masterskaya container">
        <div class="row">
            <div class="col-12 col-md-8">
                <img src="theme/assets/rediz/img/masterskaya/img-1.png" alt="">
            </div>
            <div class="col-12 col-md-4">
                <h3 class="title--3">Полноценное производство</h3>
                <p>В настоящее время наша мебельная мастерская представляет собой полноценное производство, позволяющее создавать предметы интерьера любой сложности. Для производства мебели мы используем плиты из натуральной древесины, высококачественные мдф и дсп класса Е1, безопасные и стойкие лакокрасочные покрытия, а также шпон ценных пород дерева. Все зависит от ваших пожеланий, бюджета проекта и стиля интерьера. Все используемые материалы от ведущих европейских производителей, таких как: EGGER, Pfleiderer, Sayerlack и др. Наши мастера изготовят мебель по вашим эскизам или по фото, понравившейся вам продукции.</p>
            </div>
        </div>

        <h3 class="title--3">Наши возможности</h3>
        <div class="slick-col-3">
            <div><img src="theme/assets/rediz/img/masterskaya/img-2.jpg" alt=""></div>
            <div><img src="theme/assets/rediz/img/masterskaya/img-3.jpg" alt=""></div>
            <div><img src="theme/assets/rediz/img/masterskaya/img-4.jpg" alt=""></div>
            <div><img src="theme/assets/rediz/img/masterskaya/img-2.jpg" alt=""></div>
            <div><img src="theme/assets/rediz/img/masterskaya/img-3.jpg" alt=""></div>
            <div><img src="theme/assets/rediz/img/masterskaya/img-4.jpg" alt=""></div>
        </div>
    </section>

@endsection

@section('form')
    @include('partials.universal_form', [
    'title' => 'Напишите нам',
    'description' => 'Задавайте любые вопросы, мы с удовольствием Вам поможем'
    ])
@endsection