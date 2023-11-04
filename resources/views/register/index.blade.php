@extends('home.home-layouts.home-main')

<link rel="stylesheet" href="{{ asset('home-resource/css/login-register-style.css') }}">

<style>
    .form-section {
        display: none;
    }

    .form-section.current {
        display: block;
    }
</style>

@section('container')
@include('home.home-layouts.home-navbar')
<style>
        body {
            background: #E8EEF0;
        }
</style>
<div class="register-container">
            <form action="/register" method="POST" id="registerForm">

                @csrf

                <ul>
                    <a href="/"><img class src="img/logo-login.png" alt=""><br></a>
                    <div class="form-section current" id="section1">
                        <!-- Langkah 1 -->
                        <!-- Form fields for username and password -->
                        <li>
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                                id="username" placeholder="username">
                            @error('username')
                                <div class="invalid-tooltip">
                                    Masukan username yang benar
                                </div>
                            @enderror
                        </li>
                        <li>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" placeholder="email">
                            @error('email')
                                <div class="invalid-tooltip">
                                    Masukan email yang benar
                                </div>
                            @enderror
                        </li>
                        <li>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                placeholder="password">
                            @error('password')
                                <div class="invalid-tooltip">
                                    Masukan password yang benar
                                </div>
                            @enderror
                        </li>
                    </div>
                    <div class="form-section" id="section2">
                        <!-- Langkah 2 -->
                        <!-- Form fields for full name and phone number -->
                        <li>
                            <input type="text" name="namalengkap"
                                class="form-control @error('namalengkap') is-invalid @enderror" id="namalengkap"
                                placeholder="nama lengkap">
                            @error('namalengkap')
                                <div class="invalid-tooltip">
                                    Masukan nama yang benar
                                </div>
                            @enderror
                        </li>
                        <li>
                            <input type="text" name="nomortelepon"
                                class="form-control @error('nomortelepon') is-invalid @enderror" id="nomortelepon"
                                placeholder="nomor telepon">
                            @error('nomortelepon')
                                <div class="invalid-tooltip">
                                    Masukan nomor WA yang benar
                                </div>
                            @enderror
                        </li>
                        <li>
                            <input type="text" name="pekerjaan"
                                class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan"
                                placeholder="pekerjaan">
                            @error('pekerjaan')
                                <div class="invalid-tooltip">
                                    Please provide a valid city.
                                </div>
                            @enderror
                        </li>
                    </div>
                    <div class="form-navigation mt-3 next-prev-con">
                        <li>
                            <button type="button" class="previous btn btn-primary next-prev">Previous</button> <button type="button" class="next btn btn-primary next-prev">Next</button> <button type="submit" class="btn btn-primary" id="submitButton"
                            style="display: none;">Submit</button>
                        </li>
                        <li>
                            
                        </li>

                    </div>
                    <div class="form-navigation mt-3 sub">
                        <li>

                        </li>
                    </div>
                </li>
                <li class="emangtelat">Sudah punya akun?<a href="/login"> <b>Langsung Login Aja!</b></a></li>
                </ul>
            </form>
        </section>
    </div>
    </div>

    <script>
        const formSections = document.querySelectorAll('.form-section');
        const prevButton = document.querySelector('.previous');
        const nextButton = document.querySelector('.next');
        const submitButton = document.querySelector('#submitButton');

        let currentSectionIndex = 0;

        function showSection(index) {
            formSections.forEach((section, i) => {
                if (i === index) {
                    section.classList.add('current');
                } else {
                    section.classList.remove('current');
                }
            });

            if (index === 0) {
                prevButton.style.display = 'none';
                nextButton.style.display = 'inline';
            } else {
                prevButton.style.display = 'inline';
                nextButton.style.display = 'inline';
            }

            if (index === formSections.length - 1) {
                nextButton.style.display = 'none';
                submitButton.style.display = 'inline';
            } else {
                nextButton.style.display = 'inline';
                submitButton.style.display = 'none';
            }
        }

        prevButton.addEventListener('click', () => {
            if (currentSectionIndex > 0) {
                currentSectionIndex--;
                showSection(currentSectionIndex);
            }
        });

        nextButton.addEventListener('click', () => {
            currentSectionIndex++;
            showSection(currentSectionIndex);
        });

        // You can add validation and data submission logic here
    </script>
@endsection
