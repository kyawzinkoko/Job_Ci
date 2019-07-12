<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="<?php echo base_url('assets/css/navi.css'); ?>" rel="stylesheet">
         <link href="<?php echo base_url('assets/css/form.css'); ?>" rel="stylesheet">
          <link href="<?php echo base_url('assets/css/page.css'); ?>" rel="stylesheet">
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
        <div class="show">
            <div class="col-sm-10">
                <table class="table table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Location</th>
                            <th>Position</th>
                            <th>Company</th>
                        </tr>
                    </thead>
                    <?php foreach ($jobs As $job ): ?>
                        <tr>
                            <td><?php echo $job -> location; ?></td>
                            <td><?php echo $job -> position; ?></td>
                            <td><?php echo $job -> company; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        <nav aria-label="Page navigation example" style="margin-left: 70rem">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
         </nav>
        <div class="footer" style="margin-left: 30rem">
            <nav class="nav">
                <a class="nav-link active" href="#">Aboutjob</a>
                <a class="nav-link" href="#">Full RssFeed</a>
                <a class="nav-link" href="#">Jobbeet API</a>
                <a class="nav-link dis" href="#">Affiliate</a>
            </nav>
        </div>
   </body>
</html>
