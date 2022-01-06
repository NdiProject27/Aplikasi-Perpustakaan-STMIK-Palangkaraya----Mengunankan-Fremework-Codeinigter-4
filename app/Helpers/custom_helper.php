<?php
function userLogin()
{
    $db = \Config\Database::connect();
    return $db->table('users')->where('username', session('username'))->get()->getRow();
}
