<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <title>Metro - App</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form class="w-75 p-3">
                    <div class="form-group">
                        <label for="transportId">Email address</label>
                        <input type="text" class="form-control" id="transportId" aria-describedby="Transport ID" placeholder="Transport ID eg: 0925">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <label id="transportStatus">Is your transport late?</label>
                    <div class="form-group">
                        <div class="radio">
                            <label>Option 1</label><br>
                            <input type="radio" name="optradio">
                        </div>
                        <div class="radio">
                            <label>Option 2</label><br>
                            <input type="radio" name="optradio">
                        </div>
                        <!-- <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" aria-label="Radio button for following text input">
                                <label for="transportId">Email address</label>
                                <input type="radio" aria-label="Radio button for following text input">
                                <label for="transportId">Email address</label>
                            </div>
                        </div> -->
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>     
            </div>
        </div>
    </body>
    <footer>
        <script type="text/javascript" src="../js/popper.min.js"></script>
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    </footer>
</html>
