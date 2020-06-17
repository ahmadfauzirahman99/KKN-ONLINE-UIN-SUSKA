<?php

$router = $di->getRouter();

// Define your routes here
$router->add('/', ['controller' => 'auth', 'action' => 'index']);

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

//kegiatan
$router->add('/admin/kegiatan', ['controller' => 'mahasiswa', 'action' => 'kegiatan']);

//mahasiswa
$router->add('/mahasiswa/admin/manage', ['controller' => 'mahasiswa', 'action' => 'manage']);
$router->add('/mahasiswa/admin/kelompok', ['controller' => 'mahasiswa', 'action' => 'kelompok']);
$router->add('/mahasiswa/home', ['controller' => 'mahasiswa', 'action' => 'index']);
$router->add('/mahasiswa/data-diri', ['controller' => 'mahasiswa', 'action' => 'data']);
$router->add('/mahasiswa/kegiatan/kkn', ['controller' => 'mahasiswa', 'action' => 'kegiatan']);
$router->add('/mahasiswa/kegiatan/upload', ['controller' => 'mahasiswa', 'action' => 'proses']);


//router
$router->add('/dosen/admin/manage', ['controller' => 'dosen', 'action' => 'manage']);

//router api
$router->add('/api-mahasiswa/admin/list', ['controller' => 'api-mahasiswa', 'action' => 'ambil']);
$router->add('/api-mahasiswa/admin/list-kelompok', ['controller' => 'api-mahasiswa', 'action' => 'kelompok']);
$router->add('/dosen/admin/list', ['controller' => 'dosen', 'action' => 'list']);

//daftar
$router->add('/mahasiswa/validasi-ulang', ['controller' => 'daftar', 'action' => 'daftar']);

//frontend
$router->add('/berita', ['controller' => 'frontend', 'action' => 'berita']);
$router->add('/kknonline', ['controller' => 'frontend', 'action' => 'kknonline']);

$router->handle();


