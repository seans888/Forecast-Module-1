<?php
namespace backend\controllers;

use kartik\widgets\FileInput;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\roomsegmentation;
use yii\helpers\Url;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'only' => ['login', 'error','logout','index','upload','beginforecasting','tables','charts'],
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['upload','beginforecasting','tables','charts','index','logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $this->layout = 'loginLayout';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    public function actionUpload()
    {
                if(isset($_POST['moveFile']))
                {
                    $fileName = $_FILES['fileName']['name'];
                    $tempName = $_FILES['fileName']['tmp_name'];
                    
                    if(isset($fileName))
                    {
                        if(!empty($fileName))
                        {
                            $location = "uploads";
                            if(move_uploaded_file($tempName, $location.$fileName))
                            {
                                echo 'File Uploaded';
                            }
                        }
                    }
                }

        return false;
    }
    
    public function actionBeginforecasting()
    {
        return $this->render('beginforecasting');
    }

    public function actionTables()
    {
        return $this->render('tables');
    }
    public function actionCharts()
    {
        return $this->render('charts');
    }

}

