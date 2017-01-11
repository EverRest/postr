<div class=""row">
    <div id="listInserts"></div>
    <form class="form-horizontal jumbotron" id="insert-form" action="<?php echo URL; ?>dashboard/xhrInsert" method="post">
        <input type="hidden" name="ip" id="ip"  value="<?php echo $_SERVER["REMOTE_ADDR"];?>">

        <input type="hidden" name="client" id="client" value="<?php echo $_SERVER['HTTP_USER_AGENT']; ?>">

        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Ім'я:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="Введіть Ваше ім'я" required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">E-mail:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="email" placeholder="emailaddress@example.com" required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="site">Сайт:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="site" id="site" placeholder="www.example.com">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="text">Повідомлення:</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="text" name="text" placeholder="Ваше повідомлення" required="required"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info">Надіслати</button>
            </div>
        </div>
    </form>
</div>