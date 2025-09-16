
    <div class="mt-5"><h3>Главная страница</h3></div>
    <?php
        require("../WellFile/blocks/header.php");
       
    ?>
   
    <form action="chec_post.php" method="POST">
        <div class="mt">
            <div >
                <label for="username">Имя</label>
                <input type="text" name="username" placeholder="Введите имя" class="form-control">
            </div>
            <div>
                <label for="userfil">Фамилию</label>
                <input type="text" name="userfil" placeholder="Введите фамилию" class="form-control">
            </div>
            <div>
                <label for="emeil">Emeil</label>
                <input type="text" name="emeil" placeholder="Введите emeil" class="form-control">
            </div>
            
            <div>
                <label for="password">Пароль</label>
                <input type="text" name="password" placeholder="Введите пароль" class="form-control">
            </div>
         
        </div>
        <div class="inner">
            <button type="submit" class="btn btn-success">Авторизация</button>
            <a href="#">Регистрация</a>
        </div>
    </form>
    <?php
        
        
        require("../WellFile/blocks/footer.php");
    ?>
