<!DOCTYPE html>
<html lang="en">
<head>
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
    <!-- partial -->
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
            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px;">
                    <label for="name">
                        Doctor Name
                        <input type="text" name="name" style="color: black;" placeholder="Write the name" required>
                    </label>
                </div>
                <div style="padding: 15px;">
                    <label for="phone">
                        Phone
                        <input type="number" name="phone" style="color: black;" placeholder="Write a number" required>
                    </label>
                </div>
                <div style="padding: 15px;">
                    <label for="speciality">
                        Speciality
                        <select name="speciality" style="color: black; width: 200px;" id="" required>
                            <option>-Select-</option>
                            <option value="skin">Skin</option>
                            <option value="heart">Heart</option>
                            <option value="eye">Eye</option>
                            <option value="nose">Nose</option>
                        </select>
                    </label>
                </div>
                <div style="padding: 15px;">
                    <label for="room">
                        Room No
                        <input type="text" name="room" style="color: black;" placeholder="Write the room number" required>
                    </label>
                </div>
                <div style="padding: 15px;">
                    <label for="file">
                        Doctor Photo
                        <input type="file" name="file" style="color: black;" required>
                    </label>
                </div>
                <div style="padding: 15px;">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.script')
<!-- End custom js for this page -->
</body>
</html>
