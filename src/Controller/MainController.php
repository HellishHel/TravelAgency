<?php

    namespace PensionFund\Controller;

    class MainController implements IController
    {
        public function execute()
        {
            include_once __DIR__ . '/../views/index.php';
        }
    }