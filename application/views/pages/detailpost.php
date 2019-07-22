 <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="<?php echo base_url('assets/css/navigation.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/form.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/pages.css'); ?>" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
    </head>
    <body>
        <div class="top">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="search..">
                <button type="submit" class="searchButton">
                 <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
            <div class="detail">
                <?php foreach ($jobs As $job ): ?>
                    <div class="">
                        <div class="d-flex flex-row">
                            <div class="col-md-4 p-5">
                                <div class="card" style="margin-left: 60px;">
                                    <div class="card-body">
                                        <p class="h2">
                                            <?php echo $job -> company; ?>
                                        </p>
                                        <p class="h3">
                                            <?php echo $job -> location;?>
                                        </p>
                                   </div>
                                </div>
                            </div>
                            <div class="card " style="height: 11rem; margin-left: 750px;">
                                <div class="card-body">
                                    <img src="<?php echo base_url('assets/img/man.png'); ?>">
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="post-time">
                        <div class="col-md-10 mr-5 p-5">
                            <div class="card" style="margin-left: 60px;">
                                <div class="card-body">
                                      <p><?php echo $job -> position;?> - Full Time</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-des">
                        <div class="col-md-10 mr-5 p-5">
                            <div class="card" style="margin-left: 60px;padding: 10px;">
                                <div class="card-body">
                                    <?php echo $job -> description; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <div class="footer">
            <nav class="nav">
                <a class="nav-link active" href="#">AboutJob</a>
                <a class="nav-link" href="#">Full RssFeed</a>
                <a class="nav-link" href="#">Jobbeet API</a>
                <a class="nav-link dis" href="#">Affiliate</a>
                <p class="my">
                   <a class="nav-link" href="#">© 2019 Aluto Benli Inc.</a>
                </p>
            </nav>

        </div>
    </body>
</html>
