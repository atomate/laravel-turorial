@if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif


<form method="POST" action="/students/store">
    @csrf
    <div>First Name: <input name="first_name" value="{{ old('first_name')}}" /></div>
    <div>Last Name: <input name="last_name" value="{{ old('last_name')}}" /></div>
    <div>Email: <input name="email" value="{{old('email')}}" /></div>
    <div><input type="submit" value="Store" /></div>
</form>