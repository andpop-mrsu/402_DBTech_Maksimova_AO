#!/usr/bin/env php
<?php

$autoloadPath = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath)) {
    require_once($autoloadPath);
}

use AngelMaks\hangman\Controller\Controller;

Controller::startGame();
