<?php

function getDropdownList($table, $coloumns)
{
    $CI     = &get_instance();
    $query  = $CI->db->select($coloumns)->from($table)->get();

    if ($query->num_rows() >= 1) {
        $option1    = ['' => '-select-'];
        $option2    = array_column($query->result_array(), $coloumns[1], $coloumns[0]);

        return $options;
    }
    return $options = [''   =>  '-select-'];
}

function getCategories()
{
    $CI     = &get_instance();
    $query  = $CI->db->get('category')->result();
    return $query;
}

function getCart()
{
    $CI     = &get_instance();
    $userId = $CI->session->userdata('id');

    if ($userId) {
        $query  = $CI->db->where('id_user', $userId)->count_all_results('cart');
        return $query;
    }

    return false;
}

function hashEncrypt($input)
{
    $hash   = password_hash($input, PASSWORD_DEFAULT);
    return $hash;
}

function hashEncryptVerify($input, $hash)
{
    if (password_verify($input, $hash)) {
        return true;
    } else {
        return false;
    }
}
