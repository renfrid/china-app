
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>China2Tanzania</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="China2Tanzania" name="description" />
    <meta content="China2Tanzania" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!-- owl.carousel css -->
    <link rel="stylesheet" href="assets/libs/owl.carousel/owl.carousel.min.css">

    <!-- Select css -->
    <link href="assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <!-- Custom Css -->
    <link href="assets/css/custom.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/form.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body class="auth-body-bg">
    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xl-7">
                    <div class="auth-full-bg hero-section bg-ico-hero p-4">
                        <div class="w-120">
                            <div class="bg-overlay bg-primary"></div>
                            <div class="d-flex h-100 flex-column">
                                <div class="my-auto">
                                    <div class="row justify-content-start">
                                        <div class="col-lg-9">
                                            <div class="text-left">
                                                <h1 class="text-white text-uppercase font-size-48 font-weight-800 ">
                                                    China2Tanzania
                                                </h1>
                                                
                                                <p class="text-white font-size-24 mb-4">
                                                    Order anything from China and trust us in process of delivering your packages.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->


                <div class="col-xl-5">
                    <div class="auth-full-page-content p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4">
                                    <!-- <a href="/" class="d-block font-size-24 font-weight-600">
                                        <img src="assets/images/emakato_logo_colored.png" alt="" height="48" class="logo logo-dark">
                                        <img src="assets/images/emakato_logo_white.png" alt="" height="48" class="logo logo-light"> 
                                    </a> -->
                                </div>
                                <div class="">
                                    <div>
                                        <p class="text-muted font-size-14">
                                            At Companyname, we are committed to delivering our customers the highest level
                                            of service. We work closely with our customers until the packages arrive safely.
                                        </p>

                                        <p class="text-muted font-size-14">
                                            Contact us to learn more about our product and how it can benefit your
                                            institution.
                                        </p>
                                    </div>

                                    <div class="mt-4" x-data="initData()">
                                        <div x-html="formMessage"></div>

                                        <form class="form-horizontal" method="POST" @submit.prevent="submitForm"
                                            autocomplete="off">
                                            <section data-step="0">
                                                <!-- row -->
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label>Email address <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="email" name="email" x-model="formData.email"
                                                                placeholder="Write email..." class="form-control"
                                                                required />
                                                            <div class="invalid-feedback">
                                                                Email address required
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label>Phone <span class="text-danger">*</span></label>
                                                            <input type="text" name="phone" x-model="formData.phone"
                                                                placeholder="Write phone..." class="form-control"
                                                                required />
                                                            <div class="invalid-feedback">
                                                                Phone required
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- row -->
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label>Subject <span class="text-danger">*</span></label>
                                                            <input type="text" name="subject" x-model="formData.subject"
                                                                placeholder="Write subject..." class="form-control"
                                                                required />
                                                            <div class="invalid-feedback">
                                                                Subject required
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- row -->
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label>Message <span class="text-danger">*</span></label>
                                                            <textarea name="message" x-model="formData.message"
                                                                placeholder="Write message ..." class="form-control"
                                                                rows="3" required></textarea>
                                                            <div class="invalid-feedback">
                                                                Message required
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="text-sm-end d-none d-sm-block">
                                                            <a href="/" class="btn btn-danger">Cancel</a>
                                                            <button type="submit" class="btn btn-primary"
                                                                x-bind:disabled="formLoading"
                                                                x-text="buttonText"></button>
                                                        </div>
                                                    </div>
                                                    <!--./col -->
                                                </div>
                                                <!--./row -->
                                            </section>
                                        </form>
                                    </div>
                                </div>

                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">
                                        © Copyright
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script>All rights reserved.

                                        <br /> A Designed and Developed by <a href="#" class="text-muted">Mars Digital TZ.</a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>

    <!--./Alpine JS -->
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>

    <script type="text/javascript">
        function initData() {
            return {
                //form data
                formData: {
                    email: "",
                    phone: "",
                    subject: "",
                    message: "",
                },
                formMessage: "",
                formLoading: false,
                buttonText: "Submit",

                //submit form
                submitForm() {
                    this.formMessage = "";
                    this.formLoading = false;
                    this.buttonText = "Submitting...";

                    fetch("api/process-information", {
                        method: "POST",
                        headers: {
                            'Content-Type': 'application/json',
                            Accept: "application/json",
                        },
                        body: JSON.stringify(this.formData),
                    }).then(response => response.json()).then((response) => {
                        this.formData.email = "";
                        this.formData.phone = "";
                        this.formData.subject = "";
                        this.formData.message = "";

                        //set message
                        this.formMessage = response.success_msg;
                    }).catch(() => {
                        //set message
                        this.formMessage = "Something went wrong.";
                    }).finally(() => {
                        this.formLoading = false;
                        this.buttonText = "Submit";
                    });
                },
            }
        }
    </script>

</body>

</html>