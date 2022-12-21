<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require 'php-includes/connect.php';
//echo $time=date_default_timezone_get();
$time = date('Y-m-d h:m:s');
if(isset($_POST['gusohoka1'])){
    //$card = $_POST['gusohoka'];
    $card = "A37AC6AA";
    $query = "SELECT * FROM user WHERE card = ? limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute(array($card));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $user=$rows['id'];
    $balance=$rows['balance'];
    $query = "SELECT * FROM history ORDER BY id DESC limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $praces=$rows['total'];
    $total=$praces-1;
    $query = "SELECT * FROM history WHERE user = ? limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute(array($user));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $entertime=$rows['enter'];
    //calculte amount 
    $query = "SELECT amount FROM price limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $amount=$rows['amount'];
    $pay=$amount;

    if ($pay<=$balance) {
        $newbalance=$balance-$pay;
        $sql ="INSERT INTO history (user,goout,total,amount) VALUES (?,?,?,?)";
        $stm = $db->prepare($sql);
        $stm->execute(array($user,$time,$total,$pay));
        $sql ="UPDATE user SET balance = ? WHERE id = ?";
        $stm = $db->prepare($sql);
        $stm->execute(array($newbalance,$user));
        $data = array('c' => 1,'balance' =>$newbalance);
        echo $response = json_encode($data)."\n";
    } else {
    $data = array('c' =>'10'); 
    echo $response = json_encode($data)."\n";
    }
}
if(isset($_POST['gusohoka2'])){
    //$card = $_POST['gusohoka'];
    $card = "23C4BCAB";
    $query = "SELECT * FROM user WHERE card = ? limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute(array($card));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $user=$rows['id'];
    $balance=$rows['balance'];
    $query = "SELECT * FROM history ORDER BY id DESC limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $praces=$rows['total'];
    $total=$praces-1;
    $query = "SELECT * FROM history WHERE user = ? limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute(array($user));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $entertime=$rows['enter'];
    //calculte amount 
    $query = "SELECT amount FROM price limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $amount=$rows['amount'];
    $pay=$amount;

    if ($pay<=$balance) {
        $newbalance=$balance-$pay;
        $sql ="INSERT INTO history (user,goout,total,amount) VALUES (?,?,?,?)";
        $stm = $db->prepare($sql);
        $stm->execute(array($user,$time,$total,$pay));
        $sql ="UPDATE user SET balance = ? WHERE id = ?";
        $stm = $db->prepare($sql);
        $stm->execute(array($newbalance,$user));
        $data = array('c' => 1,'balance' =>$newbalance);
        echo $response = json_encode($data)."\n";
    } else {
    $data = array('c' =>'10'); 
    echo $response = json_encode($data)."\n";
    }
}
if(isset($_POST['gusohoka3'])){
    //$card = $_POST['gusohoka'];
    $card = "03E338AB";
    $query = "SELECT * FROM user WHERE card = ? limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute(array($card));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $user=$rows['id'];
    $balance=$rows['balance'];
    $query = "SELECT * FROM history ORDER BY id DESC limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $praces=$rows['total'];
    $total=$praces-1;
    $query = "SELECT * FROM history WHERE user = ? limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute(array($user));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $entertime=$rows['enter'];
    //calculte amount 
    $query = "SELECT amount FROM price limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $amount=$rows['amount'];
    $pay=$amount;

    if ($pay<=$balance) {
        $newbalance=$balance-$pay;
        $sql ="INSERT INTO history (user,goout,total,amount) VALUES (?,?,?,?)";
        $stm = $db->prepare($sql);
        $stm->execute(array($user,$time,$total,$pay));
        $sql ="UPDATE user SET balance = ? WHERE id = ?";
        $stm = $db->prepare($sql);
        $stm->execute(array($newbalance,$user));
        $data = array('c' => 1,'balance' =>$newbalance);
        echo $response = json_encode($data)."\n";
    } else {
    $data = array('c' =>'10'); 
    echo $response = json_encode($data)."\n";
    }
}
if(isset($_POST['gusohoka4'])){
    //$card = $_POST['gusohoka'];
    $card = "534BFAB";
    $query = "SELECT * FROM user WHERE card = ? limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute(array($card));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $user=$rows['id'];
    $balance=$rows['balance'];
    $query = "SELECT * FROM history ORDER BY id DESC limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $praces=$rows['total'];
    $total=$praces-1;
    $query = "SELECT * FROM history WHERE user = ? limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute(array($user));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $entertime=$rows['enter'];
    //calculte amount 
    $query = "SELECT amount FROM price limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $amount=$rows['amount'];
    $pay=$amount;

    if ($pay<=$balance) {
        $newbalance=$balance-$pay;
        $sql ="INSERT INTO history (user,goout,total,amount) VALUES (?,?,?,?)";
        $stm = $db->prepare($sql);
        $stm->execute(array($user,$time,$total,$pay));
        $sql ="UPDATE user SET balance = ? WHERE id = ?";
        $stm = $db->prepare($sql);
        $stm->execute(array($newbalance,$user));
        $data = array('c' => 1,'balance' =>$newbalance);
        echo $response = json_encode($data)."\n";
    } else {
    $data = array('c' =>'10'); 
    echo $response = json_encode($data)."\n";
    }
}
if(isset($_POST['gusohoka5'])){
    //$card = $_POST['gusohoka'];
    $card = "9384B2AB";
    $query = "SELECT * FROM user WHERE card = ? limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute(array($card));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $user=$rows['id'];
    $balance=$rows['balance'];
    $query = "SELECT * FROM history ORDER BY id DESC limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $praces=$rows['total'];
    $total=$praces-1;
    $query = "SELECT * FROM history WHERE user = ? limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute(array($user));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $entertime=$rows['enter'];
    //calculte amount 
    $query = "SELECT amount FROM price limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $amount=$rows['amount'];
    $pay=$amount;

    if ($pay<=$balance) {
        $newbalance=$balance-$pay;
        $sql ="INSERT INTO history (user,goout,total,amount) VALUES (?,?,?,?)";
        $stm = $db->prepare($sql);
        $stm->execute(array($user,$time,$total,$pay));
        $sql ="UPDATE user SET balance = ? WHERE id = ?";
        $stm = $db->prepare($sql);
        $stm->execute(array($newbalance,$user));
        $data = array('c' => 1,'balance' =>$newbalance);
        echo $response = json_encode($data)."\n";
    } else {
    $data = array('c' =>'10'); 
    echo $response = json_encode($data)."\n";
    }
}
if(isset($_POST['kwinjira1'])){
    //$card = $_POST['kwinjira'];
    $card = "A37AC6AA";
    $query = "SELECT id FROM user WHERE card = ? limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute(array($card));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $user=$rows['id'];
    $query = "SELECT * FROM history ORDER BY id DESC limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $praces=$rows['total'];
    $total=$praces+1;
    if ($praces<4) {
        $sql ="INSERT INTO history (user,enter,total) VALUES (?,?,?)";
        $stm = $db->prepare($sql);
        $stm->execute(array($user,$time,$total));
        $data = array('c' => 2);
        echo $response = json_encode($data)."\n";
    } else {
    $data = array('c' =>'10'); 
    echo $response = json_encode($data)."\n";
}
}
if(isset($_POST['kwinjira2'])){
    //$card = $_POST['kwinjira'];
    $card = "23C4BCAB";
    $query = "SELECT id FROM user WHERE card = ? limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute(array($card));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $user=$rows['id'];
    $query = "SELECT * FROM history ORDER BY id DESC limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $praces=$rows['total'];
    $total=$praces+1;
    if ($praces<4) {
        $sql ="INSERT INTO history (user,enter,total) VALUES (?,?,?)";
        $stm = $db->prepare($sql);
        $stm->execute(array($user,$time,$total));
        $data = array('c' => 2);
        echo $response = json_encode($data)."\n";
    } else {
    $data = array('c' =>'10'); 
    echo $response = json_encode($data)."\n";
}
}
if(isset($_POST['kwinjira3'])){
    //$card = $_POST['kwinjira'];
    $card = "03E338AB";
    $query = "SELECT id FROM user WHERE card = ? limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute(array($card));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $user=$rows['id'];
    $query = "SELECT * FROM history ORDER BY id DESC limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $praces=$rows['total'];
    $total=$praces+1;
    if ($praces<4) {
        $sql ="INSERT INTO history (user,enter,total) VALUES (?,?,?)";
        $stm = $db->prepare($sql);
        $stm->execute(array($user,$time,$total));
        $data = array('c' => 2);
        echo $response = json_encode($data)."\n";
    } else {
    $data = array('c' =>'10'); 
    echo $response = json_encode($data)."\n";
}
}
if(isset($_POST['kwinjira4'])){
    //$card = $_POST['kwinjira'];
    $card = "534BFAB";
    $query = "SELECT id FROM user WHERE card = ? limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute(array($card));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $user=$rows['id'];
    $query = "SELECT * FROM history ORDER BY id DESC limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $praces=$rows['total'];
    $total=$praces+1;
    if ($praces<4) {
        $sql ="INSERT INTO history (user,enter,total) VALUES (?,?,?)";
        $stm = $db->prepare($sql);
        $stm->execute(array($user,$time,$total));
        $data = array('c' => 2);
        echo $response = json_encode($data)."\n";
    } else {
    $data = array('c' =>'10'); 
    echo $response = json_encode($data)."\n";
}
}
if(isset($_POST['kwinjira5'])){
    //$card = $_POST['kwinjira'];
    $card = "9384B2AB";
    $query = "SELECT id FROM user WHERE card = ? limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute(array($card));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $user=$rows['id'];
    $query = "SELECT * FROM history ORDER BY id DESC limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $praces=$rows['total'];
    $total=$praces+1;
    if ($praces<4) {
        $sql ="INSERT INTO history (user,enter,total) VALUES (?,?,?)";
        $stm = $db->prepare($sql);
        $stm->execute(array($user,$time,$total));
        $data = array('c' => 2);
        echo $response = json_encode($data)."\n";
    } else {
    $data = array('c' =>'10'); 
    echo $response = json_encode($data)."\n";
}
}
if(isset($_POST['kureba'])){
    $query = "SELECT * FROM history ORDER BY id DESC limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $praces=$rows['total'];
    $arr = array('c' => $praces,'b' => 2);
    echo $data = json_encode($arr)."\n";
}
?>