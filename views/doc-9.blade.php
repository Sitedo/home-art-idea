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

                <div class="case-block">
                    <div class="case-block_card-items">
                        <div class="case-block_card-item">
                            <img class="case-block_card-item_img" src="theme/assets/rediz/img/case/case_car-img-2.jpg" />
                            <h3 class="case-block_card-item_title">Эскизный</h3>
                            <p class="case-block_card-item_price">450<span>руб/м2</span></p>
                            <ul class="case-block_card-item_list">
                                <li class="case-block_card-item_list_item">Обмерный план</li>
                                <li class="case-block_card-item_list_item">Планировочное решение (3 варианта)</li>
                                <li class="case-block_card-item_list_item">План расстановки мебели</li>
                            </ul>
                            <button class="case-block_card-item_button my-btn-red" type="button">Примеры проектов</button>
                        </div>
                        <div class="case-block_card-item">
                            <img class="case-block_card-item_img" src="theme/assets/rediz/img/case/case_car-img-2.jpg" />
                            <h3 class="case-block_card-item_title">Стандарт</h3>
                            <p class="case-block_card-item_price">1550<span>руб/м2</span></p>
                            <ul class="case-block_card-item_list">
                                <li class="case-block_card-item_list_item">Обмерный план</li>
                                <li class="case-block_card-item_list_item">Планировочное решение (3 варианта)</li>
                                <li class="case-block_card-item_list_item">План расстановки мебели</li>
                                <li class="case-block_card-item_list_item">План демонтажа перегородок</li>
                                <li class="case-block_card-item_list_item">План монтажа перегородок</li>
                                <li class="case-block_card-item_list_item">План напольных покрытий</li>
                                <li class="case-block_card-item_list_item">План теплых полов</li>
                                <li class="case-block_card-item_list_item">План потолков</li>
                                <li class="case-block_card-item_list_item">План осветительного оборудования</li>
                                <li class="case-block_card-item_list_item">План привязки выключателей</li>
                                <li class="case-block_card-item_list_item">План электровыводов</li>
                                <li class="case-block_card-item_list_item">Развертка кухни</li>
                                <li class="case-block_card-item_list_item">Развертка стен С/У</li>
                                <li class="case-block_card-item_list_item">Стилистические коллажи</li>
                            </ul>
                            <button class="case-block_card-item_button my-btn-red" type="button">Примеры проектов</button>
                        </div>
                        <div class="case-block_card-item">
                            <img class="case-block_card-item_img" src="theme/assets/rediz/img/case/case_car-img-2.jpg" />
                            <h3 class="case-block_card-item_title">Премиум</h3>
                            <p class="case-block_card-item_price">2250<span>руб/м2</span></p>
                            <ul class="case-block_card-item_list">
                                <li class="case-block_card-item_list_item">Обмерный план</li>
                                <li class="case-block_card-item_list_item">Планировочное решение (3 варианта)</li>
                                <li class="case-block_card-item_list_item">План расстановки мебели</li>
                                <li class="case-block_card-item_list_item">План демонтажа перегородок</li>
                                <li class="case-block_card-item_list_item">План монтажа перегородок</li>
                                <li class="case-block_card-item_list_item">План напольных покрытий</li>
                                <li class="case-block_card-item_list_item">План теплых полов</li>
                                <li class="case-block_card-item_list_item">План потолков</li>
                                <li class="case-block_card-item_list_item">План осветительного оборудования</li>
                                <li class="case-block_card-item_list_item">План привязки выключателей</li>
                                <li class="case-block_card-item_list_item">План электровыводов</li>
                                <li class="case-block_card-item_list_item">Развертка кухни</li>
                                <li class="case-block_card-item_list_item">Развертка стен С/У</li>
                                <li class="case-block_card-item_list_item">Развертки декоративных элементов</li>
                                <li class="case-block_card-item_list_item">3D визуализация</li>
                                <li class="case-block_card-item_list_item">Ведомость материалов и мебели</li>
                            </ul>
                            <button class="case-block_card-item_button my-btn-red" type="button">Примеры проектов</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@section('form')
    @include('partials.universal_form', [
    'title' => 'Подать заявку',
    'description' => 'Мы ценим ваше время и стремимся максимально быстро и качественно предоставить ответ на ваш запрос.'
    ])
@endsection