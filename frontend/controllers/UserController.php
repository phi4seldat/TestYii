<?php

namespace frontend\controllers;



class UserController extends \yii\rest\ActiveController
{

    public $modelClass = 'frontend\models\user';

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'data',
    ];

    /*
    public function actionIndex()
    {
        //return $this->render('getall');

        $user = new User();
        $user_list = $user->getAllUsers();
        //var_dump($user_list);
        //Yii::$app->response->format = Response::FORMAT_JSON;

        foreach ($user_list AS $user_one){
            $json_ob['username'] = $user_one['username'];
            $json_ob['email'] = $user_one['email'];
            $result[] = $json_ob;
        }

        return ['data' => $result];
    }
    */

}
