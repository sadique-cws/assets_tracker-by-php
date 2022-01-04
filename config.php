<?php 
$connect = mysqli_connect("localhost","root","","assets");
session_start();

// insert data
function insertData($table, $data){
    global $connect;
    $cols = implode(",",array_keys($data));
    $value = implode("','",array_values($data));

    $query = mysqli_query($connect, "insert into $table ($cols) value ('$value')");

    return $query;
}

// calling Data
function callingData($table, $cond=NULL){
    global $connect;
    if($cond == NULL){
        $query = "select * from $table";
    }
    else{
        $query = "select * from $table WHERE $cond";
    }
    $data = [];
    $run = mysqli_query($connect,$query);
    while($row = mysqli_fetch_array($run)){
        $data[] = $row;
    }
    return $data;
}
//page refresh 
function refresh($page="index.php"){
    echo "<script>window.open('$page','_self')</script>";
}

// delete function 
function deleteData($table, $cond){
    global $connect;
    $query = mysqli_query($connect,"delete from $table where $cond");
    return $query;
}
// single calling record
function singleCalling($table,$cond){
    global $connect;
    $query = "select * from $table WHERE $cond";
    $run = mysqli_query($connect,$query);
    $data = mysqli_fetch_array($run);
    return $data;
}

?>