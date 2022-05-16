<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
  @include("admin.navbar")
  
  <form action="{{url('/updatecheffood',$data->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      <div>
         <label>Chef name</label>
         <input style="color:blue"; type = "text" name="name" value="{{$data->name}}">

</div>
<div>
         <label>Speciality</label>
         <input style="color:blue"; type = "text" name="name" value="{{$data->speciality}}">
         
</div>
<div>
         <label>Old image</label>
         <img height ="300" width="300"src = "/chefimage/{{$data->image}}">
  
</div>

<div>
         <label>New image</label>
         <input type="file" required="">
</div>
<div>
  <input style="color:blue"; type ="submit" value="Update chef" >
</div>
  </form>
    

   @include("admin.adminscript")
  </body>
</html>