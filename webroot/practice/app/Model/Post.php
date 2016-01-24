<?php

/**
 * Created by PhpStorm.
 * User: Umezawa_Shota
 * Date: 2016/01/16
 * Time: 16:15
 */


class Post extends AppModel
{
    // エラーチェック
    public $validate = array(
        'title' => array(
            'rule' => 'notBlank'
        ),
        'body' => array(
            'rule' => 'notBlank'
        )
    );
    
}