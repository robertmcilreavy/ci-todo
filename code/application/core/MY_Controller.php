<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    protected function authenticate_and_authorize($todo_id = null) {
        $token = $this->input->get_request_header('Authorization');
        $user = $this->tokenparser->validateToken($token);
        if (!$user) {
            $this->response(['error' => 'Unauthorized'], 401);
            return false;
        }
        if ($todo_id) {
            $todo = $this->Todo_model->get_todo_by_id($todo_id);
            if ($todo['owner_id'] != $user['id'] && $todo['assigned_to'] != $user['id']) {
                $this->response(['error' => 'Forbidden'], 403);
                return false;
            }
        }
        return true;
    }
}