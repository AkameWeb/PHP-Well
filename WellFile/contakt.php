<h3 class="mt-5">Контакты</h3>
<?php
        require("../WellFile/blocks/header.php");
        session_start();
    ?>
    <div class="alert alert-success"><?=$_SESSION['mail']?></div>
    <form action="check_contact.php" method="POST">
        <div class="mt-2">
            <label for="User">Ваше имя</label>
            <input type="text" name="User" id="User" class="form-control" value="<?=$_SESSION['User']?>">
            <div class="text-danger" ><?= $_SESSION['$error_name']?></div>
        </div>
        
        <div class="mt-2">
            <label for="emeil">Почта</label>
            <input type="text" name="emeil" id="emeil" class="form-control" value="<?=$_SESSION['emeil']?>">
            <div class="text-danger" ><?= $_SESSION['$error_emeil']?></div>
        </div>
        
        <div class="mt-2">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" id="subject" class="form-control" placeholder="Тема сообщения">
            <div class="text-danger" ><?= $_SESSION['$error_message']?></div>
        </div>
        
        <div class="mt-2">
            <label for="message">Ваше обращение к нам</label>
            <textarea name="message" id="message" placeholder="Напиши ваще сообщение" class="form-control"></textarea>
            <div class="text-danger" ><?= $_SESSION['$error_message']?></div>
        </div>
        <div class="mt-2 inner"><button type="submit" class="btn btn-success">Отправить</button></div>
        
    </form>
    
    <?php
        require("../WellFile/blocks/footer.php");
    ?>