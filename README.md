# Library Management System

A refactored Object-Oriented PHP Library Management System following PSR-12 coding standards.

## Author

- Jelo Flores

## Features

- Can Add books
- Can Borrow books
- Can Generate Reports
- Prepared statements
- OOP architecture
- PSR-12 compliant

## Requirement

- PHP 8+
- MySQL
- Git

## Installation

1. Clone the repository
2. Import thr database
3. Configure database credentials
4. Run project

## File Structure
src/
Entity/ # Data models (Book, BorrowRecord, Student)
Repository/ # Database access layer
Service/ # Business logic
Config/ # Configuration and constants
View/ # HTML templates
public/ # Web-accessible entry point
docs/ # Generated PHPDoc output

## PSR-12 Compliance
All PHP files follow PSR-12 coding standards:
- 4-space indentation
- Unix LF line endings
- Strict typing enabled
- Descriptive naming conventions

## Usage Examples

### Adding a Book
```php
$connection = new DatabaseConnection($config);
$repository = new BookRepository($connection);

$book = new Book('The Great Gatsby', 'F. Scott Fitzgerald', 1925, 'Fiction');
$bookId = $repository-&gt;addBook($book);

Borrowing a Book

$service = new LibraryService($connection);
$service-&gt;borrowBook(101, 42, 14); // student 101 borrows book 42 for 14 days
---