<?php if (!empty($params["alert"])) echo $params["alert"]; ?>

<div class="container">
    <h1>Регистрация пользователя</h1>
    
    <form method="post">
        <div class="inline">
            <div class="group">
                <label for="inputLogin">Логин (E-mail) *</label>
                <input class="required" type="text" name="login" id="inputLogin">
                <span class="error"></span>
            </div>
    
            <div class="group">
                <label for="inputPassword">Пароль *</label>
                <input class="required" type="password" name="password" id="inputPassword">
                <span class="error"></span>
            </div>
        </div>
    
        <div class="inline">
            <div class="group">
                <label for="inputLastname">Фамилия *</label>
                <input class="required" type="text" name="lastname" id="inputLastname">
                <span class="error"></span>
            </div>
    
            <div class="group">
                <label for="inputFirstname">Имя *</label>
                <input class="required" type="text" name="firstname" id="inputFirstname">
                <span class="error"></span>
            </div>
        </div>
    
        <div class="group">
            <label for="inputDepartment">Отдел *</label>
            <input class="required" type="text" name="department" id="inputDepartment">
            <span class="error"></span>
        </div>
    
        <button type="submit">Продолжить</button>
    </form>
</div>

<script src="/public/assets/javascripts/form.validation.js"></script>