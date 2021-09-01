<?php

    namespace PensionFund;

    class Config {
        private static $connection;

        const HOST = 'localhost';
        const DATABASE = 'travel_agency';
        const USER = 'root';
        const PASSWORD = 'root';

        const PROJECT_NAME = 'Туристическое агенство';

        public static function getDataBaseConnection() {
            if (empty($connection)) {
                $connection = new \PDO('mysql:host=' . self::HOST . ';dbname=' . self::DATABASE, self::USER, self::PASSWORD);
            }

            return $connection;
        }

        public static function getProjectName() {
            return self::PROJECT_NAME;
        }
    }