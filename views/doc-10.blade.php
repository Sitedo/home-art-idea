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
        <div class="row mb-4">
            <div class="col-12 col-md-8">
                <img src="theme/assets/rediz/img/masterskaya/img-1.png" alt="">
            </div>
            <div class="col-12 col-md-4">
                <h3 class="title--3">Полноценное производство</h3>
                <p>В настоящее время наша мебельная мастерская представляет собой полноценное производство, позволяющее создавать предметы интерьера любой сложности. Для производства мебели мы используем плиты из натуральной древесины, высококачественные мдф и дсп класса Е1, безопасные и стойкие лакокрасочные покрытия, а также шпон ценных пород дерева. Все зависит от ваших пожеланий, бюджета проекта и стиля интерьера. Все используемые материалы от ведущих европейских производителей, таких как: EGGER, Pfleiderer, Sayerlack и др. Наши мастера изготовят мебель по вашим эскизам или по фото, понравившейся вам продукции.</p>
            </div>
        </div>


        @include('partials.slider-col-3', [
                'title' => 'Наши возможности',
                'images' => [
                    'img-1' => 'theme/assets/rediz/img/masterskaya/img-2.jpg',
                    'img-2' => 'theme/assets/rediz/img/masterskaya/img-3.jpg',
                    'img-3' => 'theme/assets/rediz/img/masterskaya/img-4.jpg',
                    'img-4' => 'theme/assets/rediz/img/masterskaya/img-2.jpg',
                    'img-5' => 'theme/assets/rediz/img/masterskaya/img-3.jpg',
                    'img-6' => 'theme/assets/rediz/img/masterskaya/img-4.jpg',
                    ]
                ])

        <h3 class="title--3">Сделано в России</h3>
        <div class="row background--image--center"
             style="background-image: url('theme/assets/rediz/img/masterskaya/img-5.png');">
            <div class="col-12 col-md-6">
                <p>Бытует мнение, что мебель от российских производителей низкого качества и сомнительного дизайна, поэтому люди настороженно относятся к маркировке «сделано в России». Однако, нынешнее экономическое положение поставило российских производителей, в том числе и нас, в жесткие рамки, чтобы конкурировать с европейскими компаниями, необходимо повысить качество и улучшить дизайн своих изделий. </p>
            </div>
            <div class="col-12 col-md-6 d-flex align-content-end">
                <p style="margin-top: auto;margin-bottom: 40px;text-align: right;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Наши мастера прошли стажировку у известных итальянских
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;мебельных производителей. Переданный опыт итальянских мастеров стал
                    отправной точкой роста квалификации и масштабов работ. У нас появились заказы на
                    изготовление предметов мебели по индивидуальным проектам. Постепенно Мастерская мебели обросла опытом и известностью.
                    За 15-летний опыт работы было реализовано множество объектов не только в Москве, но и в других регионах России. </p>
            </div>
        </div>

        @include('partials.slider-col-3', [
                'title' => '',
                'images' => [
                    'img-1' => 'theme/assets/rediz/img/masterskaya/img-6.jpg',
                    'img-2' => 'theme/assets/rediz/img/masterskaya/img-7.jpg',
                    'img-3' => 'theme/assets/rediz/img/masterskaya/img-8.jpg',
                    'img-4' => 'theme/assets/rediz/img/masterskaya/img-6.jpg',
                    'img-5' => 'theme/assets/rediz/img/masterskaya/img-7.jpg',
                    'img-6' => 'theme/assets/rediz/img/masterskaya/img-8.jpg',
                    ]
                ])

        <h3 class="title--3 mb-1">Наши клиенты</h3>
        <div class="row mb-5">
            <div class="col-12">
                <p>Список заказчиков расширился за счет доверия к нашей компании высокопоставленных людей. В число наших клиентов вошел президент Казахстана Нурсултан Назарбаев. Для него мы разработали несколько дизайн-проектов и материализовали их на даче в Подмосковье и в частном доме в г. Алма-Ате. Нам довелось также поработать в резиденции Московского Патриарха, находящейся на западе Москвы в Новопеределкино. Одним из ярких и запоминающихся нам проектов стали монтаж и реставрация мебели в торговом центре «ДЛТ | TSUM. St.Petersburg» в Санкт-Петербурге.</p>
            </div>
        </div>

        <h3 class="title--3 mb-1">Наши мастера</h3>
        <div class="row background--image--center justify-content-between"
             style="background-image: url('theme/assets/rediz/img/masterskaya/img-9.png');
             background-position: 100% 0%;
             ">
            <div class="col-12 col-md-3">
                <p class="flex-width">Мастера студии «Homeartidea» обладают большим опытом монтажа и реставрации мебели таких известных европейских фирм, как: OAK, ARMANDO RHO, Francesco Molon, Provasi, Belvedere, BERNAZZOLI, Annibale Colombo, Selva и др.</p>
            </div>
            <div class="col-12 col-md-5">
                <p>«Так в чем же все-таки преимущество производства мебели у нас»? – спросите вы. Ответ прост. Мебель европейского качества по приемлемым ценам теперь доступна, а маркировка «сделано в России» может больше вас не настораживать. Кроме того, срок производства мебели значительно сокращается, ведь исключается время на ее доставку из Европы.  </p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12">
                <p>Присылайте ваши задумки и пожелания, а мы обязательно предложим вам наиболее интересный
                    и приемлемый вариант, будь то мебель европейского производителя, или мебель, изготовленная в нашей мастерской.  </p>
            </div>
        </div>

    </section>

@endsection

@section('form')
    @include('partials.universal_form', [
    'title' => 'Напишите нам',
    'description' => 'Задавайте любые вопросы, мы с удовольствием Вам поможем'
    ])
@endsection