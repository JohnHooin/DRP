<? require($_SERVER['DOCUMENT_ROOT'] . "/Public/inc/header.php")?>
<!-- <div class="loader-container">
    <div class="loader">Loading</div>
</div> -->
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-6 col-xl-4 ">
                <form>
                    <h2>Welcome to PaPals</h2>
                    <h4>Create your account!</h4>
                    <!-- Email input -->
                    <div class="form-outline mb-3">
                        <label class="form-label" for="email">Email address</label>
                        <input type="email" id="email" class="form-control form-control-lg"
                        placeholder="Enter a valid email address" />
                    </div>
                    <!-- Username input -->
                    <div class="form-outline mb-3">
                        <label class="form-label" for="ussername">Username</label>
                        <input type="username" id="ussername" class="form-control form-control-lg"
                        placeholder="Enter a Username" />
                    </div>
                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <label class="form-label" for="password">Create Your Password</label>
                        <input type="password" id="password" class="form-control form-control-lg"
                        placeholder="Enter password" />
                    </div>
                    <!-- Password check -->
                    <div class="form-outline mb-3">
                        <label class="form-label" for="repassword">Retype Your Password</label>
                        <input type="password" id="repassword" class="form-control form-control-lg"
                        placeholder="Enter password" />
                    </div>                            
                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="button" class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Create account</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Already an account? <a href="./login.php"
                        class="link-danger">Log In</a></p>
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