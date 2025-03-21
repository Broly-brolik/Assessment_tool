<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
include "config.php";
if($_SERVER["REQUEST_METHOD"] == "GET") {
    $sql0 = "SELECT * FROM `details`, purpose, stakeholders WHERE details.ID=purpose.ID AND details.ID=stakeholders.ID"; 
    try {
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();
        $stmt = $db->query($sql0);
        $mysql_result = $stmt->fetchAll(PDO::FETCH_OBJ);
        $result = array();
        $index = 0;
        foreach($mysql_result as $data){
            $result[$index][]=$data->ID;
            $result[$index][]=$data->status; //create an object with attribute status
            $result[$index][]=$data->affected;
            $result[$index][]=$data->p_question1;
            $result[$index][]=$data->p_question1_s;
            $result[$index][]=$data->p_question2;
            $result[$index][]=$data->p_question3;
            $result[$index][]=$data->p_question4;
            $result[$index][]=$data->p_question5;
            $result[$index][]=$data->p_question6;
            $result[$index][]=$data->s_question1;
            $result[$index][]=$data->s_question2;
            $result[$index][]=$data->s_question3;
            $result[$index][]=$data->s_question4;
            $result[$index][]=$data->s_question5;
            $result[$index][]=$data->s_question6;
            $result[$index][]=$data->s_question7;
            $index++;
        }
        $db = null;
        echo json_encode($result);
    }
    catch(PDOException $e) {
        echo '{"error": {"text": "' . $e->getMessage() . '"}}';
    }
}

