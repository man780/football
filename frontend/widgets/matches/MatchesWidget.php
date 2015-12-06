<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 11/26/15
 * Time: 10:33 AM
 * To change this template use File | Settings | File Templates.
 */
namespace frontend\widgets\matches;

use yii\base\Widget;
use yii\helpers\Html;
use backend\models\Matches;
use backend\models\Clubs;

class MatchesWidget extends Widget
{
    //public $message;
    public $count;
    public $offset;
    //For Example $colWidthArr => [45, 50, 100];
    public $colWidthArr = [45, 40, 220, 50];
    public $tableClass = '';
    //Fields of Matchs table in array
    //For Example $matchesColumns => ['date', 'id_team1', 'id_team2', 'score1', 'score2'];
    public $matchesFieldsArr = [];
    //
    //For Example $matchesColumns => ['day Month', 'time', 'id_team1', 'id_team2', 'score1', 'score2'];
    public $tableColumns = [];

    // return $table
    public $table;

    public function init()
    {
        parent::init();

        if ($this->count === null) {
            $this->count = 5;
        }
        if ($this->colWidthArr === null) {
            $this->colWidthArr = [45, 40, 220, 50];
        }
        if ($this->matchesFieldsArr === null) {
            $this->matchesFieldsArr = ['date', 'id_team1', 'id_team2', 'score1', 'score2'];
        }
        /*if ($this->table === null) {
            $this->table = 'Matches not found';
        }*/
    }

    public function run()
    {
        $this->table = $this->getMatchesTable();
        //vd($this->table);
        return ($this->table);
    }

    private function getMatchesTable(){
        $matches = Matches::find($this->matchesFieldsArr)->where('date<'.(time()+7*24*3600))->limit($this->count)->offset($this->offset)->orderBy(['id'=>SORT_DESC])->all();
        $table = "<table class='".$this->tableClass."'>";
        $table .= "<colgroup>";
        //vd($this->colWidthArr);
        foreach($this->colWidthArr as $colWidth){
            $table .= "<col span='1' width='".$colWidth."px'></col>";
        }
        $table .= "</colgroup><tbody>";
        foreach($matches as $match){
            /*$score1 = (is_int($match->score1))?$match->score1:'';
            $score2 = (is_int($match->score2))?$match->score2:'';*/
            $table .= "<tr>";
            //$table .= "<td>."."</td>";
            $table .= "<td>".date('d M', $match->date)."</td>";
            $table .= "<td>".date('H:i', $match->date)."</td>";
            $table .= "<td class='centext'>".Clubs::getClubName($match->id_team1).' - '.Clubs::getClubName($match->id_team2)."</td>";
            $table .= "<td class='countTb'>".$match->score1.' - '.$match->score2."</td>";
            /*for($i=0;$i<count($this->colWidthArr);$i++){
                $table .= "<td>."."</td>";
            }*/
            $table .= "</tr>";
        }
        $table .= "</tbody></table>";
        return $table;
    }
}