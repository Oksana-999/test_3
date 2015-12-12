<?php
//вспомогательный класс МОДЕЛИ
class AbstractModel
{
    protected static $table;   //Статическое защищённое свойство
    protected static $class;
    protected static $class_post;

    public static function getAll()   //статический публичный метод
    {
        $db = new DB;
        $sql = 'SELECT * FROM ' . static::$table;   //static - ссылается на конечный класс, на тот который унаследован
         //echo $sql;die;
        return $db->queryAll($sql, static::$class);
    }

    public static function getOne($id)
    {
        $db = new DB();

        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=' . $id;
                        // var_dump($sql);
                        // var_dump($db->queryOne($sql, static::$class));die;
        return $db->queryOne($sql, static::$class)/*[0]*/;
    }

    public static function recordAdd($data)   //record - запись.  статический публичный метод
    {
        $db = new DB;
        $sql = $sql = "INSERT INTO " . static::$table . " (dt, news, text) VALUES
	('" . date('Y-m-d H:i:s') . "', '" . $data['news'] . "', '" . $data['text'] . "')";   //static - ссылается на конечный класс, на тот который унаследован
        //echo $sql;die;
        return $db->insert($sql,  static::$class_post);
        //var_dump($db);die;
    }
}

