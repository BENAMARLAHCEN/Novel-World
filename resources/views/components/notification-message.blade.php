@props(['type'])

@if ($message = Session::get($type))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            NioApp.Toast('{{ $message }}', 'success');
        });
    </script>
@endif