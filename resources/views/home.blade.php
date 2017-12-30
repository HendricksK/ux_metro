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
                    <form class="w-100" id="metro-user-input">
                        <div class="form-group">
                            <label for="transportId">Email address</label>
                            <input type="text" class="form-control" id="transportId" aria-describedby="Transport ID" placeholder="Transport ID eg: 0925">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label id="transportStatus">Is your transport late?</label>
                            <div class="radio">
                                <label>Yes </label>
                                <input type="radio" name="optradio">
                            </div>
                            <div class="radio">
                                <label>No </label>
                                <input type="radio" name="optradio" checked>
                            </div>
                        </div>
                        <div class="form-group">
                            <label id="transportStatus">Would you like to add any more detail? 144 characters only.</label>
                            <textarea class="form-control" rows="5" id="extraInfo"  maxlength="144"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-3">
                    <img width="100%" src="../assets/images/Burj_Khalifa.jpg" class="rounded" alt="...">    
                </div>   
            </div>
        </div>
    </body>
    <footer>
        <script type="text/javascript" src="../js/popper.min.js"></script>
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/metro.js"></script>
    </footer>
</html>
