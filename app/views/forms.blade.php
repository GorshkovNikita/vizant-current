<div id="hide-layout" class="hide-layout"></div>
<div id="popup-form-order" class="popup-form-order">
    {{ Form::open([ 'url' => URL::current(), 'files' => true, 'method' => 'POST', 'class' => 'form-order' ]); }}
    {{ HTML::image('images/form/form-close.png', NULL, ['class' => 'form-order-close']); }}
        <label class="order-user-name-label">Ваше имя:<br>
            <input name="order-user-name" type="text" required class="order-user-tel" placeholder="Иванов Иван">
        </label>
        <label class="order-user-email-label">Ваш e-mail:<br>
            <input name="order-user-email" type="email" required class="order-user-email" placeholder="ivan@mail.ru">
        </label>
        <label class="order-user-tel-label">Ваш телефон:<br>
            <input name="order-user-tel" type="tel" required class="order-user-name" placeholder="+7 (999) 999-99-99">
        </label>
        <label class="order-type-product-label">Вид изделия:<br>
            @if (!isset($types))
                <input name="order-type-product" required class="order-type-product-input" placeholder="Вывеска">
            @else
                <select name="order-type-product" class="order-type-product-select">
                    @foreach($types as $type)
                        <option>{{ $type }}</option>
                    @endforeach
                </select>
            @endif
        </label>
        <label class="order-type-work-label">Вид работ:<br>
            @if (!isset($types_of_work))
                <select name="order-type-work" class="order-type-work">
                    <option>Дизайн</option>
                    <option>Монтаж</option>
                    <option>Демонтаж</option>
                    <option>Ремонт</option>
                    <option>Изготовление</option>
                    <option>Полный цикл</option>
                </select>
            @else
                <select name="order-type-work" class="order-type-work">
                    @foreach($types_of_work as $type)
                        <option>{{ $type }}</option>
                    @endforeach
                </select>
            @endif
        </label>
        <label class="order-file-label">Прикрепить файл:<br>
            <input name="order-file" type="file" class="order-file">
        </label>
        <label class="order-text-label">Комментарий:<br>
            <textarea name="order-text" class="order-textarea"
                      placeholder="Здесь Вы можете указать дополнительные параметры заказа."></textarea>
        </label>
        <label class="order-submit-label">
            <input name="order-submit" type="submit" value="" class="order-submit">
        </label>
    {{ Form::close(); }}
</div>

<div id="popup-form-tel" class="popup-form-tel">
    {{ Form::open([ 'url' => URL::current(), 'method' => 'POST', 'class' => 'form-tel' ]); }}
        {{ HTML::image('images/form/form-close.png', NULL, ['class' => 'form-tel-close']); }}
        <label class="tel-user-name-label">Ваше имя:<br>
            <input name="tel-user-name" type="text" required class="tel-user-tel" placeholder="Иванов Иван">
        </label>
        <label class="tel-user-email-label">Ваш e-mail:<br>
            <input name="tel-user-email" type="email" required class="tel-user-email" placeholder="ivan@mail.ru">
        </label>
        <label class="tel-user-tel-label">Ваш телефон:<br>
            <input name="tel-user-tel" type="tel" required class="tel-user-name" placeholder="+7 (999) 999-99-99">
        </label>
        <label class="time-tel-label">Удобное время звонка:<br>
            <input name="tel-time" type="text" required class="tel-time" placeholder="сегодня в 17-00">
        </label>
        <label class="tel-submit-label">
            <input name="tel-submit" type="submit" value="" class="tel-submit">
        </label>
    {{ Form::close(); }}
</div>

<div id="popup-form-mail" class="popup-form-mail">
    {{ Form::open([ 'url' => URL::current(), 'method' => 'POST', 'class' => 'form-mail' ]); }}
        {{ HTML::image('images/form/form-close.png', NULL, ['class' => 'form-mail-close']); }}
        <label class="mail-user-name-label">Ваше имя:<br>
            <input name="mail-user-name" type="text" required class="mail-user-tel" placeholder="Иванов Иван">
        </label>
        <label class="mail-user-email-label">Ваш e-mail:<br>
            <input name="mail-user-email" type="email" required class="mail-user-email" placeholder="ivan@mail.ru">
        </label>
        <label class="mail-user-tel-label">Ваш телефон:<br>
            <input name="mail-user-tel" type="tel" required class="mail-user-name" placeholder="+7 (999) 999-99-99">
        </label>
        <label class="mail-text-label">Сообщение:<br>
            <textarea name="mail-text" class="mail-textarea" placeholder="Введите свое сообщение."></textarea>
        </label>
        <label class="mail-submit-label">
            <input name="mail-submit" type="submit" value="" class="mail-submit">
        </label>
    {{ Form::close(); }}
</div>