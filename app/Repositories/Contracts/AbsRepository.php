<?php

namespace App\Repositories\Contracts;



use App\Helper\Database\DB;

abstract class AbsRepository implements Repository
{
    protected $table;

    protected $perPage = 15;

    public function all($columns = array('*'))
    {
        $db = DB::getInstance();

        $req = $db->query('SELECT '.implode(',', $columns).' FROM ' . $this->table);

        $table_fields = $this->tableFields();

        $list = [];
        foreach($req->fetchAll() as $k => $v) {
            foreach ($table_fields as $field) {
                $list[$k][$field] = $v[$field];
            }
        }

        return $list;
    }


    private function tableFields()
    {
        $db = DB::getInstance();

        $q = $db->prepare("DESCRIBE ". $this->table);
        $q->execute();

        return $q->fetchAll(\PDO::FETCH_COLUMN);
    }
}