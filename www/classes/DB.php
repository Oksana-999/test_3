<?php
//вспомогательный класс МОДЕЛИ
class  DB
{
    public function __construct()
    {               //public function __construct() Вызывается автоматически при создании объекта данного класса
        mysql_connect('localhost', 'root', '19425');
        mysql_select_db('newsline');
        //Языковая настройка: кирилица
        mysql_query ("set_client='utf8'");
        mysql_query ("set character_set_results='utf8'");
        mysql_query ("set collation_connection='utf8_general_ci'");
        mysql_query ("SET NAMES utf8");
    }

    public function queryAll($sql,  $class = 'stdClass')
    {       $res = mysql_query($sql);
        if (false === $res) {
            return false;
        }
        $ret = array();
        while ($row = mysql_fetch_object($res, $class)) {
            $ret[] = $row;  // mysql_fetch_object  возвращает результаты в виде объекта
        }                   //var_dump($ret);echo "<br />";die;
        return $ret;
    }

    public function queryOne($sql, $class = 'stdClass')
    {
        return $this->queryAll($sql, $class);
    }

    public function exec($sql, $class = 'stdClass')   //executive - исполнительный
    {                           //protected (защищённые)- свойства и методы не доступны из вне, но они наследуются,доступны в классе и всех его наследникаx
        $result = mysql_query($sql);// метод используется для изменения данных в Б.Д.
        return $result; // метод используется для изменения данных в Б.Д.
                     //INSERT, DELETE, UPDATE
    }

    public function insert($sql, $class = 'stdClass')
    {
        return $this->exec($sql, $class); // метод используется для изменения данных в Б.Д.
    }
    }