<?php

declare(strict_types=1);

namespace App\Repository;

use mysqli;
use RuntimeException;
use App\Library\Entity\Book;

/**
 * Handles all book database operation
 * 
 * @author Jelo Flores
 * @since 2026-05-06
 */

class BookRepository{
    private $conn;

public function __construct($conn){
    $this->conn = $conn;
}

public function addBook(Book $book){
    $stmt = $this->conn->prepare('INSERT INTO books (title, author, year genre) VALUES (?, ?, ?, ?)');
    if(!$stmt){
        throw new RuntimeException('Prepare failed');
    }
    $stmt->bind_param('ssis', $book->getTitle(), $book->getAuthor(), $book->getYear(), $book->getGenre());

    if(!$stmt){
        throw new RuntimeException('Execute failed');
    }
    retrun $this->conn->insert_id;
}
public function getAllBooks(){
    $result = $this->conn->query('SELECT * FROM books');
    return $result->fetch_assoc();
}

}
?>