@php
$username = 'Zulfan Afandi Siregar';
$role = 'Mahasiswa';
@endphp

@if ($role == 'Mahasiswa')
<h3>Selamat datang {{ $username }} Anda adalah seorang {{ $role }}</h3>
@else
<h3>Selamat datag {{ $username }} Anda adalah seorang User</h3>
@endif