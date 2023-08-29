@extends('layouts.main')

<style>
    .form-section {
        display: none;
    }

    .form-section.current {
        display: block;
    }
</style>

@section('container')
    <div class="background">
        <form action="/register" method="POST" id="registerForm">

            @csrf

            <ul>
                <h1>Daftar</h1>
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
                        <input type="email" name="email" class="form-control @error('enail') is-invalid @enderror"
                            id="email" placeholder="email">
                        @error('email')
                            <div class="invalid-tooltip">
                                Please provide a valid city.
                            </div>
                        @enderror
                    </li>
                    <li>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" placeholder="password">
                        @error('password')
                            <div class="invalid-tooltip">
                                Please provide a valid city.
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
                                Please provide a valid city.
                            </div>
                        @enderror
                    </li>
                    <li>
                        <input type="text" name="nomortelepon"
                            class="form-control @error('nomortelepon') is-invalid @enderror" id="nomortelepon"
                            placeholder="nomor telepon">
                        @error('nomortelepon')
                            <div class="invalid-tooltip">
                                Please provide a valid city.
                            </div>
                        @enderror
                    </li>
                    <li>
                        <input type="text" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror"
                            id="pekerjaan" placeholder="pekerjaan">
                        @error('pekerjaan')
                            <div class="invalid-tooltip">
                                Please provide a valid city.
                            </div>
                        @enderror
                    </li>
                </div>
                <div class="form-navigation mt-3">
                    <li>
                        <button type="button" class="previous btn btn-primary">Previous</button>
                    </li>
                    <li>
                        <button type="button" class="next btn btn-primary">Next</button>
                    </li>
                    <li>
                        <button type="submit" class="btn btn-primary" id="submitButton"
                            style="display: none;">Submit</button>
                    </li>
                </div>
                <li><a href="/login">Login</a></li>
            </ul>
        </form>
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
