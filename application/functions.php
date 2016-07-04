<?php
    function is_unique
    (
        $column_name = null,
        $db = null,
        $table_name = null,
        $value = null
    )
    {
        if(is_null($column_name) || is_null($table_name) || is_null($db) || is_null($value))
        {
            return false;
        }
        else
        {
            // student, roll=>102
            $count = $db->count($table_name,[$column_name=>$value]);
            if($count == 0) {
                return true; // yes it is unique
            } else {
                return false; // no it is not unique
            }
        }
    }
    function generate_unique_key
    (
        $column_name = null,
        $db = null,
        $table_name = null,
        $size = null
    )
    {
        if(is_null($size) || is_null($column_name) || is_null($table_name) || is_null($db))
        {
            return null;
        }
        else
        {
            $unique_key = "";
            $code = "";
            for($i=0;$i<$size;$i++) {
                $code = $code . rand(0,9);
            }
            if(
                is_unique
                (
                    $column_name,
                    $db,
                    $table_name,
                    $code
                )
            )
            {
                return $code;
            }
            else
            {
                generate_unique_key
                (
                    $column_name,
                    $db,
                    $table_name,
                    $size
                );
            }
        }
    }