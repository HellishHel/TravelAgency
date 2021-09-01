<?php

    namespace PensionFund\Model;

    use PensionFund\Config;

    class ClaimModel
    {
        public function get($data)
        {
            $query = "
                select c.id id,
                       c.adults_count adults_count,
                       c.children_count children_count,
                       concat(c.cost, ' руб.') cost,
                       t.name name,
                       u.email user,
                       tt.name tour_type
                  from claims c
                  join tours t on t.id = c.tour_id
                  join users u on u.id = user_id
                  join tour_types tt on tt.id = c.tour_type_id
                 where 1 = 1
            ";

            if (!empty($data->user_id)) {
                $query .= ' and c.user_id = ' . $data->user_id;
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

        public function insert($data)
        {
            $query = "
                insert into claims (user_id, tour_id, adults_count, children_count, tour_type_id, cost)
                    values (:user_id, :tour_id, :adults_count, :children_count, :tour_type_id, :cost)
            ";

            $dataInsert = [
                'user_id' => $data->user_id,
                'tour_id' => $data->tour_id,
                'adults_count' => $data->adults_count,
                'children_count' => $data->children_count,
                'tour_type_id' => $data->tour_type_id,
                'cost' => $data->cost
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
            // $query = "
            //     update claims
            //        set user_id = :user_id,
            //            service_id = :service_id,
            //            date = :nadateemployer_ide,
            //            employer_id = :,
            //      where id = :id;
            // ";

            // $dataUpdate = [
            //     'id' => $data->id,
            //     'user_id' => $data->user_id,
            //     'service_id' => $data->service_id,
            //     'date' => $data->date,
            //     'employer_id' => $data->employer_id,
            // ];

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

        public function delete($data)
        {
            $query = "
                delete
                  from claims
                 where id = :id;
            ";

            $dataDelete = [
                'id' => $data->id
            ];

            try {
                $connection = Config::getDataBaseConnection();
                $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

                return $connection
                    ->prepare($query)
                    ->execute($dataDelete);
            } catch (\PDOException $e) {
                print "Ошибка!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }
