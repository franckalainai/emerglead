@extends('layouts.backend.main')

@section('title', 'EMERGLEAD | Dashboard')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dasbhboard
        </h1>
        <ol class="breadcrumb">
          <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <!-- /.box-header -->
                <div class="box-body ">
                      <h3>Bienvenue sur votre tableau de bord !</h3>
                      <p class="lead text-muted">Bonjour {{ Auth::user()->name }}, Bienvenue sur votre tableau de bord</p>

                      <h4>Commencer ici !</h4>
                      <p><a href="{{ route('backend.blog.create') }}" class="btn btn-primary">Poster votre premier article !</a> </p>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection
