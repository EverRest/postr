<?php  $notes = $this->msg; ?>
<table class="table table-striped">
    <thead><p class="text-uppercase" >Книга скарг і пропозицій</p></thead>
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
