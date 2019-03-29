	Импорт возможен, если файл будет в такой конструкции как sample.txt			
			
			
			Инструкция по разворачиванию сайта

1. В корневую папку сделать git clone проекта
2. В папку config открыть файл db_params и заменить на свои данные.
3. В комадной строку зайти в mysql например mysql -u root
4. Ввести команду  CREATE DATABASE db_name;  где db_name - название таблицы
 db_name в файле db_params и в комадне должно быть идентично
5. Проверить создалась ли база данных (show databases;)
6. use db_name;
7. Создать таблицу: CREATE TABLE films ( id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY, Title VARCHAR(128),  Date VARCHAR(128),  Format VARCHAR(16),  Stars TEXT);
8. Или импортировать базу данных с файла films.sql
