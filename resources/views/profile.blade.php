@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <img src="/uploads/avatars/{{$user->avatar}}"
          style="width:150px; height:150px; border:1px solid #ddd; float:left; border-radius:50%; margin-right:25px" alt="" />

          <form enctype="multipart/form-data" class="" action="/profile" method="post" >
            <label for="">Mettre l'image du profil.</label>
            <input type="file" name="avatar" value="">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="name" value="OK" class="pull-right btn btn-sm btn-primary">
          </form>

          <h2>{{ $user->name }}</h2>
        </div>
    </div>
</div>
@endsection
