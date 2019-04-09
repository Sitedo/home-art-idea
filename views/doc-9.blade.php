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
                            <h3 class="case-block_card-item_title">Эскизный</h3>
                            <span class="case-block_card-item_price"></span>
                            <ul class="case-block_card-item_list">
                                <li class="case-block_card-item_list_item">Обмерный план</li>
                                <li class="case-block_card-item_list_item">Планировочное решение (3 варианта)</li>
                                <li class="case-block_card-item_list_item">План расстановки мебели</li>
                            </ul>
                            <button class="case-block_card-item_button" type="button">Примеры проектов</button>
                        </div>
                    </div>
                    <div class="case-block_card-items">
                        <div class="case-block_card-item">
                            <h3 class="case-block_card-item_title">Эскизный</h3>
                            <span class="case-block_card-item_price"></span>
                            <ul class="case-block_card-item_list">
                                <li class="case-block_card-item_list_item">Обмерный план</li>
                                <li class="case-block_card-item_list_item">Планировочное решение (3 варианта)</li>
                                <li class="case-block_card-item_list_item">План расстановки мебели</li>
                            </ul>
                            <button class="case-block_card-item_button" type="button">Примеры проектов</button>
                        </div>
                    </div>
                    <div class="case-block_card-items">
                        <div class="case-block_card-item">
                            <h3 class="case-block_card-item_title">Эскизный</h3>
                            <span class="case-block_card-item_price"></span>
                            <ul class="case-block_card-item_list">
                                <li class="case-block_card-item_list_item">Обмерный план</li>
                                <li class="case-block_card-item_list_item">Планировочное решение (3 варианта)</li>
                                <li class="case-block_card-item_list_item">План расстановки мебели</li>
                            </ul>
                            <button class="case-block_card-item_button" type="button">Примеры проектов</button>
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