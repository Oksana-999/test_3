<?php
//КОНТРОЛЛЕР отвечает за обработку запросов пользователя.
// Контроллер не должен содержать SQL-запросов.
class NewsController
{
    public function actionAll()   //action- действие
    {
        $items = News::getAll();
        //var_dump($items);die; //отладка
        include __DIR__ . '/../views/news/all.php';
    }
    public function actionOne()
    {       // echo 'actionOne';    //die; //$id- то что хочет пользователь
        $id = $_GET['id'];          //echo $id;die;
        $item = News::getOne($id);
                                    //var_dump($item);die;
        include __DIR__ . '/../views/news/one.php';
    }
}

class AddController
{
    public function actionAdd()   //action- действие
    {
        $data = array();//echo $_POST['news'];
        if (!empty($_POST['news']) && !empty($_POST['text'])) {   //1 час 27 Geekbrains урок 8
            $data['news'] = $_POST['news'];
            $data['text'] = $_POST['text'];
        }               //var_dump($data);die;  //отладка
        if (isset($data['news']) && isset($data['text'])) {
            News::recordAdd($data);

        }
    }

}