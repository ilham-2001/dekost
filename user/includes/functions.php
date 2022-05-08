<?php 

function checkCompleteess($nama_depan, $nama_belakang, $email, $password, $jenis_kelamin){
    if ($nama_depan && $nama_belakang && $email && $password && $jenis_kelamin){
        return true;
    }
    return false;
}

?>