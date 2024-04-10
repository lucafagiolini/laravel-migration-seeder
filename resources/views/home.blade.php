@extends ('layouts/app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <h1>TRAINS</h1>
            </div>

            @foreach ($trains as $train)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Company: {{ $train->company }} </h5>
                        <h5 class="card-title">Starting Station: {{ $train->starting_station }} </h5>
                        <h5 class="card-title">Arriving Station: {{ $train->arriving_station }} </h5>
                        <h5 class="card-title">Departure Time: {{ $train->departure_time }} </h5>
                        <h5 class="card-title">Arriving Time: {{ $train->arriving_time }} </h5>
                        <h5 class="card-title">Train Code: {{ $train->train_code }} </h5>
                        <h5 class="card-title">Carrige Number: {{ $train->carriage_number }} </h5>
                        <h5 class="card-title">In Time: {{ $train->in_time }} </h5>
                        <h5 class="card-title">Is canceled?: {{ $train->is_canceled }} </h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
