@if ($message = Session::get('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            NioApp.Toast('{{ $message }}', 'success');
        });
    </script>
@endif
