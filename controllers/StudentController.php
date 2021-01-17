<?php 

namespace app\controllers;

use app\Router;

class StudentController {

  public function index(Router $router) {
    // call getStudents in Database.php which returns sql query result 
    $students = $router->db->getStudents();
    echo '<pre>';
    var_dump($students);
    echo '</pre>';

    // call renderView in Router.php 
    $router->renderView('students/index');
  }

  public function create() {
    echo '<h1>Create page</h1>';
  }

  public function update() {
    echo '<h1>Update page</h1>';
  }

  public function delete() {
    echo '<h1>delete page</h1>';
  }
}