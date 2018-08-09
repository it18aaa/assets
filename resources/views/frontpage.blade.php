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
        @endisset

        <br />

        @isset( Auth::user()->name )
            Role: {{  Auth::user()->roles->first()->name }}
        @endisset


        @guest
            {{ Form::open(['method'=> 'Post', 'url' => route('login') ]) }}
            {{ Form::label('email', 'e-mail address') }}
            {{ Form::text('email', null, ['required']) }}
            <br />
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['required']) }}
            <br /><br />
            {{ Form::submit('submit', null )}}
            
            {{ Form::close() }}
        @endguest
        
    </body>
</html>
