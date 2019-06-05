<h2>Создание веб-приложения для регистрации и авторизации на php, html, css, js/jquery.</h2>

<p><h3>Форма регистрации:</h3>
    1) Поля:</br>
     - login (unique)</br>
     - password</br>
     - confirm_password</br>
     - email (unique)</br>
     - name
</p><p>
    2) Функционал:</br>
    После заполнения формы, уходит запрос на создание пользователя, поля проверяются на валидность (не пустые), уникальные поля проверяются на уникальность в БД, password и confirm_password сравниваются (должны быть одинаковыми). Если что-то не так - выдается ошибка.</br>
    В случае ошибки, возвращаем текст с ошибками.</br>
    В случае успеха шифруем пароль ("соль"+md5 или "соль"+sha1) и заносим данные в нашу базу.
</p><p>
<h3>Форма авторизации:</h3>
    1) Поля:</br>
        - login</br>
        - password</br>
    2) Функционал:</br>
    После заполнения формы уходит запрос:</br>
        - проверяется наличие пользователя в бд;</br>
        - сверяется пароль.
</p><p>
    В случае ошибки, возвращаем текст с ошибками.</br>
    В случае успеха происходит процесс авторизации (создание необходимых связей cookies + session + db). Обратите внимание, что в db тоже должна быть связь с сессией и cookies.
</p><p>
    В случае авторизации мы должны видеть сообщение 'Hello [имя пользователя]', формы в таком случае не отображаем.</br>
    Внешний вид значения не имеет.
</p><p>
<h3>Основные требования:</h3>
    - Вместо базы данных используем файл XML. Другие БД/технологии не интересны.</br>
    - Пароль не должен хранится в открытом виде.</br>
    - Связь авторизации  - cookies + session + db (xml). - не реализованно</br>
    - Формы должны отрправляться используя технологию ajax, ответ в формате json.</br>
    - Если js отключён, то форма отправиться не может.</br>
    - Все поля форм - обязательные.</br>
    - Все формы реализуются через <form>.
</p><p>
<h3>Дополнительные требования</h3>
    - защита от инъекций при получении параметров через get- или post;</br>
    - осмысленное название полей в бд;</br>
    - разумное оформление кода – имена переменных, функций, отступы, комментарии;</br>
    - код должен быть - прост в поддержке;</br>
    - отсутствие дублирование кода. копипаст – признак низкой культуры разработки;</br>
    - разделение логики работы и представления – некрасиво писать html и php вперемешку;</br>
    - css/js в отдельных файлах;</br>
    - осмысленное использование css.
    </p>
