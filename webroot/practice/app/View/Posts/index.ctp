
<h1>TOP</h>
<br>
<br>
<br>

<?php foreach( $posts as $post ): ?>

    <?php  
        //　一覧表示 
        echo $this->Html->link($post['Post']['title'],'/posts/view/'.$post['Post']['id']);

        echo $this->Html->link('編集', array('action'=>'edit',$post['Post']['id']));

        echo $this->Form->postLink('削除',array('action'=>'delete',$post['Post']['id']),array('confirm'=>'OK?'));
    ?>
<?php endforeach; ?>    

<h2>Add Post</h2>

<?php
    // 投稿ページ
    echo $this->Html->link('Add Post',array('controller'=>'posts','action'=>'add')); 
?>    

