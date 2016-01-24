<?php

/**
 * Created by PhpStorm.
 * User: Umezawa_Shota
 * Date: 2016/01/16
 * Time: 15:00
 */

class PostsController extends AppController{
//    public $scaffold;

    public $helpers = array('Html','Form');
    
    // top画面
    public function index()
    {
        // データ全てをpostsに取得
        $this->set('posts', $this->Post->find('all'));
        // タイトルバー変更
        $this->set('title_for_layout', '記事一覧');
        
    }
    // 詳細画面 detail
    public function view( $id = null )
    {
        $this->Post->id = $id;
        $this->set('post',$this->Post->read());
    }
  
    // add/create
    public function add()
    {
        if($this->request->is('post'))
        {
            if($this->Post->save($this->request->data))
            {
                $this->redirect(array('action'=>'index'));  
            }
            else
            {
                
            }

        }
        
    }
    
    public function edit($id = null) 
    {   
        // 編集するデータのIDをセット
        $this->Post->id = $id;
        // リクエストをゲット出来た
        if ($this->request->is('get')) 
        {
            // データ取得
            $this->request->data = $this->Post->read();
        }
        else
        {   // リクエストをゲット出来なかった場合
            if ($this->Post->save($this->request->data)) 
            {
                // indexに戻る
                $this->redirect(array('action'=>'index'));
            } 
        }
    }

    
        public function delete($id) 
        {
            // GETはエラーを返す処理
            if ($this->request->is('get'))
            {
                throw new MethodNotAllowedException();
            }
            // 通常。うまく行った場合
            if ($this->Post->delete($id))
            {
                // INDEXに戻る
                $this->redirect(array('action'=>'index'));
            }
    
    }
    
    
}