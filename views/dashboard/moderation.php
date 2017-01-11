<?php  $notes = $this->msg; ?>
<table class="table table-striped">
    <thead><h5 class="text-uppercase" >Книга скарг і пропозицій(Адмін)</h5></thead>
        <tbody>
        <?php foreach ($notes as $note): ?>
            <tr>
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
