<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/scss/styles.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="autentication-bg">

        <div class="container-lg">
            <div class="row justify-content-center authentication authentication-basic align-items-center h-100">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                    <div class="my-4 d-flex justify-content-center">
                        <a href="index.html">
                            <img src="../assets/images/brand-logos/desktop-white.png" alt="logo">
                        </a>
                    </div>
                    <div class="card custom-card">
                        <div class="card-body p-5">
                            <p class="h5 fw-semibold mb-2 text-center">Sign Up</p>
                            <p class="mb-4 text-muted op-7 fw-normal text-center">Welcome &amp; Join us by creating a
                                free account !</p>
                            <div class="row gy-3">
                                <div class="col-xl-12">
                                    <label for="signup-firstname" class="form-label text-default">First Name</label>
                                    <input type="text" class="form-control form-control-lg" id="signup-firstname"
                                        placeholder="first name">
                                </div>
                                <div class="col-xl-12">
                                    <label for="signup-lastname" class="form-label text-default">Last Name</label>
                                    <input type="text" class="form-control form-control-lg" id="signup-lastname"
                                        placeholder="last name">
                                </div>
                                <div class="col-xl-12">
                                    <label for="signup-password" class="form-label text-default">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control form-control-lg" id="signup-password"
                                            placeholder="password">
                                        <button aria-label="button" class="btn btn-light"
                                            onclick="createpassword('signup-password',this)" type="button"
                                            id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-2">
                                    <label for="signup-confirmpassword" class="form-label text-default">Confirm
                                        Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control form-control-lg"
                                            id="signup-confirmpassword" placeholder="confirm password">
                                        <button aria-label="button" class="btn btn-light"
                                            onclick="createpassword('signup-confirmpassword',this)" type="button"
                                            id="button-addon21"><i class="ri-eye-off-line align-middle"></i></button>
                                    </div>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="defaultCheck1">
                                        <label class="form-check-label text-muted fw-normal" for="defaultCheck1">
                                            By creating a account you agree to our <a href="terms_conditions.html"
                                                class="text-success"><u>Terms &amp; Conditions</u></a> and <a
                                                class="text-success"><u>Privacy Policy</u></a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-12 d-grid mt-2">
                                    <button type="button" class="btn btn-lg btn-primary">Create Account</button>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="text-muted mt-3">Already have an account? <a href="sign-in.html"
                                        class="text-primary">Sign In</a></p>
                            </div>
                            <div class="text-center my-3 authentication-barrier">
                                <span>OR</span>
                            </div>
                            <div class="btn-list text-center">
                                <button type="button" aria-label="button" class="btn btn-icon btn-primary-transparent">
                                    <i class="ri-facebook-fill"></i>
                                </button>
                                <button type="button" aria-label="button" class="btn btn-icon btn-primary-transparent">
                                    <i class="ri-google-fill"></i>
                                </button>
                                <button type="button" aria-label="button" class="btn btn-icon btn-primary-transparent">
                                    <i class="ri-twitter-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- {{ $slot }} --}}
</body>

</html>
