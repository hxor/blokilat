@extends('layouts.back')

@section('content')
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Edit Post</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->

  <div class="row">
      <div class="col-lg-12">
          <div class="panel panel-primary">
              <div class="panel-heading">
                  <i class="fa fa-home"></i> Post
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">

                  {!! Form::model($post, ['route' => ['post.update', $post->id], 'method' => 'PUT']) !!}

                      @include('pages.admin.post._form')

                  {!! Form::close() !!}
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
  </div>
  <!-- /.row -->
@endsection
