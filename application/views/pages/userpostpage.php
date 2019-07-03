<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <link href="<?php echo base_url('assets/css/form.css'); ?>" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header">
            <h1 class="display_1">Job</h1>
        </div>
        <div class="top">
                <div class="row">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <div class="end">
                    <a href="#" class="btn btn-outline-success">Post a job</a>
                    </div>
                </div>
        </div>
        <div class="Postjob">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Type</label>
                    <div class="form-check col-1">
                        <label class="form-check-label">
                           Full Time
                         </label>
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    </div>
                    <div class="form-check col-1">
                        <label class="form-check-label">
                           Part Time
                         </label>
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option2" checked>
                    </div>
                    <div class="form-check col-1">
                        <label class="form-check-label">
                           Freelance
                         </label>
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option3" checked>
                    </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Company</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control form">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">logo</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control form">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">URL</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control form">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Position</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control form">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Location</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control form">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form Description">
                </div>
            </div>
        </div>
    </body>
</html>
