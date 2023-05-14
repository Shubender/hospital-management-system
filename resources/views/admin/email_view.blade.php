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
            <form action="{{url('sendemail', $data->id)}}" method="POST">
                @csrf
                <div style="padding: 15px;">
                    <label for="greeting">
                        Greeting
                        <input type="text" name="greeting" style="color: black;"required>
                    </label>
                </div>
                <div style="padding: 15px;">
                    <label for="body">
                        Body
                        <input type="text" name="body" style="color: black;" required>
                    </label>
                </div>
                <div style="padding: 15px;">
                    <label for="actiontext">
                        Action Text
                        <input type="text" name="actiontext" style="color: black;" required>
                    </label>
                </div>
                <div style="padding: 15px;">
                    <label for="actionurl">
                        Action URL
                        <input type="text" name="actionurl" style="color: black;" required>
                    </label>
                </div>
                <div style="padding: 15px;">
                    <label for="endpart">
                        End Part
                        <input type="text" name="endpart" style="color: black;" required>
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
