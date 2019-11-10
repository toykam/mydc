<?php
function getCategoriesBy($data = null) {
    global $db;
    return $db->select('categories', '*', $data);
}