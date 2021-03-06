<?php

/**
 * @author mukol
 */
include_once ROOT . '/components/DB.php';

class Film {

    public static function getFilmListDESC() {

        $db = Db::getConnection();

        $filmsList = array();

        $result = $db->query('SELECT * FROM films ORDER BY id DESC LIMIT 10');

        $i = 0;
        while ($row = $result->fetch()) {
            $filmsList[$i]['id'] = $row['id'];
            $filmsList[$i]['Title'] = $row['Title'];
            $filmsList[$i]['Date'] = $row['Date'];
            $filmsList[$i]['Format'] = $row['Format'];
            $filmsList[$i]['Stars'] = $row['Stars'];
            $i++;
        }
        return $filmsList;
    }

    public static function getFilmListAlphabet() {

        $db = Db::getConnection();

        $filmsList = array();

        $result = $db->query('SELECT * FROM films ORDER BY Title ASC LIMIT 10');

        $i = 0;
        while ($row = $result->fetch()) {
            $filmsList[$i]['id'] = $row['id'];
            $filmsList[$i]['Title'] = $row['Title'];
            $filmsList[$i]['Date'] = $row['Date'];
            $filmsList[$i]['Format'] = $row['Format'];
            $filmsList[$i]['Stars'] = $row['Stars'];
            $i++;
        }
        return $filmsList;
    }

    public static function getFilmById($id) {

        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM films WHERE id=' . $id);

        return $result->fetch();
    }

    public static function addFilm($options) {
        $db = Db::getConnection();


        $sql = 'INSERT INTO films (Title, Date, Format, Stars) VALUES (:Title, :Date, :Format, :Stars)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':Title', $options['Title'], PDO::PARAM_STR);
        $result->bindParam(':Date', $options['Date'], PDO::PARAM_STR);
        $result->bindParam(':Format', $options['Format'], PDO::PARAM_STR);
        $result->bindParam(':Stars', $options['Stars'], PDO::PARAM_STR);

        return $result->execute();
    }

    public static function updateProductById($id, $options) {
        $db = Db::getConnection();

        $sql = "UPDATE films SET Title = :Title, Date = :Date, Format = :Format, Stars = :Stars WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':Title', $options['Title'], PDO::PARAM_STR);
        $result->bindParam(':Date', $options['Date'], PDO::PARAM_STR);
        $result->bindParam(':Format', $options['Format'], PDO::PARAM_STR);
        $result->bindParam(':Stars', $options['Stars'], PDO::PARAM_STR);
        return $result->execute();
    }

    public static function deleteFilmById($id) {
        $db = Db::getConnection();

        $sql = 'DELETE FROM films WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function searchByTitle($query) {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM films WHERE Title LIKE :query';

        $result = $db->prepare($sql);
        $result->bindValue(':query', '%' . $query . '%');
        $result->execute();
        return $result = $result->fetchAll();
    }

    public static function searchByStars($query) {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM films WHERE Stars LIKE :query';

        $result = $db->prepare($sql);
        $result->bindValue(':query', '%' . $query . '%');
        $result->execute();
        return $result = $result->fetchAll();
    }

    public static function checkTitle($Title) {
        if (strlen($Title) >= 2) {
            return true;
        }
        return false;
    }

    public static function checkRelease($Realese) {
        if (strlen($Realese) === 4) {
            return true;
        }
        return false;
    }

    public static function checkStars($Stars) {
        if (strlen($Stars) >= 2) {
            return true;
        }
        return false;
    }

    public static function validate($value) {
        return strip_tags(trim($value));
    }

    public static function import($path) {
        
        $db = Db::getConnection();
        
        $file = fopen($path, "r");
        
        while (!feof($file)) {
            $content = fgets($file);
            $carray = explode(";", $content);
            list($Title, $Date, $Format, $Stars) = $carray;
            $sql = "INSERT INTO `films` (`Title`, `Date`, `Format`,`Stars`) VALUES ('$Title', '$Date', '$Format', '$Stars')";
            $db->query($sql);
        }
        fclose($file);
    }

}
