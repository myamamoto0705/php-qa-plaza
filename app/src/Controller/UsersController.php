<?php

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UserTable $Users
 */
class UsersController extends AppController
{
  /**
   * @inheritdoc
   */
   public function initialize(){
     parent::initialize();
     $this->Auth->allow(['add']);
   }

   public function index()
   {

   }
   /**
    * ユーザ登録画面/ユーザ登録処理
    *
    * @return \Cake\Http\Response|null ユーザ登録後にログイン画面へ遷移
    */
  public function add(){
    $user = $this->Users->newEntity();
    if($this->request->is('post')) {
      $user = $this->Users->patchEntity($user, $this->request->getData());
      if($this->Users->save($user)){
        $this->Flash->success('ユーザ登録が完了しました');
        return $this->redirect(['controller' => 'Login', 'action' => 'index']);
      }
      $this->Flash->error('ユーザ登録に失敗しました');
    }
    $this->set(compact('user'));
  }





}
