<?php

class CatModel extends CRUDModel {

    public function getOneInnerJoinArticles($id) {
        return $this->getAll("INNER JOIN articles ON `articles`.`cid`=`cats`.`cid` WHERE `cats`.`cid` = $id ; ");
    }

}
