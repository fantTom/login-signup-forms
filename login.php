<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="style.css">
<script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.1.3/dist/bootstrap-validate.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src='script/login-click.js'></script>


<div id="success_message" class="ajax_response" style="height: 50px"></div>
<div id="form-for-login" class="row main-form">
    <form id="login-form" method="post" class="form-horizontal"
          data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
          data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
          data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">

        <div class="form-group">
            <label for="username" class="cols-sm-2 control-label">Имя пользователя</label>
            <div class="cols-sm-10">
                <div class="input-group" style="float:left">
                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Введите имя пользователя" required />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="cols-sm-2 control-label">Пароль</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль" required />
                </div>
            </div>
        </div>


        <div class="form-group ">
            <button type="submit" id="login_btn" name="login_btn" class="btn btn-primary btn-lg btn-block login-button">Войти</button>
        </div>

        <div class="form-group" style="float: right">
            <a href="//test.loc/signup.php">Зарегистрироваться</a>
        </div>

    </form>
</div>
