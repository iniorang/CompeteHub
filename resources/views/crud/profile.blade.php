@extends('layout.dashboard')
@section('content')
<body>
    <form method="POST" action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}">
        @csrf
        @if(isset($user))
            @method('PUT')
        @endif
        <input type="text" name="nama" value="{{ isset($user) ? $user->nama : '' }}">
        <input type="email" name="email" value="{{ isset($user) ? $user->email : '' }}">
        <input type="password" name="password">
        <input type="text" name="alamat" value="{{ isset($user) ? $user->alamat : '' }}">
        <input type="text" name="notelp" value="{{ isset($user) ? $user->notelp : '' }}">
        <input type="hidden" name="type" value="0">
        <input type="hidden" name="isActive" value="0">
        <button type="submit">{{ isset($user) ? 'Update' : 'Create' }}</button>
    </form>
</body>
@endsection
