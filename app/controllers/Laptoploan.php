<?php
require_once './GeneratePDF.php';
use Classes\GeneratePDF;

if($_SERVER['REQUEST_METHOD'] != 'POST'){
        exit;
    }

    require_once '../../vendor/autoload.php';

    $stdNum = $_POST['stuNum'];
    $subDate = $_POST['subdate'];
    $stuName = $_POST['initialName'];
    $stuNic = $_POST['nic'];
    $conFix = $_POST['conNoF'];
    $conMob = $_POST['conNoM'];
    $suplier = $_POST['suplier'];
    $laptopModel = $_POST['laptopModel'];
    $lapPrice = $_POST['price'];
    $branch = $_POST['branch'];
    $bnkNameM = $_POST['bnkName'];
    $bnkBranchM = $_POST['bnkBranch'];
    $accNumM = $_POST['accNum'];
    $bnkNameB = $_POST['bnkNameB'];
    $bnkBranchB = $_POST['bnkBranchB'];
    $accNumB = $_POST['accNumB'];

    $data = [
        'branch_field' => $branch,
        'stuName_field' => $stuName,
        'stuNum_field' => $stdNum,
        'nic_field' => $stuNic,
        'stuMobile_field' => $conMob,
        'stuFixed_field' => $conFix,
        'type_field' => $laptopModel,
        'name_of_the_supplier_field' => $suplier,
        'price_field' => $lapPrice,
        'boc_branch_field' => $branch,
        'bank_mahapola_field' => $bnkNameM,
        'branch_mahapola_field' => $bnkBranchM,
        'acc_mahapola_field' => $accNumM,
        'bank_bursary_field' => $bnkNameB,
        'branch_bursary_field' => $bnkBranchB,
        'acc_bursary_field' => $accNumB,
        'date_field' => $subDate
    ];

    $pdf = new GeneratePDF;
    $response = $pdf->generate($data);
    header('Location:../views/download.php?stdNum=' . $stdNum . '&link=' . $response);

?>