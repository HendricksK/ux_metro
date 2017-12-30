<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <title>Metro - App</title>
    </head>
    <body>
        <div class="w-100 p-0 container justify-content-center">
            @include('navigation.nav')
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <img width="100%" src="../assets/images/Burj_Khalifa.jpg" class="rounded" alt="...">    
                </div>
                <div class="col-6">
                    @include('navigation.breadcrumb')
                    <div class="container w-75 justify-content-center"> 
                        <form class="w-100" id="metroUserInput">
                            <div class="form-group">
                                <label for="transportId">Transport ID</label>
                                <input type="text" class="form-control" id="transportId" name="transportId" aria-describedby="Transport ID" placeholder="Transport ID eg: 0925">
                            </div>
                            <div class="form-group">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" name="selectedStation" id="selectedStation" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Select station
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @foreach ($stations as $station)
                                             <li class="dropdown-item"> {{ $station }}</li>
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
                                <label>Would you like to add any more detail? 144 characters only.</label>
                                <textarea id="transportExtra" name="transportExtra" class="form-control" rows="2" id="extraInfo"  maxlength="144"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-3">
                    <img width="100%" src="../assets/images/Burj_Khalifa.jpg" class="rounded" alt="...">    
                </div>   
            </div>
        </div>
    </body>
    <footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../js/metro.js"></script>
    </footer>
</html>
