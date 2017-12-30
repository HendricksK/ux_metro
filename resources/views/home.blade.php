@extends('master')
@section('content')
    @include('navigation.breadcrumb')
    <div class="container w-75 justify-content-center"> 
        <form class="w-100" id="metroUserInput" action="/success">
            <input type="hidden" name="transportType" value={{$transport_type}}>
            <div class="form-group">
                <label for="transportId">Transport ID</label>
                <input type="text" class="form-control" id="transportId" name="transportId" aria-describedby="Transport ID" placeholder="Transport ID eg: 0925" required>
            </div>
            <div class="form-group">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" name="selectedStation" id="selectedStation" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Select station
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @foreach ($stations as $station)
                             <li class="dropdown-item">{{$station}}</li>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Is your transport late?</label>
                <div class="radio">
                    <label>Yes&nbsp;&nbsp;</label>
                    <input type="radio" id="ontime" name="ontime">
                </div>
                <div class="radio">
                    <label>No&nbsp;&nbsp;</label>
                    <input type="radio" id="late" name="late">
                </div>
            </div>
            <div class="form-group">
                <label>Would you like to add any more detail? 100 characters only.</label>
                <textarea id="transportExtra" name="transportExtra" class="form-control" rows="2" id="extraInfo"  maxlength="100"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection