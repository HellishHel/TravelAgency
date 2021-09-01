<?php

    namespace PensionFund\Controller;

    class CountriesController implements IController
    {
        public function execute()
        {
            include_once __DIR__ . '/../views/countries.php';
        }
    }