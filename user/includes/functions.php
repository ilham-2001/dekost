<?php

function checkCompleteess($email, $password, $nik)
{
    // check if not null fields is filled

    $isComplete = $email && $password && $nik ? TRUE : FALSE;

    return $isComplete;
}
