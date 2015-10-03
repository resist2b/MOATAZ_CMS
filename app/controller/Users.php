<?php

class Users {

    private $Model;
    private $CatModel;

    public function __construct() {
        $this->Model = new UserModel('users', 'user_id');
    }

    public function showAll() {
        $users = $this->Model->getAll();
        $GLOBALS['RainTPL']->assign('users', $users);
        $GLOBALS['RainTPL']->assign('title', 'Users');
        $GLOBALS['RainTPL']->draw('users');
    }

    /*
      public function Gettimestamp() {
      return $this->Model->timestamp;
      }


      private function CheckAffectedRows($return = NULL) {
      return Sys::Get('db')->AffectedRows() > 0 ? ( $return != NULL ? $return = $return : FALSE) : FALSE;
      }

      public function getOneInnerJoinCats($id) {
      $article = $this->Model->getOneInnerJoinCats($id);
      Sys::Get('tpl')->assign('article', $article);
      Sys::Get('tpl')->assign('title', 'Article');
      Sys::Get('tpl')->draw('article');
      }

      public function getByCID($cid) {
      return $this->Model->getByCID($cid);
      }

      public function GetLast($num) {
      return $this->Model->GetLast($num);
      }

      public function AddRecord($data) {
      return $this->Model->AddRecord($data);
      }

      public function UpdateRecord($id, $data) {
      return $this->Model->UpdateRecord($id, $data);
      }

      public function DeleteRow($id) {
      return $this->Model->DeleteRow($id);
      }

      public function DeleteMultiRecord($rows) {
      return $this->Model->DeleteMultiRecord($rows);
      }
     */
}
