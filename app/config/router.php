<?php

$router = $di->getRouter();

// Define your routes here
$router->add('/', ['controller' => 'frontend', 'action' => 'index']);

//login
$router->add('/module/admin/login', ['controller' => 'auth', 'action' => 'index']);
$router->addPost('/proses/login', ['controller' => 'auth', 'action' => 'proses']);
$router->add('/proses/keluar', ['controller' => 'auth', 'action' => 'keluar']);

//dashboard
$router->add('/dashboard/admin/manage', ['controller' => 'index', 'action' => 'index']);

//setting
$router->add('/setting/admin/manage', ['controller' => 'setting', 'action' => 'manage']);

//fakultas
$router->add('/fakultas/admin/manage', ['controller' => 'fakultas', 'action' => 'manage']);


//jurusan
$router->add('/jurusan/admin/manage', ['controller' => 'jurusan', 'action' => 'manage']);


//mahasiswa
$router->add('/mahasiswa/admin/manage', ['controller' => 'mahasiswa', 'action' => 'manage']);
$router->add('/mahasiswa/admin/kelompok', ['controller' => 'mahasiswa', 'action' => 'kelompok']);


//router api
$router->add('/api-mahasiswa/admin/list', ['controller' => 'api-mahasiswa', 'action' => 'ambil']);
$router->add('/api-mahasiswa/admin/list-kelompok', ['controller' => 'api-mahasiswa', 'action' => 'kelompok']);



//frontend
$router->add('/berita', ['controller' => 'frontend', 'action' => 'berita']);

$router->handle();


