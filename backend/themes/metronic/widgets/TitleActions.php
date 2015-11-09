<?php
/**
 * @author Aripjanov Sherzod <sherzod@aripjanov.pro> (http://www.aripjanov.pro)
 * @version 0.1
 */

namespace backend\themes\admin\widgets;


use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\VarDumper;

class TitleActions extends Widget
{

    public function run()
    {
        $actions = $this->view->params['actions'];
        $titleActions = '';
        if(isset($actions)) {
            foreach($actions as $action)
            {
                $titleActions .= Html::a($action['label'],$action['url'],['class' => 'btn btn-success']);
            }
        }

        return '<div class="pull-right" style="margin-top: -6px;">'.$titleActions.'</div>';
    }
} 