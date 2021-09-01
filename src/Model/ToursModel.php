<?php

    namespace PensionFund\Model;

    use PensionFund\Config;

    class ToursModel
    {
        public function get($data)
        {
            $query = "
                select t.id,
                       t.name,
                       t.description,
                       c.name as country,
                       t.date_from date_from,
                       t.date_to date_to,
                       DATEDIFF(date_to, date_from) period,
                       concat(DATEDIFF(date_to, date_from), ' дней') period_text,
                       concat('от ',
                           t.price_tickets + (t.price_day * (DATEDIFF(date_to, date_from))) * (
                           select min(tt.mult)
                             from tour_types tt
                           ), ' руб.'
                       ) price_min,
                       
                       t.price_tickets + (t.price_day * (DATEDIFF(date_to, date_from))) * (
                        select min(tt.mult)
                          from tour_types tt
                        ) price_min_num,
                       t.price_tickets,
                       t.price_day
                from tours t
                join countries c on c.id = t.country_id
                 where 1 = 1
            ";

            if (!empty($data->tour_id)) {
                $query .= ' and t.id = ' . $data->tour_id;
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
                insert into tours (name, description, country_id, date_from, date_to, price_tickets, price_day)
                    values (:name, :description, :country_id, :date_from, :date_to, :price_tickets, :price_day)
            ";

            $dataInsert = [
                'name' => $data->name,
                'description' => $data->description,
                'country_id' => $data->country_id,
                'date_from' => $data->date_from,
                'date_to' => $data->date_to,
                'price_tickets' => $data->price_tickets,
                'price_day' => $data->price_day
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
                update tours
                   set name = :name,
                       description = :description,
                       country_id = :country_id,
                       date_from = :date_from,
                       date_to = :date_to,
                       price_tickets = :price_tickets,
                       price_day = :price_day
                 where id = :id;
            ";

            $dataUpdate = [
                'id' => $data->id,
                'name' => $data->name,
                'description' => $data->description,
                'country_id' => $data->country_id,
                'date_from' => $data->date_from,
                'date_to' => $data->date_to,
                'price_tickets' => $data->price_tickets,
                'price_day' => $data->price_day
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

        public function delete($data)
        {
            $query = "
                delete
                  from tours
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
