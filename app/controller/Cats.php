<?php

class Cats {

    private $Model;
    private $CatModel;

    public function __construct() {
        $this->Model = new CatModel('cats', 'cid');
    }

    public function showAll() {
        $cats = $this->Model->getAll();
        $GLOBALS['RainTPL']->assign('cats', $cats);
        $GLOBALS['RainTPL']->assign('title', 'Cats');
        $GLOBALS['RainTPL']->draw('cats');
    }

    private function CheckAffectedRows($return = NULL) {
        return Sys::Get('db')->AffectedRows() > 0 ? ( $return != NULL ? $return = $return : FALSE) : FALSE;
    }

    public function show($id) {
        $articles = $this->Model->getOneInnerJoinArticles($id);
        $GLOBALS['RainTPL']->assign('articles', $articles);
        $GLOBALS['RainTPL']->assign('title', $articles[0]['cname']);
        $GLOBALS['RainTPL']->draw('cat');
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

}
