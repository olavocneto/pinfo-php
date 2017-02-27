#!/usr/bin/env php
<?php

require __DIR__ . '/../vendor/autoload.php';

use Info\Command;
use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new Command\InfoCommand());

$application->run();