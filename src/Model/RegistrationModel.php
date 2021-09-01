<?php

    namespace PensionFund\Model;

    use PensionFund\Config;

    class RegistrationModel
    {
        public function insert($data)
        {
            $query = "
                insert into users (
                    email,
                    password,
                    role
                ) values (
                    :email,
                    :password,
                    0
                )
            ";

            $dataInsert = [
                'email' => $data['email'],
                'password' => $data['password']
            ];

            try {
                $connection = Config::getDataBaseConnection();
                $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

                return $connection
                    ->prepare($query)
                    ->execute($dataInsert);
            } catch (\PDOException $e) {
                print "Ошибка!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }
