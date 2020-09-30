<h1><?= h($bookmark->title) ?></h1>
<p><?= h($bookmark->body) ?></p>
<p><small>Created: <?= $bookmark->created->format(DATE_RFC850) ?></small></p>