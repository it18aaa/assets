<html>
    <head>
        <title>Assets</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>SCSIT</h1>

        @isset( Auth::user()->name )
            User name: 
            {{ Auth::user()->name }}
            <br />
            Roles: 
            @foreach(Auth::user()->roles as $role )
                {{ $role->name }}
            @endforeach
            {{ Form::open(['method'=> 'Post', 'url' => route('logout') ]) }}
            {{ Form::submit('Log out', ['name' => 'logout']) }}
            {{ Form::close() }}
        @endisset


        @guest
            {{ Form::open(['method'=> 'Post', 'url' => route('login') ]) }}
            {{ Form::label('email', 'e-mail address') }}
            {{ Form::text('email', null, ['required']) }}
            <br />

            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['required']) }}

            <br /><br />
            {{ Form::submit('Login', ['name' => 'login']) }}
            
            {{ Form::close() }}
        @endguest
        
    </body>
</html>
