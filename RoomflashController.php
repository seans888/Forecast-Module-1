<?php

namespace backend\controllers;

use Yii;
use backend\models\roomflash;
use backend\models\roomflashSearch;
use backend\models\monthyear;
use backend\models\monthyearSearch;
use backend\models\roomsegmentation;
use backend\models\roomsegmentationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RoomflashController implements the CRUD actions for roomflash model.
 */
class RoomflashController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
			'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'only' => ['index', 'create','update','view','delete'],
                'rules' => [
                    [
                        'actions' => ['index', 'create','update','view','delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all roomflash models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new roomflashSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single roomflash model.
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
     * Creates a new roomflash model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new roomflash();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing roomflash model.
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
     * Deletes an existing roomflash model.
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
     * Finds the roomflash model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return roomflash the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = roomflash::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionImportExcel1()
    {
        $inputFile = 'uploads/January2016Flash.xlsx';

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

        $var=Yii::$app->db->createCommand('SELECT SUM(actualR) FROM roomsegmentation where roomType IN ("Rack", "Corporate", "Corporate Others","Packages/Promo","Wholesale Online","Wholesale Offline","Individual Others","Industry Rate")')->execute();
        $var1= Yii::$app->db->createCommand('SELECT SUM(actualR) FROM roomsegmentation where roomType IN ("Corporate Meetings","Convention/Association","Govt/NGOs","Group Tours","Group Others")')->execute();




        for ( $row = 1; $row <= $highestRow; $row++)
        {
            $rowData = $sheet->rangeToArray('A'.$row.':'.$highestColumn.$row,NULL,TRUE,FALSE);

            if($row==1)
            {
                continue;
            }

            $monthYear = new monthyear();
            $roomflash = new roomflash();
            $id = $rowData[0][0];

            $roomflash->roomOtherActual=$rowData[0][1];
            $roomflash->roomAvailableActual=$rowData[0][2];

            $roomflash->roomIndividualLF=$rowData[0][3];
            $roomflash->roomGroupLF=$rowData[0][4];
            $roomflash->roomOtherLF=$rowData[0][5];
            $roomflash->roomAvailableLF=$rowData[0][6];
            $roomflash->roomSoldLF=$rowData[0][7];

            $roomflash->roomIndividualBudget=$rowData[0][8];
            $roomflash->roomGroupBudget=$rowData[0][9];
            $roomflash->roomOtherBudget=$rowData[0][10];
            $roomflash->roomAvailableBudget=$rowData[0][11];
            $roomflash->roomSoldBudget=$rowData[0][12];

            $roomflash->roomIndividualLY=$rowData[0][13];
            $roomflash->roomGroupLY=$rowData[0][14];
            $roomflash->roomOtherLY=$rowData[0][15];
            $roomflash->roomAvailableLY=$rowData[0][16];
            $roomflash->roomSoldLY=$rowData[0][17];

            //ROOM REVENUES

            $roomflash->roomIndividualActual=Yii::$app->db->createCommand('SELECT SUM(actualR) FROM roomsegmentation where roomType IN ("Rack", "Corporate", "Corporate Others","Packages/Promo","Wholesale Online","Wholesale Offline","Individual Others","Industry Rate")')->queryScalar();

            $roomflash->roomGroupActual=Yii::$app->db->createCommand('SELECT SUM(actualR) FROM roomsegmentation where roomType IN ("Corporate Meetings","Convention/Association","Govt/NGOs","Group Tours","Group Others")')->queryScalar();



            $roomflash->roomRevenueActual=$roomflash->roomGroupActual+$roomflash->roomIndividualActual+$roomflash->roomOtherActual;

            //ROOM NIGHTS SOLD
            $totalIndividualRooms=Yii::$app->db->createCommand('SELECT SUM(actualRNS) FROM roomsegmentation where roomType IN ("Rack", "Corporate", "Corporate Others","Packages/Promo","Wholesale Online","Wholesale Offline","Individual Others","Industry Rate")')->queryScalar();

            //Yii::$app->db->createCommand()->insert('roomflash', ['totalIndividualRooms' => (Yii::$app->db->createCommand('SELECT SUM(actualR) FROM roomsegmentation where roomType IN ("Rack", "Corporate", "Corporate Others","Packages/Promo","Wholesale Online","Wholesale Offline","Individual Others","Industry Rate")')->execute())])->execute();


            $totalGroupRooms=Yii::$app->db->createCommand('SELECT SUM(actualRNS) FROM roomsegmentation where roomType IN ("Corporate Meetings","Convention/Association","Govt/NGOs","Group Tours","Group Others")')->queryScalar();
            //ACTUAL
            $roomflash->roomSoldActual=$totalIndividualRooms+$totalGroupRooms;
            $roomflash->occupancyActual=(($roomflash->roomSoldActual/$roomflash->roomAvailableActual))*100;
            $roomflash->adrActual=(($roomflash->roomIndividualActual + $roomflash->roomGroupActual)/$roomflash->roomSoldActual);
            $roomflash->roomRevParActual=(($roomflash->roomIndividualActual + $roomflash->roomGroupActual)/$roomflash->roomAvailableActual);

            //LF
            $roomflash->roomRevenueLF=$roomflash->roomIndividualLF + $roomflash->roomGroupLF + $roomflash->roomOtherLF;
            $roomflash->occupancyLF=(($roomflash->roomSoldLF/$roomflash->roomAvailableLF))*100;
            $roomflash->adrLF=(($roomflash->roomIndividualLF + $roomflash->roomGroupLF)/$roomflash->roomSoldLF);
            $roomflash->roomRevParLF=(($roomflash->roomIndividualLF+ $roomflash->roomGroupLF)/$roomflash->roomAvailableLF);
            
            //BUDGET
            $roomflash->roomRevenueBudget=$roomflash->roomIndividualBudget + $roomflash->roomGroupBudget + $roomflash->roomOtherBudget;
            $roomflash->occupancyBudget=(($roomflash->roomSoldBudget/$roomflash->roomAvailableBudget))*100;
            $roomflash->adrBudget=(($roomflash->roomIndividualBudget + $roomflash->roomGroupBudget)/$roomflash->roomSoldBudget);
            $roomflash->roomRevParBudget=(($roomflash->roomIndividualBudget+ $roomflash->roomGroupBudget)/$roomflash->roomAvailableBudget);

            //LAST YEAR
            $roomflash->roomRevenueLY=$roomflash->roomIndividualLY+ $roomflash->roomGroupLY + $roomflash->roomOtherLY;
            $roomflash->occupancyLY=(($roomflash->roomSoldLY/$roomflash->roomAvailableLY))*100;
            $roomflash->adrLY=(($roomflash->roomIndividualLY + $roomflash->roomGroupLY)/$roomflash->roomSoldLY);
            $roomflash->roomRevParLY=(($roomflash->roomIndividualLY+ $roomflash->roomGroupLY)/$roomflash->roomAvailableLY);

            //VARIANCE VS BUDGET (VVB)
            $roomflash->roomRevenueVVB=((($roomflash->roomRevenueActual - $roomflash->roomRevenueBudget)/$roomflash->roomRevenueBudget)*100);
            $roomflash->roomIndividualVVB=((($roomflash->roomIndividualActual - $roomflash->roomIndividualBudget)/$roomflash->roomIndividualBudget)*100);
            $roomflash->roomGroupVVB=((($roomflash->roomGroupActual - $roomflash->roomGroupBudget)/$roomflash->roomGroupBudget)*100);
            $roomflash->roomOtherVVB=((($roomflash->roomOtherActual - $roomflash->roomOtherBudget)/$roomflash->roomOtherBudget)*100);
            $roomflash->roomAvailableVVB=((($roomflash->roomAvailableActual - $roomflash->roomAvailableBudget)/$roomflash->roomAvailableBudget)*100);
            $roomflash->roomSoldVVB=((($roomflash->roomSoldActual- $roomflash->roomSoldBudget)/$roomflash->roomSoldBudget)*100);
            $roomflash->occupancyVVB=((($roomflash->occupancyActual - $roomflash->occupancyBudget)/$roomflash->occupancyBudget)*100);
            $roomflash->adrVVB=((($roomflash->adrActual - $roomflash->adrBudget)/$roomflash->adrBudget)*100);
            $roomflash->roomRevParVVB=((($roomflash->roomRevParActual - $roomflash->roomRevParBudget)/$roomflash->roomRevParBudget)*100);

            //VARIANCE VS LAST YEAR (VVLY)
             $roomflash->roomRevenueVVLY=((($roomflash->roomRevenueActual - $roomflash->roomRevenueLY)/$roomflash->roomRevenueLY)*100);
            $roomflash->roomIndividualVVLY=((($roomflash->roomIndividualActual - $roomflash->roomIndividualLY)/$roomflash->roomIndividualLY)*100);
            $roomflash->roomGroupVVLY=((($roomflash->roomGroupActual - $roomflash->roomGroupLY)/$roomflash->roomGroupLY)*100);
            $roomflash->roomOtherVVLY=((($roomflash->roomOtherActual - $roomflash->roomOtherLY)/$roomflash->roomOtherLY)*100);
            $roomflash->roomAvailableVVLY=((($roomflash->roomAvailableActual - $roomflash->roomAvailableLY)/$roomflash->roomAvailableLY)*100);
            $roomflash->roomSoldVVLY=((($roomflash->roomSoldActual- $roomflash->roomSoldLY)/$roomflash->roomSoldLY)*100);
            $roomflash->occupancyVVLY=((($roomflash->occupancyActual - $roomflash->occupancyLY)/$roomflash->occupancyLY)*100);
            $roomflash->adrVVLY=((($roomflash->adrActual - $roomflash->adrLY)/$roomflash->adrLY)*100);
            $roomflash->roomRevParVVLY=((($roomflash->roomRevParActual - $roomflash->roomRevParLY)/$roomflash->roomRevParLY)*100);


            //$roomsegmentation->monthYear_id=monthYear::find('id')->where(['month'=='January','year'=='2016'])->execute;
            $roomflash->monthYear_id=Yii::$app->db->createCommand('SELECT id FROM monthYear where month = "January" AND year = "2016"')->execute();


            $roomflash->save();

            print_r($roomflash->getErrors());



        }

            die('okay');
    }
    public function actionTotal()
    {
        $monthYear = new monthyear();
        $roomflash = new roomflash();
        //$totalIndividualRooms=Yii::$app->db->createCommand('SELECT SUM(actualR) FROM roomsegmentation where roomType IN ("Rack", "Corporate", "Corporate Others","Packages/Promo","Wholesale Online","Wholesale Offline","Individual Others","Industry Rate")')->execute();
        $totalIndividualRooms=Yii::$app->db->createCommand('SELECT roomIndividualActual FROM roomsegmentation where roomType="Rack"')->execute();
        //$totalIndividualRooms=Yii::$app->db->createCommand('SELECT SUM(actualR) FROM roomsegmentation where roomType IN ("Rack", "Corporate", "Corporate Others","Packages/Promo","Wholesale Online","Wholesale Offline","Individual Others","Industry Rate")')->queryScalar();
      // $expression  = monthyear::Find()
      //->select(['id'])
     // //->from('monthYear')
     // ->where(['month' => 'February'])
      // ->one();

        print_r ($totalIndividualRooms);
    }
}

