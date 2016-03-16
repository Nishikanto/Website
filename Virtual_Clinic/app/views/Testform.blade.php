

{{ Form::open(array('route' => 'registration', 'method' => 'post', 'class' => 'form-registration')) }}

    {{-- Username field. ------------------------}}
    {{ Form::label('username', 'Username') }}
    {{ Form::text('username') }}

    <br></br>

    {{-- Email address field. -------------------}}
    {{ Form::label('email', 'Email address') }}
    {{ Form::email('email') }}

    <br></br>

    {{-- Password field. ------------------------}}
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}

    <br></br>

    {{-- Password confirmation field. -----------}}
    {{ Form::label('password_confirmation', 'Password confirmation') }}
    {{ Form::password('password_confirmation') }}

    <br></br>

    {{-- Form submit button. --------------------}}
    {{ Form::submit('Register') }}

{{ Form::close() }}
