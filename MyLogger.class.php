<?php
    class MyLogger
    {
        public function log($message) {
            error_log($message, 0);
        }
    }
?>