<?php  $notes = $this->msg; ?>
<table class="table table-striped sortable">
    <thead>
        <th><p class="text-uppercase" data-type = "name">Ім'я <span class="glyphicon glyphicon-sort" aria-hidden="true"></span></p></th>
        <th><p class="text-uppercase" data-type = "email">Емейл <span class="glyphicon glyphicon-sort" aria-hidden="true"></span></p></th>
        <th><p class="text-uppercase" data-type = "text">Текст <span class="glyphicon glyphicon-sort" aria-hidden="true"></span></p></th>
        <th><p class="text-uppercase" data-type = "date">Дата <span class="glyphicon glyphicon-sort" aria-hidden="true"></span></p></th>
    </thead>
    <tbody>
    <?php foreach ($notes as $note): ?>
    <tr>
        <td><?php echo $note['name']; ?></td>
        <td><?php echo $note['email']; ?></td>
        <td><?php echo $note['text']; ?></td>
        <td><?php echo $note['created_at']; ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
