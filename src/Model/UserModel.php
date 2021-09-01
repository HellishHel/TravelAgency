<?php

namespace PensionFund\Model;

use PensionFund\Config;

class UserModel
{
    public function get($id = null)
    {
        $query = "
                select *
                  from user
                 where 1 = 1
            ";

        if (!empty($id)) {
            $query .= ' and id = ' . $id;
        }

        try {
            $connection = Config::getDataBaseConnection();
            $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            return $connection
                ->query($query)
                ->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            print "Ошибка!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getAuthors($id = null)
    {
        $query = "
                select id,
                       CONCAT(firstname, ' ', surname, ' ', middlename) name
                  from users
                 where 1 = 1
                   and role = 1
            ";

        if (!empty($id)) {
            $query .= ' and id = ' . $id;
        }

        try {
            $connection = Config::getDataBaseConnection();
            $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            return $connection
                ->query($query)
                ->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            print "Ошибка!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
