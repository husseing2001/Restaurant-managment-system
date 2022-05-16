<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href = "/public" >
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
  @include("admin.navbar")
<div style= "position: relative;top: 60px, right:-150px">   
    <form action="{{url('/update',$data->id)}}" method ="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Title</lable>
            <input style= "color:blue;" type="text" name = "title" placeholder = "Hello {{$data->title}}" required>

        </div>
        <div>
            <label>Price</lable>
            <input style= "color:blue;" type="num" name = "price" placeholder = "Hello {{$data->price}}" required>
            
        </div>
        <div>
            <label>Description</lable>
            <input style= "color:blue;" type="text" name = "description" placeholder = "Hello {{$data->description}}" required>
        </div>

        <div>
            <label>old Image</lable>
            <img height ="200" width ="200"src="/foodimage/{{$data->image}}">
            
        </div>

        <div>
            <label>New Image</lable>
            <input  type="file" name = "image" required>
            
        </div>
        
        <div>
            <input style = "color:black"; type="submit" value="Save">
        </div>
    </form>
</div>
   @include("admin.adminscript")
  </body>
</html> 