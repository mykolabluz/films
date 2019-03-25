<?php

/**
 * @author mukol
 */
class FilmController {

    public function actionIndex() {

        $filmsList = Film::getFilmList();

        // Подключаем вид
        require_once(ROOT . '/views/index.php');
        return true;
    }

    public function actionView($id) {

        $item = Film::getFilmById($id);

        require_once(ROOT . '/views/view.php');
        return true;
    }

    public function actionCreate() {

        if (isset($_POST['submit'])) {
            header("Location: /");

            $options['Title'] = $_POST['Title'];
            $options['Date'] = $_POST['Date'];
            $options['Format'] = $_POST['Format'];
            $options['Stars'] = $_POST['Stars'];

            Film::addFilm($options);
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

            Film::updateProductById($id, $options);
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

}
