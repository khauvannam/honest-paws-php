<?php

function getCategories($connection)
{
    $sql = "SELECT * FROM categories";
    $stmt = $connection->query($sql);
    return $stmt->fetchAll();
}
