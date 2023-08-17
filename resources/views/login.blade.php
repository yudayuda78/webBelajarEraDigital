
@extends('layouts.main')

@section('container')   
   <div class="background">
        <form action="">
            <ul>
                <h1>Login</h1>
                <li>
                    <input type="text" name="username" id="username" placeholder="username">
                </li>
                <li>
                    <input type="password" name="password" id="password" placeholder="password">
                </li>
                <li>
                    <button type="submit" name="login" class="btn btn-primary" value="LOGIN">Submit</button>
                </li>
                <li><a href="/register">Belum punya akun? Daftar disini</a></li>
            </ul>
        </form>
    </div>
@endsection

