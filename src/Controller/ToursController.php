<?php

    namespace PensionFund\Controller;

    class ToursController implements IController
    {
        public function execute()
        {
            include_once __DIR__ . '/../views/tours.php';
        }
    }