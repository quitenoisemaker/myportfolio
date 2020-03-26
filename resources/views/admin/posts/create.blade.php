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



<h2>Create Post</h2>

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


{!! Form::open(['method'=>'post', 'action'=> 'AdminPostController@store', 'files'=>true]) !!}
 
 <div class="form-group">
 	{!! Form::label('title', 'Title:')!!}
 	{!! Form::text('title', null, ['class'=>'form-control'])!!}

 </div>


  <div class="form-group">
  {!! Form::label('category_id', 'Category:')!!}
  {!! Form::select('category_id',[''=>'Choose Categories'] +$categories, null, ['class'=>'form-control'])!!}

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
 	{!! Form::submit('Create Post', ['class'=>'btn btn-primary'])!!}
 </div>
 {!! Form::close() !!}



@stop