<!DOCTYPE html>
<!--
/**
 * @package       IronPHP CRUD Application
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */
-->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>IronPHP Framework - CRUD</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <section class="m-3">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>IronPHP 1.0 CRUD Example</h2>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-lg-8">
                    <h2>Product's Details</h2>
                </div>
                <div class="col-lg-4 pull-right push-right float-right">
                    <a class="btn btn-success pull-right push-right float-right" href="<?=e(server_root)?>"><i class="fas fa-backspace"></i> Back To Home</a>
                </div>
            </div>
            <!--
            if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p> $message </p>
                </div>
            endif
            -->

            <div class="card border-primary">
                <div class="card-body">
                    <?=e(products:)?>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ID:</strong>
                            <?=e(id)?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <?=e(name)?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Price:</strong>
                            $ <?=e(price)?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Details:</strong>
                            <?=e(detail)?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                    	    <form action="<?=e(server_root)?><?=e(id)?>" method="POST">
                                <input type="hidden" name="_token" value="1S8mkMaemwfmlBAetRfoytu0YlDBrJElVKRU0++fdXc=">
                                <input type="hidden" name="_method" value="DELETE">
                                <a class="btn btn-sm btn-primary text-white" href="<?=e(server_root)?><?=e(id)?>/edit/"><i class="fas fa-edit"></i> Edit</a>

                                <button class="btn btn-sm btn-danger text-white"><i class="fas fa-trash"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                    <?=e(:products)?>
                </div>
            </div>

        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
