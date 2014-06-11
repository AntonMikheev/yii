<?php

class ReviewsController extends Controller
{
    public function actionIndex() {
        $this->render('index');
    }

    public function actionAllreviews() {

        $data = Yii::app()->db->createCommand('SELECT * FROM reviews')->queryAll();
        $json = json_encode($data);
        $this->render('/Reviews/allreviews', array('data' => $json));

    }

    public function actionSinglereview($id) {

        $data = Reviews::model()->findByPk($id);
        $this->render('/Reviews/singlereview', array('data' => $data));

    }

    public function actionDelReviews($id) {

        if(Yii::app()->user->checkAccess('moderator')){
            Reviews::model()->deleteByPk($id);
            $this->redirect(array('reviews/allreviews'));
        }
        else {
            $this->redirect(array('reviews/allreviews'));
        }
    }

    public function actionAddReview() {
        $modeltag = Tags::model()->findAll(
            array('order' => 'name'));
        $list = CHtml::listData($modeltag,
            'id', 'name');
        $model = new Reviews;
        if (Yii::app()->request->getPost('Reviews')) {
            $model->attributes = Yii::app()->request->getPost('Reviews');
            if (!$model->save()) {
                throw new Exception(CVarDumper::dumpAsString($model->getErrors()));
            }
            $this->redirect(array('reviews/allreviews'));
        }
        $this->render('/Reviews/addreview', array('model' => $model, 'list' =>$list));

    }

    public function actionEditReview($id) {

        $model = Reviews::model()->findByPk($id);
        if (Yii::app()->request->getPost('Reviews')) {
            $model->attributes = Yii::app()->request->getPost('Reviews');
            if (!$model->save()) {
                throw new Exception(CVarDumper::dumpAsString($model->getErrors()));
            }
            $this->redirect(array('reviews/allreviews'));
        }
        $this->render('/Reviews/editreview', array('model' => $model));

    }

    // Uncomment the following methods and override them if needed
    /*
    public function filters()
    {
        // return the filter configuration for this controller, e.g.:
        return array(
            'inlineFilterName',
            array(
                'class'=>'path.to.FilterClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }

    public function actions()
    {
        // return external action classes, e.g.:
        return array(
            'action1'=>'path.to.ActionClass',
            'action2'=>array(
                'class'=>'path.to.AnotherActionClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }
    */
}