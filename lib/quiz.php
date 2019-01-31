<?php

class SPTUNEQuestion{

  private $array_for_json_qc;
  private $array_for_json_ans;

  public function display_Que_and_Cho($array_index){

    require_once(__DIR__ . '/data.php');

    $this->array_for_json =array(
      "question" => $questions[$array_index],
      "choiceA" => $choices[$array_index . '-A'],
      "choiceB" => $choices[$array_index . '-B'],
    );
    echo json_encode($this->array_for_json_qc);
  }

  public function display_answer($FS_count,$FS_flag){

    require_once(__DIR__ . '/data.php');

    $this->array_for_json2 =array(
      "answer" => $answer[$FS_count . '-' . $FS_flag]
    );
    echo json_encode($this->array_for_json_ans);
  }

}

$Class_question = new SPTUNEQuestion;
  if($_POST['Q_count'] < 4){
    $array_index = $_POST['Q_count'] . '-' . $_POST['FS_count'];
    $Class_question->display_Que_and_Cho($array_index,$_POST['Q_count']);
  }else{
    $Class_question->display_answer($_POST['FS_count'],$_POST['FS_flag']);
  }