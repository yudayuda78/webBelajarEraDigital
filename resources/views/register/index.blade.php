
@extends('layouts.main')

@section('container')   
   <div class="background">
        <form action="/register" method="POST">
            <ul>
                <h1>Daftar</h1>
                <li>
                    <input type="" name="username" id="username" placeholder="username">
                </li>
                <li>
                    <input type="text" name="username" id="username" placeholder="username">
                </li>
                <li>
                    <input type="password" name="password" id="password" placeholder="password">
                </li>
                <li>
                    <input type="text" name="namalengkap" id="namalengkap" placeholder="nama lengkap">
                </li>
                <li>
                    <input type="text" name="nomortelepon" id="nomortelepon" placeholder="nomor telepon">
                </li>
                <li>
                    <button type="submit" name="login" class="btn btn-primary" value="LOGIN">Submit</button>
                </li>
                <li><a href="/login">Login</a></li>
            </ul>
        </form>
    </div>
@endsection

