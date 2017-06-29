<?php

namespace backend\modules\ordering\controllers;

use Yii;
use backend\models\TblOrder;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\SqlDataProvider;
/**
 * OrderController implements the CRUD actions for TblOrder model.
 */
class OrderController extends Controller
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
     * Lists all TblOrder models.
     * @return mixed
     */
    public function actionIndex()
    {
    $model = \backend\models\TblOrder::find()->all();
    $count = Yii::$app->db->createCommand('SELECT COUNT(*) FROM tbl_order,tbl_customer,tbl_product where tbl_order.cus_id=tbl_customer.cus_id and tbl_order.pro_id=tbl_product.pro_id order by tbl_order.order_id')->queryScalar();
    $sql="SELECT * FROM tbl_order,tbl_customer,tbl_product where tbl_order.cus_id=tbl_customer.cus_id and tbl_order.pro_id=tbl_product.pro_id order by tbl_order.order_id";
    $dataProvider = new SqlDataProvider([
                    'sql' => $sql,
                    'totalCount' => $count,
                    ]);

    return $this->render('index', [
        'dataProvider' => $dataProvider,
        'model' => $model,
    ]);
    }
    
        public function actionReport()
    {
    $model = \backend\models\TblOrder::find()->all();
    $count = Yii::$app->db->createCommand('SELECT COUNT(*) from tbl_order,tbl_customer,tbl_product where tbl_order.cus_id=tbl_customer.cus_id and tbl_order.pro_id=tbl_product.pro_id group by tbl_customer.cus_id')->queryScalar();
    $sql="select tbl_customer.cus_name,COUNT(tbl_order.order_id)as amount,sum(tbl_product.pro_price) as total from tbl_order,tbl_customer,tbl_product where tbl_order.cus_id=tbl_customer.cus_id and tbl_order.pro_id=tbl_product.pro_id group by tbl_customer.cus_id";
    $dataProvider = new SqlDataProvider([
                    'sql' => $sql,
                    'totalCount' => $count,
                    ]);

    return $this->render('report', [
        'dataProvider' => $dataProvider,
        'model' => $model,
    ]);
    }


    public function actionCreate()
    {
        $model = new TblOrder();
        $customer = \backend\models\TblCustomer::find()->all();
        $product = \backend\models\TblProduct::find()->all();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
                'customer' => $customer,
                'product' => $product,
            ]);
        }
    }


    protected function findModel($id)
    {
        if (($model = TblOrder::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
