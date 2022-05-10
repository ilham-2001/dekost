<?php 

function checkCompleteess($nama_depan, $nama_belakang, $email, $password, $jenis_kelamin){
    // check if all the fields is filled
    if ($nama_depan && $nama_belakang && $email && $password && $jenis_kelamin){
        return TRUE;
    }
    return FALSE;
}

?>