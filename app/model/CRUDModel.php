<?php

class CRUDModel {

    protected $table;

    public function __construct($table, $id) {
        $this->table = $table;
        $this->id = $id;
        $GLOBALS['RainTPL']->assign('time', TIMESTAMP);
    }

    protected function CheckAffectedRows($return = NULL) {
        return $GLOBALS['db']->AffectedRows() > 0 ? ( $return != NULL ? $return = $return : FALSE) : FALSE;
    }

    /**
     * Get All Records
     */
    public function getAll($extra = NULL) {
        $GLOBALS['db']->Execute("SELECT * FROM `" . $this->table . "` {$extra}");
        return $this->CheckAffectedRows($GLOBALS['db']->GetRows());
    }

    /**
     * Get  one Record by  id
     */
    public function getOneByID($id) {
        $id = (int) $id;
        return $this->getAll("WHERE `" . $this->id . "` =$id")[0];
    }

    /**
     * Get Last (Num) Records
     */
    public function GetLast($num) {
        /* Type Casting  */
        $num = (int) $num;
        return $this->getAll("ORDER BY " . $this->id . " DESC LIMIT $num");
    }

    public function AddRecord($data) {
        $db->Insert($this->table, $data);
        return $this->CheckAffectedRows("row added successfully");
    }

    public function UpdateRecord($id, $data) {
        /* Type Casting  */
        $id = (int) $id;
        $GLOBALS['db']->Update($this->table, $data, "WHERE `" . $this->id . "` =$id");
        return $this->CheckAffectedRows("id:$id Updated successfully");
    }

    public function DeleteRow($id) {
        /* Type Casting  */
        $id = (int) $id;
        $GLOBALS['db']->Delete($this->table, "WHERE `" . $this->id . "` =$id");
        return $this->CheckAffectedRows("id:$id Deleted successfully");
    }

    /**
     *
     * @param array $rows you want to delete
     * @return type
     */
    public function DeleteMultiRecord($rows) {
        $RecordsIDS = '';
        foreach ($rows as $key => $value) {
            $GLOBALS['db']->Delete($this->table, "WHERE `" . $this->id . "` =$value");
            $RecordsIDS.=$value . ' ';
        }

        return $this->CheckAffectedRows("Record:$RecordsIDS Deleted successfully");
    }

}
