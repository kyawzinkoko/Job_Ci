<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="<?php echo base_url('assets/css/nav.css'); ?>" rel="stylesheet">
         <link href="<?php echo base_url('assets/css/form.css'); ?>" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
    </head>
    <body>
        <div class="title">
            <h1>Job</h1>
        </div>
        <div class="top">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="search..">
                <button type="submit" class="searchButton">
                 <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <div class="Postjob">
            <div class="cate">
                <label class="Category">Categories</label>
                <select class="favorites">
                    <option value="Designer">Designer</option>
                    <option value="Developer">Developer</option>
                    <option value="Content Writer">Content Writer</option>
                </select>
            </div>
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

        <?php echo form_open('Userpost'); ?>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Company</label>
                <div class="col-sm-10">
                    <?php
                        echo form_input(array(
                            'type'  => 'text',
                            'class' => 'form-control form',
                            'id'    => 'company',
                            'name'  => 'Company',
                            'value' => set_value('company'),
                            'required' => 'required',
                            'autofocus' => 'on',
                            ));
                    ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">logo</label>
                <div class="col-sm-10">
                    <?php
                        echo form_input(array(
                            'type'  => 'text',
                            'class' => 'form-control form',
                            'id'    => 'logo',
                            'name'  => 'Logo',
                            'value' => set_value('logo'),
                            'required' => 'required',
                            'autofocus' => 'on',
                            ));
                    ?>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">URL</label>
                <div class="col-sm-10">
                    <?php
                        echo form_input(array(
                            'type'  => 'text',
                            'class' => 'form-control form',
                            'id'    => 'url',
                            'name'  => 'URL',
                            'value' => set_value('url'),
                            'required' => 'required',
                            'autofocus' => 'on',
                            ));
                    ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Position</label>
                <div class="col-sm-10">
                    <?php
                        echo form_input(array(
                            'type'  => 'text',
                            'class' => 'form-control form',
                            'id'    => 'position',
                            'name'  => 'Position',
                            'value' => set_value('position'),
                            'required' => 'required',
                            'autofocus' => 'on',
                            ));
                    ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Location</label>
                <div class="col-sm-10">
                    <?php
                        echo form_input(array(
                            'type'  => 'text',
                            'class' => 'form-control form',
                            'id'    => 'location',
                            'name'  => 'Location',
                            'value' => set_value('position'),
                            'required' => 'required',
                            'autofocus' => 'on',
                            ));
                    ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <?php
                        echo form_input(array(
                            'type'  => 'textarea',
                            'class' => 'form-control form',
                            'id'    => 'description',
                            'name'  => 'Description',
                            'value' => set_value('description'),
                            'required' => 'required',
                            'autofocus' => 'on',
                            ));
                    ?>
                </div>
            </div>
            <?php echo form_submit('submit', $id ? '' : '', array('class' => 'btn btn-primary'));?>
            <a href="<?php echo site_url($base_path . '' .  . '/'); ?>" class="btn">Post a job</a>
        <?php echo form_close(); ?><br/>
        </div>
    </body>
</html>
