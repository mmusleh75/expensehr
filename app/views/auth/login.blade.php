<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <!-- Bootstrap core CSS -->

    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('fonts/css/font-awesome.min.css') }}
    {{ HTML::style('css/animate.min.css') }}

    <!-- Custom styling plus plugins -->
    {{ HTML::style('css/custom.css') }}
    {{ HTML::style('css/icheck/flat/green.css') }}

    {{ HTML::script('js/jquery.min.js') }}


    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>
<body style="">
     <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">

            <div id="login" class="animate form">
                <section class="login_content">

                    @if($errors->any())
                    <div class="alert alert-error">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                    </div>
                    @endif


                    {{ Form::open(array('url' => 'login','method' => 'POST'))  }}
                        {{ Form::token() }}
                        <h1>Login Form</h1>
                        <div>
                            {{ Form::text('email','',array('class' => 'form-control' , 'placeholder' => 'E-mail')) }}
                        </div>
                        <div>
                            {{ Form::password('password',array('class' => 'form-control' , 'placeholder' => 'Your Password')) }}
                        </div>
                        <div>
                             {{ Form::submit('login',array('class' => 'btn btn-success')) }}
                        {{ Form::close() }}
                                <a class="reset_pass" href="#">Lost your password?</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">New to site?
                        {{ HTML::link('sign-up', 'Create New Account', array('class'=>'to_register')) }}
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>

                                <p>©2015 All Rights Reserved. Mahmoud Nairat</p>
                            </div>
                        </div>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>

        </div>
    </div>
</body>
</html>
