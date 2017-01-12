<?php  $notes = $this->msg; ?>
<table class="table table-striped tablesorter" id="table">
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

<div id="pager" class="pager">
    <form>
        <img src="<?php echo URL; ?>public/images/first.png" class="first"/>
        <img src="<?php echo URL; ?>public/images/prev.png" class="prev"/>
        <input type="text" class="pagedisplay"/>
        <img src="<?php echo URL; ?>public/images/next.png" class="next"/>
        <img src="<?php echo URL; ?>public/images/last.png" class="last"/>
        <select class="pagesize">
            <option value="">LIMIT</option>
            <option value="2">2 per page</option>
            <option value="5">5 per page</option>
            <option value="10">10 per page</option>

        </select>
    </form>
</div>