-- SQLite script for the 'demo' database

-- Table structure for table `books`
DROP TABLE IF EXISTS books;
CREATE TABLE books (
id INTEGER PRIMARY KEY AUTOINCREMENT,
title varchar(100) NOT NULL,
author varchar(100) NOT NULL,
year INTEGER NOT NULL);



-- Table structure for table `comments`
DROP TABLE IF EXISTS comments;
CREATE TABLE comments (
id INTEGER PRIMARY KEY AUTOINCREMENT,
description text DEFAULT NULL,
book_id INTEGER,
FOREIGN KEY(book_id) REFERENCES books(id) ON DELETE CASCADE ON UPDATE CASCADE
);

PRAGMA foreign_keys = ON;