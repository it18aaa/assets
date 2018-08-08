<html>
    <head>
        <title>Assets</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>SCS Login</h1>

        {{ Form::open(['method'=> 'Post', 'url' => route('login') ]) }}

        {{ Form::label('email', 'e-mail address') }}
        {{ Form::text('email', null, ['required']) }}



        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['required']) }}

        {{ Form::submit('submit', null )}}
        {{ Form::close() }}
        
    </body>
</html>
