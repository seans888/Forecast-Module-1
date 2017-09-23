<?php

namespace backend\controllers;


use Yii;
use backend\models\roomsegmentation;
use backend\models\roomsegmentationSearch;
use backend\models\monthyear;
use backend\models\monthyearSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * RoomsegmentationController implements the CRUD actions for roomsegmentation model.
 */
class RoomsegmentationController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all roomsegmentation models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new roomsegmentationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single roomsegmentation model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new roomsegmentation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new roomsegmentation();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing roomsegmentation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing roomsegmentation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the roomsegmentation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return roomsegmentation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = roomsegmentation::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
     public function actionImportExcel()
    {
        $inputFile = 'uploads/January2016RoomSegment.xlsx';

        try{        

            $inputFileType= \PHPExcel_IOFactory::identify($inputFile);
            $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFile);

        }catch(Exception $e)
        {
            die('Error');
        }

        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();
        $val = 2;
        for ( $row = 1; $row <= $highestRow; $row++)
        {
            $rowData = $sheet->rangeToArray('A'.$row.':'.$highestColumn.$row,NULL,TRUE,FALSE);

            if($row==1)
            {
                continue;
            }

            $roomsegmentation = new roomsegmentation();
            $monthYear = new monthyear();
            $id = $rowData[0][0];
            $roomsegmentation->roomType=$rowData[0][1];
            $roomsegmentation->actualRNS=$rowData[0][2];
            $roomsegmentation->budgetRNS=$rowData[0][3];
            $roomsegmentation->lastYearRNS=$rowData[0][4];
            $roomsegmentation->actualARR=$rowData[0][5];
            $roomsegmentation->budgetARR=$rowData[0][6];
            $roomsegmentation->lastYearARR=$rowData[0][7];

            $roomsegmentation->growthRateRNS=(($roomsegmentation->actualRNS/$roomsegmentation->budgetRNS)-1)*100;
            $roomsegmentation->growthRateARR=(($roomsegmentation->actualARR/$roomsegmentation->budgetARR)-1)*100;
            $roomsegmentation->actualR=$roomsegmentation->actualRNS*$roomsegmentation->actualARR;
            $roomsegmentation->budgetR=$roomsegmentation->budgetRNS*$roomsegmentation->budgetARR;
            $roomsegmentation->lastYearR=$roomsegmentation->lastYearRNS*$roomsegmentation->lastYearARR;
            $roomsegmentation->growthRateR=(($roomsegmentation->actualR/$roomsegmentation->budgetR)-1)*100;
            //$roomsegmentation->growthRateR=Yii::$app->db->createCommand('SELECT actualR FROM roomsegmentation where roomType = "Rack"')->execute();
            //$roomsegmentation->monthYear_id=monthYear::find('id')->where(['month'=='January','year'=='2016']);
            //WORKING X
            //$roomsegmentation->monthYear_id=Yii::$app->db->createCommand('SELECT id FROM monthYear where month = "February" AND year = "2016"')->execute();
           

            ///LATEST
            //$roomsegmentation->monthYear_id=Yii::$app->db->createCommand('INSERT INTO roomsegmentation SET monthYear_id  = (SELECT id FROM monthyear where month = "February")')->quearyScalar();

            $roomsegmentation->monthYear_id=$val;
            //$query-> );
            //Yii::$app->db->createCommand()->insert(['roomsegmentation'], ['monthYear_id' => monthyear::find()->select('id')->where(['month'='February']])->execute();
            

            //$roomsegmentation->monthYear_id=Yii::$app->db->createCommand('SELECT monthyear.id FROM monthyear where monthyear.month = "February"')->execute();

            //$roomsegmentation->monthYear_id=Yii::$app->db->createCommand('SELECT roomsegmentation (monthYear_id) SELECT id FROM monthyear where month = "February" LIMIT 1')->queryOne();
            //$roomsegmentation->monthYear_id = monthyear::find('id')->where(['month' => 'January', 'year' => '2016']);
            //$roomsegmentation->monthYear_id  = (new \yii\db\Query())->select(['monthYear_id'])
            //                                ->from('roomsegmentation')
            //                                ->where(['month' => 'February'])
            //                                ->one();

            //CURRENT 
            //$roomsegmentation->monthYear_id= Yii::$app->db->createCommand('SELECT monthYear_id FROM roomsegmentation where (SELECT id FROM monthyear WHERE month = "February")')->queryColumn();
            //$subQuery = monthyear::find()->select('id')->where(['month'='February']);
            //$query = roomsegmentation::find()->select('monthyear_id')->where([$subQuery]);
            //$models = $query->one();
            //$roomsegmentation->monthYear_id = (new \yii\db\Query())->select('id')->from('monthYear')->where('month'="February")->queryOne());
            //$roomsegmentation->monthYear_id= (new Query())->select(['monthyear_id'])->from('roomsegmentation')->where();
          // $expression  = monthyear::Find()
      //->select(['id'])
     // //->from('monthYear')
     // ->where(['month' => 'February'])
      // ->one();
            //$totalIndividualRooms=Yii::$app->db->createCommand('SELECT SUM(actualR) FROM roomsegmentation where roomType IN ("Rack", "Corporate", "Corporate Others","Packages/Promo","Wholesale Online","Wholesale Offline","Individual Others","Industry Rate")')->execute();
        
            print_r($roomsegmentation->monthYear_id);
            $roomsegmentation->save();
            

            //print_r($roomsegmentation->getErrors());



        }

            die('okay');
    }
    public function actionTotal()
    {
        $monthYear = new monthyear();
        $roomflash = new roomsegmentation();
        


        $totalIndividualRooms=Yii::$app->db->createCommand('SELECT SUM(actualR) FROM roomsegmentation where roomType IN ("Rack", "Corporate", "Corporate Others","Packages/Promo","Wholesale Online","Wholesale Offline","Individual Others","Industry Rate")')->queryScalar();
        
        
     

        print_r ($totalIndividualRooms);
    }

}
