<h1>your Bookmarks</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we iterate through our $bookmarks query object, printing out bookmark info -->

    <?php foreach ($bookmarks as $bookmark): ?>
    <?= $this->Html->link('Add Article', ['action' => 'add']) ?>
    <tr>
        <td><?= $bookmark->id ?></td>
        <td>
            <!-- link() generate HTML link  -->
            <?= $this->Html->link($bookmark->title, ['action' => 'view', $bookmark->id]) ?>
        </td>
        <td>
            <?= $bookmark->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>