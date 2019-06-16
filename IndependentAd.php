<?php

namespace app\widgets\independentad;
use app\modules\independentad\models\IndependentAd as IndependentAdModel;

use yii\base\Widget;

class IndependentAd extends Widget {

    public function run(){
        $inad = IndependentAdModel::find()->orderBy(["independentad_id" => SORT_DESC])->one();
        if(count($inad) == 0)
            return;
        return $this->render('index', [
            'link' => $inad->link,
            'src' => $inad->src,
            'title' => $inad->title,
        ]);
    }

}