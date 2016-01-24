<h1>編集画面</h>
<br>
<?php
echo $this->Form->create('Post', array('action'=>'edit'));
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows'=>3));
echo $this->Form->end('Save!');
?>