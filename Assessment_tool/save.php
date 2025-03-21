<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
include "config.php";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $details = '"' . implode('","', json_decode($_REQUEST['details'])) . '"'; // serialize($_REQUEST['tab']);
    $purpose = '"' . implode('","', json_decode($_REQUEST['purpose'])) . '"';
    $stakeholders = '"' . implode('","', json_decode($_REQUEST['stakeholders'])) . '"';

    $col_details = "status, affected";
    $col_purpose = "p_question1, p_question2, p_question3, p_question4, p_question5, p_question6, p_question1_s";
    $col_stakeholders = "s_question1, s_question2, s_question3, s_question4, s_question5, s_question6, s_question7";

    $sql0 = "INSERT INTO details ($col_details) VALUES ($details)"; //already in "csv"
    $sql1 = "INSERT INTO purpose ($col_purpose) VALUES ($purpose)";
    $sql2 = "INSERT INTO stakeholders ($col_stakeholders) VALUES ($stakeholders)";

    try {
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();
        $stmt = $db->prepare($sql0);
        $stmt->execute();
        $stmt = $db->prepare($sql1);
        $stmt->execute();
        $stmt = $db->prepare($sql2);
        $stmt->execute();
        $db = null;
    }
    catch(PDOException $e) {
        echo '{"error": {"text": "' . $e->getMessage() . '"}}';
    }
}

