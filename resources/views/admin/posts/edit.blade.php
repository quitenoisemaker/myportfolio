@extends('layouts.admin')


@section('content')

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/4/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea",
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

<h1>Edit Posts</h1>


 <!-- To show the error message -->
@if(count($errors)>0)

<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)

    <li>{{$error}}</li>

    @endforeach
  </ul>
</div>

@endif


<div class="col-sm-3">
<img height="150" src="{{$post->photo ? $post->photo->file : 'No photo'}}" class="img-responsive img-rounded">
</div>

<div class="col-sm-9">
{!! Form::model($post, ['method'=>'PATCH', 'action'=> ['AdminPostController@update', $post->id], 'files'=>true]) !!}
 
 <div class="form-group">
  {!! Form::label('title', 'Title:')!!}
  {!! Form::text('title', null, ['class'=>'form-control'])!!}

 </div>


  <div class="form-group">
  {!! Form::label('category_id', 'Category:')!!}
  {!! Form::select('category_id', $categories, null, ['class'=>'form-control'])!!}

 </div>

 <div class="form-group">
  {!! Form::label('photo_id', 'Photo:')!!}
  {!! Form::file('photo_id', ['class'=>''])!!}

 </div>


 <div class="form-group">
  {!! Form::label('body', 'Description:')!!}
  {!! Form::textarea('body', null, ['class'=>'form-control'])!!}

 </div>


 <div class="form-group">
  {!! Form::submit('Update Post', ['class'=>'btn btn-primary'])!!}
 </div>
 {!! Form::close() !!}

 <div class="" style="margin-top: -52px; text-align: right">
 {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPostController@destroy', $post->id]]) !!}

 <div class="form-group">
  {!! Form::submit('Delete Post', ['class'=>'btn btn-danger'])!!}
 </div>


 {!! Form::close() !!}
</div>
</div>


@stop