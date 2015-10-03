<?php

class Songs {

    public function __construct() {

    }

    public function Add($id, $title) {
        echo __METHOD__ . $id . $title;
    }

}
