<?php
    class FormSanitizer {
        public static function sanitizeFormString($inputText) {
            // remove the html tag and just keep the input
            $inputText = strip_tags($inputText);
            // remove space from input
            $inputText = trim($inputText);
            // lowercase
            $inputText = strtolower($inputText);
            // Capitalize first letter
            $inputText = ucfirst($inputText);
            return $inputText;
        }


        public static function sanitizeFormUsername($inputText) {
            $inputText = strip_tags($inputText);
            $inputText = str_replace(" ", "", $inputText);
            return $inputText;
        }

        public static function sanitizeFormPassword($inputText) {
            $inputText = strip_tags($inputText);
            return $inputText;
        }

        public static function sanitizeFormEmail($inputText) {
            $inputText = strip_tags($inputText);
            // remove all spaces
            $inputText = str_replace(" ", "", $inputText);
            return $inputText;
        }


    }
?>