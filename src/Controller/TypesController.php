<?php

    namespace PensionFund\Controller;

    class TypesController implements IController
    {
        public function execute()
        {
            include_once __DIR__ . '/../views/types.php';
        }
    }