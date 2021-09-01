<?php

    namespace PensionFund\Model;

    use PensionFund\Config;

    class TypesModel
    {
        public function get($data)
        {
            $query = "
                select *
                  from tour_types t
                 where 1 = 1
            ";

            if (!empty($data->type_id)) {
                $query .= ' and id = ' . $data->type_id;
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
                insert into tour_types (name, mult)
                    values (:name, :mult)
            ";

            $dataInsert = [
                'name' => $data->name,
                'mult' => $data->mult
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
                update tour_types
                   set name = :name,
                       mult = :mult
                 where id = :id;
            ";

            $dataUpdate = [
                'id' => $data->id,
                'name' => $data->name,
                'mult' => $data->mult
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
                  from tour_types tt
                       join claims c on c.tour_type_id = tt.id
                 where tt.id = " . $data->id;

            $query = "
                delete
                  from tour_types
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
