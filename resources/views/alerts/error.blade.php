@isset($error)
    @foreach ($error as $e)
    <div class="alert alert-error">{{ $e }}</div>
    @endforeach    
@endisset
