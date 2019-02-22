USE bookstore;
/* 
On Line Transactional Process - OLTP (Normalization) CUD
On Line Analytical Process - OLAP (Denormalized) R
*/
SHOW ENGINES;
CREATE TABLE Book
(
	id INT auto_increment PRIMARY KEY,
	title VARCHAR(50) NOT NULL,
    ISBN CHAR(13) UNIQUE,
	publishYear INT,
    creationDate DATETIME,
    modifiedDate DATETIME
)ENGINE = InnoDB;