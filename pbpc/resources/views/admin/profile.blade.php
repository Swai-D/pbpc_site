@extends('admin.index')
@section('content')
<div class="">
   <img src="/uploads/avatar/{{Auth::user()->avatar}}" style ="width:110px; height:110px; float:left;border-radius:50%; margin-right:25px;">
   <h2 class="">{{Auth::user()->name}}'s Profile</h2>
   <form enctype="multipart/form-data" action="/admin/profile" method="POST">
      <label for="update">Update Profile Image</label>
      <input type="file" name ="avatar">
        <button type="submit" class="pull-right btn btn-sm btn-primary">submit</button>
         @csrf
   </form>

 </div>
@endsection