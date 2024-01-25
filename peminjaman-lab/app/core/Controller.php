<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<?php
class Controller
{
    public function view($view, $data = [])
    {

        if (!isset($_SESSION['nama'])) {
            require_once '../app/views/' . $view . '.php';
        } else {
            if($view == "daftar") {
                header("Location: /daftar");
            }else{
                require_once '../app/views/login/index.php';
            }
        }
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}