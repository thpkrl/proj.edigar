<?php
class Session {
    public function __construct() {
        if(session_status() != 2) session_start();
    }
    public function set(string $index, $data) {
        if(!empty($index)) {
            $_SESSION[$index] = $data;
        }
    }
    public function get(string $index) {
        if(empty($index)) return '';
        if(isset($_SESSION[$index]))
        {
            return $_SESSION[$index];
        }
        else{
            return '';
        }
    }
    public function destroy() {
        session_destroy();
    }
}