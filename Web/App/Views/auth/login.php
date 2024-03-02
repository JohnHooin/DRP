<? require($_SERVER['DOCUMENT_ROOT'] . "/Public/inc/header.php")?>

<!-- <div class="loader-container">
    <div class="loader"></div>
</div> -->
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-6 col-xl-4 ">
                <form>
                    <h2>Welcome to PaPals</h2>
                    <!-- username input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="username">Username</label>
                        <input type="username" id="username" class="form-control form-control-lg"
                        placeholder="Enter a valid username address" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" class="form-control form-control-lg"
                        placeholder="Enter password" />
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                        <input class="form-check-input me-2" type="checkbox" value="" id="rememberme" />
                        <label class="form-check-label" for="rememberme">
                            Remember me
                        </label>
                        </div>
                        <a href="#!" class="text-body">Forgot password?</a>
                    </div>

                    
                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="button" class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="./registery.php"
                        class="link-danger">Register</a></p>
                    </div>
                    
                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0">Or</p>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                        <button type="button" class="btn btn-primary btn-floating mx-1">
                        <i class="fa-brands fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-primary btn-floating mx-1">
                        <i class="fa-brands fa-google"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<? require($_SERVER['DOCUMENT_ROOT'] . "/Public/inc/footer.php")?>
