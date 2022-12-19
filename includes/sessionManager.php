<?php

// use Rakit\Session\SessionManager;
use Aura\Session\SessionFactory;

$sessionFactory = new SessionFactory();
$session = $sessionFactory->newInstance($_COOKIE);

$sessionManager = $session->getSegment("Application\Project\MYDC");

