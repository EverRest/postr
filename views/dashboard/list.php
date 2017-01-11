<?php  $notes = $this->msg; ?>
<table class="table table-striped sortable">
    <thead>
        <th><p class="text-uppercase" >Ім'я</p></th>
        <th><p class="text-uppercase" >Емейл</p></th>
        <th><p class="text-uppercase" >Текст</p></th>
        <th><p class="text-uppercase" >Дата</p></th>
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
