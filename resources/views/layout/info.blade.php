@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@if (session('messages'))
    <div>
        <h2>
            {{ session('messages') }}
        </h2>
    </div>
@endif