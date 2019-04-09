<form class="container feetback pb-5">
    <div class="row">
        <div class="col-12 col-md-4">
            <h2 class="title--1">{{ $title }}</h2>
            <p class="text--1">{{ $description }}</p>
            <div class="checkbox--wrapper">
                <label class="checkbox--wrapper_label">
                    <input class="checkbox" type="checkbox" name="date-processing" value="true" required="">
                    <span class="checkbox-custom"></span>
                    <span class="px-2 label" for="checkbox">Я согласен с <a class="text--link-red" href="#">условиями</a> обработки персональных данных</span>
                </label>
            </div>
        </div>
        <div class="col-12 col-md-8 ">
            <div class="feetback__input-group-items">
                <input type="text" name="name" class="feetback__input_name my-input" required placeholder="Имя">
                <input type="tel"  name="phone" class="feetback__input_phone my-input" placeholder="Телефон">
                <input type="email"  name="email" class="feetback__input_email my-input" required placeholder="E-mail">
                <textarea rows="5" name="message" class="feetback__input_message my-input" placeholder="Вопрос"></textarea>
            </div>
            <div class="d-flex w-100 justify-content-around my-4">
                <button type="submit" class="my-btn-red">Отправить<i class="zmdi zmdi-arrow-right ml-4"></i></button>
            </div>
        </div>
    </div>
</form>