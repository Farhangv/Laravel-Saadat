USE bookstore;
/* 
On Line Transactional Process - OLTP (Normalization) CUD
On Line Analytical Process - OLAP (Denormalized) R
*/
SHOW ENGINES;
CREATE TABLE book
(
	id INT auto_increment PRIMARY KEY,
	title VARCHAR(50) NOT NULL,
    ISBN CHAR(13) UNIQUE,
	publish_year INT,
    creation_date DATETIME,
    modified_date DATETIME
)ENGINE = InnoDB;
CREATE TABLE category
(
	id INT auto_increment PRIMARY KEY,
    `name` VARCHAR(50) NOT NULL
)ENGINE = InnoDB;

CREATE TABLE invoice
(
	id INT auto_increment PRIMARY KEY,
    customer_code CHAR(10) NOT NULL
);

CREATE TABLE invoice_row
(
	id INT auto_increment PRIMARY KEY,
    invoice_id INT,
    book_id INT,
    quantity INT,
    unit_price INT,
    FOREIGN KEY (invoice_id) REFERENCES invoice(id) /*ON DELETE NO ACTION ON UPDATE SET NULL*/,
    FOREIGN KEY (book_id) REFERENCES book(id) /*ON DELETE CASCADE ON UPDATE SET DEFAULT*/
);
CREATE TABLE payment
(
    invoice_id INT PRIMARY KEY,
    amount INT,
    payment_date DATETIME,
    FOREIGN KEY (invoice_id) REFERENCES invoice(id)
);
CREATE TABLE book_category
(
	book_id INT,
    category_id INT,
    PRIMARY KEY (book_id, category_id),
    FOREIGN KEY (book_id) REFERENCES book(id),
    FOREIGN KEY (category_id) REFERENCES category(id)
);

