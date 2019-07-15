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
        <div class="Postjob">
            <?php echo form_open(); ?>
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
                    <?php foreach ($types as $value => $name): ?>
                        <div class="form-check col-1">
                            <?php echo form_label($name, $value, array('class' => 'form-check-label')); ?>
                            <?php echo form_radio('type', $value, set_value('type') == $value, array('class' => 'form-check-input', 'id' => $value)); ?>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="form-group row">
                    <?php echo form_label('Company', 'company', array('class' => 'col-sm-2 col-form-label')); ?>
                    <div class="col-sm-10">
                        <?php
                        echo form_input(array(
                            'type'  => 'text',
                            'name'  => 'company',
                            'id'    => 'company',
                            'class' => 'form-control form',
                            'value' => set_value('company'),
                            'placeholder' => 'Enter Company Name'
                        ));
                        ?>
                    </div>
                </div>
                <div class="form-group row">
                    <?php echo form_label('Logo', 'logo', array('class' => 'col-sm-2 col-form-label')); ?>
                    <div class="col-sm-10">
                        <?php
                        echo form_input(array(
                            'type'  => 'text',
                            'name'  => 'logo',
                            'id'    => 'logo',
                            'class' => 'form-control form',
                            'value' => set_value('logo'),
                            'placeholder' => 'Fill logo'
                        ));
                        ?>
                    </div>
                </div>
                <div class="form-group row">
                    <?php echo form_label('URL', 'url', array('class' => 'col-sm-2 col-form-label')); ?>
                    <div class="col-sm-10">
                        <?php
                        echo form_input(array(
                            'type'  => 'text',
                            'name'  => 'url',
                            'id'    => 'url',
                            'class' => 'form-control form',
                            'value' => set_value('url'),
                            'placeholder' => 'Enter URL'
                        ));
                        ?>
                    </div>
                </div>
                <div class="form-group row">
                    <?php echo form_label('Email', 'email', array('class' => 'col-sm-2 col-form-label')); ?>
                    <div class="col-sm-10">
                        <?php
                        echo form_input(array(
                            'type'  => 'text',
                            'name'  => 'email',
                            'id'    => 'email',
                            'class' => 'form-control form',
                            'value' => set_value('email'),
                            'placeholder' => 'Enter Email'
                        ));
                        ?>
                    </div>
                </div>
                <div class="form-group row">
                    <?php echo form_label('Position', 'position', array('class' => 'col-sm-2 col-form-label')); ?>
                    <div class="col-sm-10">
                        <?php
                        echo form_input(array(
                            'type'  => 'text',
                            'name'  => 'position',
                            'id'    => 'position',
                            'class' => 'form-control form',
                            'value' => set_value('position'),
                            'placeholder' => 'Enter position'
                        ));
                        ?>
                    </div>
                </div>
                <div class="form-group row">
                    <?php echo form_label('Location', 'location', array('class' => 'col-sm-2 col-form-label')); ?>
                    <div class="col-sm-10">
                        <?php
                        echo form_input(array(
                            'type'  => 'text',
                            'name'  => 'location',
                            'id'    => 'location',
                            'class' => 'form-control form',
                            'value' => set_value('location'),
                            'placeholder' => 'Enter location'
                        ));
                        ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                       <textarea class="form-control form" name="description" placeholder="Enter Job Description"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo form_submit('submit', 'Post Job', array('class' => 'btn btn-success btn-sm'));?>
                </div>
            <?php echo form_close(); ?>
        </div>
    </body>
</html>
