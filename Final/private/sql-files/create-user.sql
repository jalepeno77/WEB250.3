/* --- These commands will only work on your localhost ---*/

CREATE USER 'geronimo'@'localhost' identified by '*yGdtJVIsPQjG]/R';
GRANT ALTER ROUTINE, SHOW VIEW, INDEX, UPDATE, ALTER, GRANT OPTION, CREATE TEMPORARY TABLES, EVENT, INSERT, REFERENCES, CREATE ROUTINE, SELECT, LOCK TABLES, CREATE VIEW, EXECUTE, TRIGGER, CREATE, DELETE, DROP ON `bird`.* TO 'geronimo'@'localhost';

/* You need this line if you are using MySQL 8+ */
ALTER USER 'geronimo'@'localhost' IDENTIFIED WITH mysql_native_password BY '*yGdtJVIsPQjG]/R';

FLUSH PRIVILEGES;FLUSH PRIVILEGES;
