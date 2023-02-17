<?php
// kết nối database
function connection()
{
    $conn = new PDO('mysql:host=localhost;dbname=phonestore;charset=utf8', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}
// thực thi câu lệnh sql thao tác dữ liệu(INSERT, UPDATE, DELETE)
function pdo_excecute($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

//thực thi câu lệnh sql truy vấn dữ liệu
// all dữ liệu
function getAllData($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    } catch (\PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
// lấy 1 dữ liệu
function getOneData($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
        return $rows;
    } catch (\PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

function loadAll($table)
{
    $sql = "SELECT * FROM $table ";
    return getAllData($sql);
}
