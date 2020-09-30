<h1>Add Bookmark</h1>
<?php
    echo $this->Form->create($bookmark);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->button(__('Save Bookmark'));
    echo $this->Form->end();
?>