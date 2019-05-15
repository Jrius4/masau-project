<h3>Dear, Masau Administrator;</h3>
<h4>{{$subject}}</h4>

You received a message from : {{ $first_name }}

<p>
    First name: {{ $first_name }}&nbsp;&nbsp; Last name: {{ $last_name }}
</p>


<p>
Email: {{ $email }}
</p>

<p>
Message: {{ $user_message }}
</p>
Thanks,<br>
{{ config('app.name') }}