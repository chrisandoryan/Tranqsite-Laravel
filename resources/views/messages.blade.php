<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('header')
</head>

@include('alerts.error')
@include('alerts.success')
@include('nav')

<body class="hack dark">

    <div class="grid main-form">
        @if ($messages->isEmpty())
            <div class="alert alert-warning">No messages found.</div>
        @endif
        @foreach ($messages as $m)
        <div>
            <div class="card">
                <header class="card-header">To: {{ $m->sender_id }}</header>
                <header class="card-header">{{ $m->title }}</header>
                <div class="card-content">
                    <div class="inner">{{ $m->message }}</div>
                </div>
            </div>
        </div>
        @endforeach
</body>

</html>
</body>

</html>