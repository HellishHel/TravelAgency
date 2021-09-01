<?php

    namespace PensionFund\Model;

    use PensionFund\Config;

    class CountriesModel
    {
        public function get($data)
        {
            $query = "
                select *
                  from countries c
                 where 1 = 1
            ";

            if (!empty($data->country_id)) {
                $query .= ' and id = ' . $data->country_id;
            }

            try {
                $connection = Config::getDataBaseConnection();
                return $connection
                    ->query($query)
                    ->fetchAll(\PDO::FETCH_ASSOC);
            } catch (\PDOException $e) {
                print "Ошибка!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function insert($data)
        {
            $query = "
                insert into countries (name)
                    values (:name)
            ";

            $dataInsert = [
                'name' => $data->name
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

        public function update($data)
        {
            $query = "
                update countries
                   set name = :name
                 where id = :id;
            ";

            $dataUpdate = [
                'id' => $data->id,
                'name' => $data->name
            ];

            try {
                $connection = Config::getDataBaseConnection();
                $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

                return $connection
                    ->prepare($query)
                    ->execute($dataUpdate);
            } catch (\PDOException $e) {
                print "Ошибка!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function delete($data) // edit!!!!!!!!!!!!!!!
        {
            $checkDelete = "
                select 1
                  from countries c
                       join tours t on t.country_id = c.id
                 where c.id = " . $data->id;

            $query = "
                delete
                  from countries
                 where id = :id;
            ";

            $dataDelete = [
                'id' => $data->id
            ];

            try {
                $connection = Config::getDataBaseConnection();
                $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

                $checkResult = null;

                $dataCheck = $connection
                    ->query($checkDelete);

                if ($dataCheck) {
                    $checkResult = $dataCheck->fetchAll();
                }

                if (count($checkResult) > 0) {
                    return -1;
                }

                return $connection
                    ->prepare($query)
                    ->execute($dataDelete);
            } catch (\PDOException $e) {
                print "Ошибка!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }
