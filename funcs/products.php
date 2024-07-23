<?php

function GetProductByCategoryId($connection, $categoryId)
{
    $sql = "SELECT * FROM products WHERE categoryId = :categoryId";

    $stmt = $connection->prepare($sql);

    // Bind the category ID to the placeholder
    $stmt->bindValue(':categoryId', $categoryId, PDO::PARAM_INT);


    $stmt->execute;

    // Fetch the result
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProductsByLimit(PDO $connection, int $limit = 4): array
{
    $sql = "SELECT * FROM products LIMIT :limit";
    $stmt = $connection->prepare($sql);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);

    // Execute the statement and check for errors
    if (!$stmt->execute()) {
        // Handle the error appropriately (e.g., log the error, throw an exception)
        throw new Exception('Failed to execute query: ' . implode(", ", $stmt->errorInfo()));
    }

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function GetAllProductById(PDO $connection, int $id)
{

    $sql = "SELECT * FROM products WHERE productId = :id";

    // Prepare the statement to prevent SQL injection
    $stmt = $connection->prepare($sql);

    // Bind the category ID to the placeholder
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);

    // Execute the query
    $stmt->execute();

    // Fetch the result
    return $stmt->fetch();
}
