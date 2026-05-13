<?php

desclare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/Config/DatabaseConfig.php';
require_once __DIR__ . '/../src/Config/LibraryConfig.php';
require_once __DIR__ . '/../src/Entity/Book.php';
require_once __DIR__ . '/../src/Repository/BookRepository';
require_once __DIR__ . '/../src/Service/LibraryService';

use App\Config\DatabaseConfig;
use App\Repository\BookRepository;
use App\Entity\Book;
use App\Service\LibraryReport;

$conn = new DatabaseConnection();
$bookRepository = new BookRepository($conn);

$conn=new mysqli($this->host, $this->username, $this->password, $this->db_name);

if($conn->connection_error){
    throw new RuntimeException('Database connection failed');
}

if ($action === 'add'){
    $book = new Book($_POST['title'], $_POST['author'], $_POST['year'], $_POST['genre']);

$bookRepository->addBook($book);
echo 'Book added successfully';
}

if ($action === 'list'){
    $books = $bookRepository->getAllBooks();

    require_once __DIR__ . '/../src/View/book_list.php';
}

if ($action === 'report'){
    $reportService = new LibraryReport($conn);

    $report = $reportService->generate();

    require_once __DIR__ . '/..src/View/report_list.php'
}



?>