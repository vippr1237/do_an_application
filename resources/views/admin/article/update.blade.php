@extends('layouts.app_master_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Chỉnh sửa bài viết</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{  route('admin.article.index') }}"> Bài viết</a></li>
            <li class="active"> Chỉnh sửa</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        @include('admin.article.form')
    </div>
</section>
    <!-- /.content -->
@stop