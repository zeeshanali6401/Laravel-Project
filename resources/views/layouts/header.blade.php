<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Navbar Color Schemes</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .navbar{
        margin-bottom: 1rem;
    }
</style>
</head>
<body class="text-center">
<div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="{{route('customer.home')}}" class="navbar-brand">
                
                    @if (session()->has('user_name'))
                        {{session()->get('user_id')}}    
                        {{session()->get('user_name')}}
                        
                @else
                    Guest
                @endif
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse1">
                <div class="navbar-nav">
                    <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{route('customer.register')}}" class="nav-item nav-link">Register</a>
                    <a href="{{route('customer.view')}}" class="nav-item nav-link">Customers</a>
                </div>
                
            </div>
        </div>
    </nav>