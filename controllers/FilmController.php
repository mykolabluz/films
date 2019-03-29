<?php

/**
 * @author mukol
 */
class FilmController {

    public function actionIndex() {

        $filmsList = Film::getFilmListDESC();


        // Подключаем вид
        require_once(ROOT . '/views/index.php');
        return true;
    }

    public function actionAlphabet() {


        $filmsList = Film::getFilmListAlphabet();

        // Подключаем вид
        require_once(ROOT . '/views/alphabet.php');
        return true;
    }

    public function actionView($id) {

        $item = Film::getFilmById($id);

        require_once(ROOT . '/views/view.php');
        return true;
    }

    public function actionCreate() {

        if (isset($_POST['submit'])) {


            $options['Title'] = $_POST['Title'];
            $options['Date'] = $_POST['Date'];
            $options['Format'] = $_POST['Format'];
            $options['Stars'] = $_POST['Stars'];

            // Валидация полей
            if (!Film::checkTitle($options['Title'])) {
                $errors[] = 'Название не должно быть короче 2-х символов';
            }
            if (!Film::checkRelease($options['Date'])) {
                $errors[] = 'Дата выхода должна состовлять 4 цифры';
            }
            if (!Film::checkStars($options['Stars'])) {
                $errors[] = 'Список актеров не должны быть короче 2-х символов';
            }

            $options['Title'] = Film::validate($options['Title']);
            $options['Date'] = Film::validate($options['Date']);
            $options['Format'] = Film::validate($options['Format']);
            $options['Stars'] = Film::validate($options['Stars']);


            if ($errors == false) {
                // Если ошибок нет
                // Добавляем в БД
                $result = Film::addFilm($options);
            }
        }
        require_once(ROOT . '/views/create.php');

        return true;
    }

    public function actionUpdate($id) {

        // Получаем данные о фильме
        $film = Film::getFilmById($id);


        if (isset($_POST['submit'])) {

            $options['Title'] = $_POST['Title'];
            $options['Date'] = $_POST['Date'];
            $options['Format'] = $_POST['Format'];
            $options['Stars'] = $_POST['Stars'];


            // Валидация полей
            if (!Film::checkTitle($options['Title'])) {
                $errors[] = 'Название не должно быть короче 2-х символов';
            }
            if (!Film::checkRelease($options['Date'])) {
                $errors[] = 'Дата выхода должна состовлять 4 цифры';
            }
            if (!Film::checkStars($options['Stars'])) {
                $errors[] = 'Список актеров не должны быть короче 2-х символов';
            }

            $options['Title'] = Film::validate($options['Title']);
            $options['Date'] = Film::validate($options['Date']);
            $options['Format'] = Film::validate($options['Format']);
            $options['Stars'] = Film::validate($options['Stars']);


            if ($errors == false) {
                // Если ошибок нет
                // Добавляем в БД
                $result = Film::updateProductById($id, $options);
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/update.php');
        return true;
    }

    public function actionDelete($id) {

        header("Location: /");
        Film::deleteFilmById($id);

        return true;
    }

    public function actionSearch() {

        if (isset($_POST['title'])) {
            if (!empty($_POST['title'])) {
                $query = $_POST['title'];
                $result = Film::searchByTitle($query);
            }
        }
        if (isset($_POST['stars'])) {
            if (!empty($_POST['stars'])) {
                $query = $_POST['stars'];
                $result = Film::searchByStars($query);
            }
        }

        require_once(ROOT . '/views/search_result.php');
        return true;
    }

    public function actionImport() {
        $path = $_FILES['im']['tmp_name'];
        if (!empty($path)) {
            Film::import($path);
        }
        require_once (ROOT . '/views/import.php');
    }

}
