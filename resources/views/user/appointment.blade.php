<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

        <form class="main-form" action="{{url('appointment')}}" method="POST">

            @csrf

            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" name="name" class="form-control" placeholder="Full name" required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" name="email" class="form-control" placeholder="Email address.." required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" name="data" class="form-control" required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="doctor" class="custom-select">
                        @foreach($doctor as $doctors)
                            <option value="{{$doctors->name}}">{{$doctors->name}} - {{$doctors->speciality}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" name="number" class="form-control" placeholder="Number.." required>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6"
                              placeholder="Enter message.." required></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3 wow zoomIn" style="background-color: #00D9A5">Submit Request</button>
        </form>
    </div>
</div> <!-- .page-section -->
