<?php

class Articles {

    private $Model;
    private $CatModel;

    public function __construct() {
        $this->Model = new ArticleModel('articles', 'id');
    }

    public function showAll() {
        $articles = $this->Model->getInnerJoinCats();

        $GLOBALS['RainTPL']->assign('articles', $articles);
        $GLOBALS['RainTPL']->assign('title', 'Articles');
        $GLOBALS['RainTPL']->draw('articles');
    }

    private function CheckAffectedRows($return = NULL) {
        return Sys::Get('db')->AffectedRows() > 0 ? ( $return != NULL ? $return = $return : FALSE) : FALSE;
    }

    public function show($id) {
        $article = $this->Model->getOneInnerJoinCats($id);
        $GLOBALS['RainTPL']->assign('article', $article);
        $GLOBALS['RainTPL']->assign('title', 'Article');
        $GLOBALS['RainTPL']->draw('article');
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
