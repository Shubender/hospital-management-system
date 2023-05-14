<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">

    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
    <!-- Required meta tags -->
    @include('admin.css')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    <!-- partial:partials/_navbar.html -->
    @include('admin.navbar')
    <div class="container-fluid page-body-wrapper">
        <div class="container" align="center" style="padding-top: 100px;">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        x
                    </button>
                    {{session()->get('message')}}
                </div>
            @endif
            <form action="{{url('editdoctor', $data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px;">
                    <label for="name">
                        Doctor Name
                        <input type="text" name="name" style="color: black;" placeholder="Write the name" value="{{$data->name}}" required>
                    </label>
                </div>
                <div style="padding: 15px;">
                    <label for="phone">
                        Phone
                        <input type="number" name="phone" style="color: black;" placeholder="Write a number" value="{{$data->phone}}" required>
                    </label>
                </div>
                <div style="padding: 15px;">
                    <label for="speciality">
                        Phone
                        <input type="text" name="speciality" style="color: black;" placeholder="Write a speciality" value="{{$data->speciality}}" required>
                    </label>
                </div>
                <div style="padding: 15px;">
                    <label for="room">
                        Room No
                        <input type="text" name="room" style="color: black;" placeholder="Write the room number"
                               value="{{$data->room}}" required>
                    </label>
                </div>
                <div style="padding: 15px;">
                    <label for="room">
                        Doctor Photo
                        <img width="50" src="doctorimage/{{$data->image}}">
                    </label>
                </div>
                <div style="padding: 15px;">
                    <label for="file">
                        New Photo
                        <input type="file" name="file" style="color: black;">
                    </label>
                </div>
                <div style="padding: 15px;">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.script')
<!-- End custom js for this page -->
</body>
</html>
