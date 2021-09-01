<?php

    namespace PensionFund\Controller;

    class ClaimController implements IController
    {
        public function execute()
        {
            include_once __DIR__ . '/../views/claim.php';
        }
    }