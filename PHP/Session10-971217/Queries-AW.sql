--SQL (ANSI)
--Dilect
--Aggregate Function
USE AdventureWorks2016
GO
SELECT MAX(ListPrice)
FROM Production.Product
GO
SELECT *
FROM Production.Product
ORDER BY ListPrice DESC
GO
SELECT COUNT(*)
FROM Production.Product
GO
SELECT COUNT(Color)
FROM Production.Product
GO
SELECT SUM(LineTotal)
FROM Sales.SalesOrderDetail
GO
SELECT DISTINCT Color
FROM Production.Product
GO
SELECT COUNT(ISNULL(Color, 'No Color'))
FROM Production.Product
GO
SELECT Name, ISNULL(Color, 'No Color')
FROM Production.Product
GO
SELECT ISNULL(Color, 'No Color') 'ColorName', COUNT(ISNULL(Color, 'No Color')) 'Count'
FROM Production.Product
GROUP BY Color
GO
SELECT Color, COUNT(Color) 'Count'
FROM Production.Product
GO
SELECT p.ProductId, Name, s.OrderQty, s.UnitPrice, s.UnitPriceDiscount
FROM Production.Product p 
INNER JOIN Sales.SalesOrderDetail s
ON p.ProductID = s.ProductID
GO
SELECT *
FROM Sales.SalesOrderDetail
GO
SELECT p.Name 'ProductName', s.Name 'SubCategoryName'
FROM Production.Product p
INNER JOIN Production.ProductSubcategory s
ON p.ProductSubcategoryID = s.ProductSubcategoryID
GO
SELECT p.Name 'ProductName', s.Name 'SubCategoryName'
FROM Production.Product p
LEFT OUTER JOIN Production.ProductSubcategory s
ON p.ProductSubcategoryID = s.ProductSubcategoryID
GO
SELECT p.Name 'ProductName', s.Name 'SubCategoryName'
FROM Production.Product p
RIGHT OUTER JOIN Production.ProductSubcategory s
ON p.ProductSubcategoryID = s.ProductSubcategoryID
GO
SELECT p.Name 'ProductName', s.Name 'SubCategoryName'
FROM Production.Product p
FULL OUTER JOIN Production.ProductSubcategory s
ON p.ProductSubcategoryID = s.ProductSubcategoryID
GO
CREATE DATABASE Saadat
GO
USE Saadat
GO
CREATE TABLE Team
(
	Id INT IDENTITY PRIMARY KEY,
	Name NVARCHAR(50)
)
GO
CREATE TABLE Student
(
	ID INT IDENTITY PRIMARY KEY,
	Name NVARCHAR(50)
)
GO
CREATE TABLE Course
(
	ID INT IDENTITY PRIMARY KEY,
	Title NVARCHAR(50)
)
GO
SELECT s.Name, c.Title
FROM Student s
CROSS JOIN Course c
GO
SELECT t1.Name, t2.Name
FROM Team t1
CROSS JOIN Team t2
WHERE t1.Name <> t2.Name
GO
USE AdventureWorks2016
GO
--A
SELECT ProductId, Name, Color
FROM Production.Product
WHERE Color = 'Blue'
--UNION
--UNION ALL
--INTERSECT
EXCEPT
--B
SELECT ProductId, Name, Color
FROM Production.Product
WHERE ListPrice > 1500
GO
SELECT CONVERT(NVARCHAR(50),p.ProductId) 'ProductID', Name, s.OrderQty, s.UnitPrice
FROM Production.Product p 
INNER JOIN Sales.SalesOrderDetail s
ON p.ProductID = s.ProductID
WHERE s.SalesOrderID = 53600
UNION 
SELECT '--', '--', SUM(OrderQty), SUM(OrderQty * UnitPrice)
FROM Sales.SalesOrderDetail
WHERE SalesOrderID = 53600