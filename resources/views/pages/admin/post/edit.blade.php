@extends('layouts.back')

@section('header')
  <script src="{{ asset('back/vendor/tinymce/tinymce.min.js') }}"></script>
@endsection

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

                  {!! Form::model($post, ['route' => ['post.update', $post->id], 'method' => 'PUT', 'novalidate']) !!}

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

@section('footer')
  <script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.body",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
@endsection
