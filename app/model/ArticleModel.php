<?php

class ArticleModel extends CRUDModel {

    /**
     * Get  Records by category id
     */
    public function getByCID($cid) {
        $cid = (int) $cid;
        return $this->getAll("WHERE `cid` =$cid");
    }

    public function getInnerJoinCats() {

        return $this->getAll("INNER JOIN cats ON `articles`.`cid`=`cats`.`cid` ORDER BY ID; ");
    }

    public function getOneInnerJoinCats($id) {

        return $this->getAll("INNER JOIN cats ON `articles`.`cid`=`cats`.`cid` WHERE `" . $this->id . "` =$id ORDER BY ID; ")[0];
    }

}
