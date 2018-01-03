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
		$results =(new \yii\db\Query())
		->select('my.month, rf.OccupancyActual, rf.OccupancyLY, rf.roomRevParActual, rf.roomRevParLY, rf.roomRevenueActual, rf.roomRevenueLY,rf.adrActual, rf.adrLY')
		->from('roomflash rf')
		->join('LEFT JOIN', 'monthyear my', 'my.id = rf.monthYear_id')
		->all();
		$months = array();
		$Occupancy = array();
		$OccupancyLY = array();
		$roomRevPar = array();
		$roomRevParLY = array();
		$roomRevenue = array();
		$roomRevenueLY = array();
		$adr = array();
		$adrLY = array();
		foreach($results as $result){
			array_push($months, $result['month']);
			array_push($Occupancy, (int)$result['OccupancyActual']);
			array_push($roomRevPar, (int)$result['roomRevParActual']);
			array_push($roomRevenue, (int)$result['roomRevenueActual']);
			array_push($OccupancyLY, (int)$result['OccupancyLY']);
			array_push($roomRevParLY, (int)$result['roomRevParLY']);
			array_push($roomRevenueLY, (int)$result['roomRevenueLY']);
			array_push($adr, (int)$result['adrActual']);
			array_push($adrLY, (int)$result['adrLY']);
		}
		
		$individual =(new \yii\db\Query())
		->select('sum(rs.actualRNS) as total')
		->from('roomsegmentation rs')
		->where("rs.roomType in ('Rack','Corporate','Corporate Others','Packages/Promo','Wholesale Online','Wholesale Offline','Individual Others','Industry Rate')")
		->all();
		
		$group =(new \yii\db\Query())
		->select('sum(rs.actualRNS) as total')
		->from('roomsegmentation rs')
		->where("rs.roomType in ('Corporate Meetings','Convention/Association','Govt/NGOs','Group Tours','Group Others')")
		->all();
		
		$roomsoldls =(new \yii\db\Query())
		->select('sum(rf.roomSoldLY) as total')
		->from('roomflash rf')
		->all();
		
		$roomavailable =(new \yii\db\Query())
		->select('sum(rf.roomAvailableActual) as total')
		->from('roomflash rf')
		->all();
		
        return $this->render('index', [
			'months' =>$months ,
			'Occupancy' => array('name'=>'Occupancy', 'data'=>$Occupancy),
			'OccupancyLY' => array('name'=>'Occupancy LY', 'data'=>$OccupancyLY),
			'roomRevPar' => array('name'=>'Room RevPar', 'data'=>$roomRevPar),
			'roomRevParLY' => array('name'=>'Room RevPar LY', 'data'=>$roomRevParLY),
			'adr' => array('name'=>'ADR', 'data'=>$adr),
			'adrLY' => array('name'=>'ADR LY', 'data'=>$adrLY),
			'individual' => $individual[0]['total'],
			'group' => $group[0]['total'],
			'roomsoldls' => $roomsoldls[0]['total'],
			'roomavailable' => $roomavailable[0]['total']
			
		]);
		
		
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
    public function actionExportreports()
    {
        return $this->render('exportreports');
    }

    public function actionTables()
    {
        return $this->render('tables');
    }
    public function actionCharts()
    {
		$results =(new \yii\db\Query())
		->select('my.month, rf.OccupancyActual, rf.OccupancyLY, rf.roomRevParActual, rf.roomRevParLY, rf.roomRevenueActual, rf.roomRevenueLY,rf.adrActual, rf.adrLY')
		->from('roomflash rf')
		->join('LEFT JOIN', 'monthyear my', 'my.id = rf.monthYear_id')
		->all();
		$months = array();
		$Occupancy = array();
		$OccupancyLY = array();
		$roomRevPar = array();
		$roomRevParLY = array();
		$roomRevenue = array();
		$roomRevenueLY = array();
		$adr = array();
		$adrLY = array();
		foreach($results as $result){
			array_push($months, $result['month']);
			array_push($Occupancy, (int)$result['OccupancyActual']);
			array_push($roomRevPar, (int)$result['roomRevParActual']);
			array_push($roomRevenue, (int)$result['roomRevenueActual']);
			array_push($OccupancyLY, (int)$result['OccupancyLY']);
			array_push($roomRevParLY, (int)$result['roomRevParLY']);
			array_push($roomRevenueLY, (int)$result['roomRevenueLY']);
			array_push($adr, (int)$result['adrActual']);
			array_push($adrLY, (int)$result['adrLY']);
		}
		
		$results2 =(new \yii\db\Query())
		->select('my.month, rs.actualRNS, rs.lastYearRNS, rs.actualARR, rs.lastYearARR')
		->from('roomsegmentation rs')
		->join('LEFT JOIN', 'monthyear my', 'my.id = rs.monthYear_id')
		->all();
		$months = array();		
		$rns = array();
		$arr = array();		
		$rnsLY = array();
		$arrLY = array();
		foreach($results2 as $result){
			array_push($months, $result['month']);
			array_push($rns, (int)$result['actualRNS']);
			array_push($rnsLY, (int)$result['lastYearRNS']);
			array_push($arr, (int)$result['actualARR']);
			array_push($arrLY, (int)$result['lastYearARR']);
		}
		
        return $this->render('charts', [
			'results' => $results, 
			'months' =>$months , 
			'Occupancy' => array('name'=>'Occupancy', 'data'=>$Occupancy),
			'OccupancyLY' => array('name'=>'Occupancy LY', 'data'=>$OccupancyLY),
			'roomRevPar' => array('name'=>'Room RevPar', 'data'=>$roomRevPar),
			'roomRevParLY' => array('name'=>'Room RevPar LY', 'data'=>$roomRevParLY),
			'roomRevenue' => array('name'=>'Room Revenue', 'data'=>$roomRevenue),
			'roomRevenueLY' => array('name'=>'Room Revenue LY', 'data'=>$roomRevenueLY),
			'adr' => array('name'=>'ADR', 'data'=>$adr),
			'adrLY' => array('name'=>'ADR LY', 'data'=>$adrLY),
			'rns' => array('name'=>'RNS', 'data'=>$rns),
			'rnsLY' => array('name'=>'RNS LY', 'data'=>$rnsLY),
			'arr' => array('name'=>'ARR', 'data'=>$arr),
			'arrLY' => array('name'=>'ARR LY', 'data'=>$arrLY)
		]);	
    }
    public function actionForecast()
    {
    	$results =(new \yii\db\Query())
		->select('my.month, rf.OccupancyActual, rf.OccupancyLY, rf.roomRevParActual, rf.roomRevParLY, rf.roomRevenueActual, rf.roomRevenueLY,rf.adrActual, rf.adrLY')
		->from('roomflash rf')
		->join('LEFT JOIN', 'monthyear my', 'my.id = rf.monthYear_id')
		->all();

		$months = array();
		$Occupancy = array();
		$OccupancyLY = array();
		$roomRevPar = array();
		$roomRevParLY = array();
		$roomRevenue = array();
		$roomRevenueLY = array();
		$adr = array();
		$adrLY = array();
		foreach($results as $result){
			array_push($months, $result['month']);
			array_push($Occupancy, (int)$result['OccupancyActual']);
			array_push($roomRevPar, (int)$result['roomRevParActual']);
			array_push($roomRevenue, (int)$result['roomRevenueActual']);
			array_push($OccupancyLY, (int)$result['OccupancyLY']);
			array_push($roomRevParLY, (int)$result['roomRevParLY']);
			array_push($roomRevenueLY, (int)$result['roomRevenueLY']);
			array_push($adr, (int)$result['adrActual']);
			array_push($adrLY, (int)$result['adrLY']);
		}
		
		$individual =(new \yii\db\Query())
		->select('sum(rs.actualRNS) as total')
		->from('roomsegmentation rs')
		->where("rs.roomType in ('Rack','Corporate','Corporate Others','Packages/Promo','Wholesale Online','Wholesale Offline','Individual Others','Industry Rate')")
		->all();
		
		$group =(new \yii\db\Query())
		->select('sum(rs.actualRNS) as total')
		->from('roomsegmentation rs')
		->where("rs.roomType in ('Corporate Meetings','Convention/Association','Govt/NGOs','Group Tours','Group Others')")
		->all();
		
		$roomsoldls =(new \yii\db\Query())
		->select('sum(rf.roomSoldLY) as total')
		->from('roomflash rf')
		->all();
		
		$roomavailable =(new \yii\db\Query())
		->select('sum(rf.roomAvailableActual) as total')
		->from('roomflash rf')
		->all();

		$results2 =(new \yii\db\Query())
		->select('my.month, rs.actualRNS, rs.lastYearRNS, rs.actualARR, rs.lastYearARR')
		->from('roomsegmentation rs')
		->join('LEFT JOIN', 'monthyear my', 'my.id = rs.monthYear_id')
		->all();
		$months = array();		
		$rns = array();
		$arr = array();		
		$rnsLY = array();
		$arrLY = array();
		foreach($results2 as $result){
			array_push($months, $result['month']);
			array_push($rns, (int)$result['actualRNS']);
			array_push($rnsLY, (int)$result['lastYearRNS']);
			array_push($arr, (int)$result['actualARR']);
			array_push($arrLY, (int)$result['lastYearARR']);
		}
		
        return $this->render('forecast', [
			'months' =>$months ,
			'Occupancy' => array('name'=>'Occupancy', 'data'=>$Occupancy),
			'OccupancyLY' => array('name'=>'Occupancy LY', 'data'=>$OccupancyLY),
			'roomRevPar' => array('name'=>'Room RevPar', 'data'=>$roomRevPar),
			'roomRevParLY' => array('name'=>'Room RevPar LY', 'data'=>$roomRevParLY),
			'adr' => array('name'=>'ADR', 'data'=>$adr),
			'adrLY' => array('name'=>'ADR LY', 'data'=>$adrLY),
			'individual' => $individual[0]['total'],
			'group' => $group[0]['total'],
			'roomsoldls' => $roomsoldls[0]['total'],
			'rns' => array('name'=>'RNS', 'data'=>$rns),
			'roomavailable' => $roomavailable[0]['total']
			
		]);
    	//return $this->render('forecast');
    }

}

