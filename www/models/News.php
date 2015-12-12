<?php
//Модели, наоборот содержат большую часть кода, связанную с обработкой
// данных. SQL-запросы лучше держать в моделях.
class News
    extends AbstractModel
{
    public $id;
    public $news;
    public $text;

    protected static $table = 'messages';   //Статическое защищённое свойство
    protected static $class = 'News';       //protected(защищённые)- свойства и методы не доступны из вне, но они наследуются
    protected static $class_post = 'AddController';

}