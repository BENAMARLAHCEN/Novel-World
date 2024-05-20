
{{-- disply errors --}}

@if ($errors->any())
    <div class="alert alert-danger alert-icon">
        <em class="icon ni ni-cross-circle"></em>
        <strong>Whoops!</strong> There were some problems with your input.
        <ul>
            @foreach ($errors->all() as $error)
                <li><strong>{{ $error }}</strong></li>
            @endforeach
        </ul>
    </div>
@endif
