@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Systeme  d'enquête de satisfaction client</title>

    <!-- Intégration des fichiers CSS d'AdminLTE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">Acceuil</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Tableau de bord
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" >
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    <table>
                                        
                                        <tr>
                                            <td width=200px style="vertical-align: text-top">Menu<br>
                                                <ul>
                                                    <li><a href="{{ route("responsable.index" ) }}" class="nav-link">responsables</a></li>
                                                    <li><a href="{{ route("emplacement.index" ) }}" class="nav-link">emplacements</a></li>
                                                    <li><a href="{{ route("appariel.index" ) }}" class="nav-link">appariels</a></li>
                                                    <li><a href="{{ route("Historiqueavis.index" ) }}" class="nav-link">Historiqueaviss</a></li>
                                                  
                                                
                                                </ul>
                                            </td>
                                            
                                        </tr>
                                    </table>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            
        </aside>
       

       <!-- Content Wrapper -->
<!-- Content Wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>BIENVENUE A NOTRE SITE !</h1>
                    
                    <div class="btn-group" role="group" aria-label="Options de satisfaction">
                        <button type="button" class="btn btn-success btn-lg">Trés satisfait</button>
                        <button type="button" class="btn btn-warning btn-lg">satisfait</button>
                        <button type="button" class="btn btn-info btn-lg">Peu satisfait</button>
                        <button type="button" class="btn btn-danger btn-lg">Non satisfait</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Reste du contenu -->
</div>



        
        <!-- Scripts -->
        <!-- Intégration des fichiers JavaScript d'AdminLTE -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.min.js
        @endsection