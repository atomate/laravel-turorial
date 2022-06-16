
<html>
    <head></head>

<body>
<div class="container">
    @foreach ($students as $user)
        <div>{{ $user->id }}, {{ $user->first_name }} {{ $user->last_name }}, {{ $user->email }}<div>
    @endforeach
</div>
 
{{ $students->links() }}
</body>
</html>