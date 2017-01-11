<?php  $notes = $this->msg; ?>
<table class="table table-striped sortable">
    <thead>
        <th><p class="text-uppercase" data-type = "name">Ім'я <span class="glyphicon glyphicon-sort" aria-hidden="true"></span></p></th>
        <th><p class="text-uppercase" data-type = "email">Емейл <span class="glyphicon glyphicon-sort" aria-hidden="true"></span></p></th>
        <th><p class="text-uppercase" data-type = "text">Текст <span class="glyphicon glyphicon-sort" aria-hidden="true"></span></p></th>
        <th><p class="text-uppercase" data-type = "ip">IP <span class="glyphicon glyphicon-sort" aria-hidden="true"></span></p></th>
        <th><p class="text-uppercase" data-type = "client">Браузер <span class="glyphicon glyphicon-sort" aria-hidden="true"></span></p></th>
        <th><p class="text-uppercase" data-type = "date">Дата <span class="glyphicon glyphicon-sort" aria-hidden="true"></span></p></th>
    </thead>
    <tbody>
    <?php foreach ($notes as $note): ?>
        <tr data-item-id="<?php echo $note['id'];?>">
            <td><?php echo $note['name']; ?></td>
            <td><?php echo $note['email']; ?></td>
            <td><?php echo $note['text'];?></td>
            <td><?php echo $note['ip']; ?></td>
            <td><?php echo $note['client']; ?></td>
            <td><?php echo $note['created_at']; ?></td>
            <td><button type="button" data-id="<?php echo $note['id']; ?>" class="redact btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>
            <td><button type="button" data-id="<?php echo $note['id']; ?>" class="delete btn btn-default"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<form id="edit-form" class="form-horizontal" action="<?php echo URL; ?>dashboard/xhrEditListing" title="Редактор" method="post">

    <input type="hidden" name="id" id="id">

    <div class="form-group">
        <div class="col-md-12">
            <input type="text" class="form-control" name="name" id="name" placeholder="Введіть Ваше ім'я" required="required">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="email" class="form-control" name="email" id="email" placeholder="emailaddress@example.com" required="required">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="text" class="form-control" name="site" id="site" placeholder="www.example.com">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <textarea class="form-control" id="text" name="text" placeholder="Ваше повідомлення" required="required"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <button type="submit" class="btn btn-success btn-lg center-block">Надіслати</button>
        </div>
    </div>
</form>
