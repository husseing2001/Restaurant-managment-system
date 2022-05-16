<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Admin</title>
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
  @include("admin.navbar")
    <table bgcolor="black">
    <tr>
        <td style="padding:30px">Name</td>
        <td style="padding:30px">Phone</td>
        <td style="padding:30px">Address</td>
        <td style="padding:30px">Foodname</td>
        <td style="padding:30px">Price</td>
        <td style="padding:30px">Quantity</td>
    
    </tr>

    @foreach($data as $data)
    <tr align="center">
        <td style="padding:30px">{{$data->name}}</td>
        <td style="padding:30px">{{$data->phone}}</td>
        <td style="padding:30px">{{$data->address}}</td>
        <td style="padding:30px">{{$data->foodname}}</td>
        <td style="padding:30px">{{$data->price}}</td>
        <td style="padding:30px">{{$data->quantity}}</td>
        
    </tr>
    @endforeach
</table>


   @include("admin.adminscript")
  </body>
</html>