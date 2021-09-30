<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>SISTEMA OUROCRED - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="stylesheet" href="{{url('ProAssets/css/base.min.css')}}">

</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="d-none d-lg-block col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider">
                                <div>
                                    <div class="h-100 d-flex justify-content-center align-items-center" style="background-image: linear-gradient(120deg,#fbc829 0,#f5cbbf 100%)!important;" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/originals/city.jpg');"></div>
                                        <div class="slider-content"><h3>OUROCRED</h3>
                                            <p>KeroUI is like a dream. Some think it's too good to be true! Extensive collection of unified React Boostrap Components and Elements.</p></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/originals/citynights.jpg');"></div>
                                        <div class="slider-content"><h3>Scalable, Modular, Consistent</h3>
                                            <p>Easily exclude the components you don't require. Lightweight, consistent Bootstrap based styles across all elements and components</p></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="h-100 d-flex justify-content-center align-items-center bg-sunny-morning" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/originals/citydark.jpg');"></div>
                                        <div class="slider-content"><h3>Complex, but lightweight</h3>
                                            <p>We've included a lot of components that cover almost all use cases for any type of application.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <div class="app-logo"></div>
                            <h4 class="mb-0">
                                <span class="d-block">Bem vindo de volta,</span>
                                <span>Por favor entre em sua conta.</span></h4>
                            <div class="divider row"></div>
                            <div>
                                <form action="{{ url('/painel/login') }}" method="post">
                                @csrf
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="exampleEmail" class="">CPF</label><input name="cpf" placeholder="Digite seu CPF" type="text" class="form-control"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="examplePassword" class="">SENHA</label><input name="password" id="examplePassword" placeholder="Digite sua senha" type="password"
                                                                                                                                                   class="form-control"></div>
                                        </div>
                                    </div>
                                    <div class="divider row"></div>
                                    <div class="d-flex align-items-center">
                                        <div class="ml-auto">
                                            <button class="btn btn-primary btn-lg">Entrar no Dashboard</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


<!--SCRIPTS INCLUDES-->

<!--CORE-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/metismenu"></script>
<script src="{{url('ProAssets/js/scripts-init/app.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/demo.js')}}"></script>

<!--CHARTS-->

<!--Apex Charts-->
<script src="{{url('ProAssets/js/vendors/charts/apex-charts.js')}}"></script>

<script src="{{url('ProAssets/js/scripts-init/charts/apex-charts.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/charts/apex-series.js')}}"></script>

<!--Sparklines-->
<script src="{{url('ProAssets/js/vendors/charts/charts-sparklines.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/charts/charts-sparklines.js')}}"></script>

<!--Chart.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script src="{{url('ProAssets/js/scripts-init/charts/chartsjs-utils.js')}}"></script>

<!--FORMS-->

<!--Clipboard-->
<script src="{{url('ProAssets/js/vendors/form-components/clipboard.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/form-components/clipboard.js')}}"></script>

<!--Datepickers-->
<script src="{{url('ProAssets/js/vendors/form-components/datepicker.js')}}"></script>
<script src="{{url('ProAssets/js/vendors/form-components/daterangepicker.js')}}"></script>
<script src="{{url('ProAssets/js/vendors/form-components/moment.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/form-components/datepicker.js')}}"></script>

<!--Multiselect-->
<script src="{{url('ProAssets/js/vendors/form-components/bootstrap-multiselect.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js{{url('ProAssets/js/scripts-init/app.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/form-components/input-select.js')}}"></script>

<!--Form Validation-->
<script src="../assets/js/vendors/form-components/form-validation.js{{url('ProAssets/js/scripts-init/app.js')}}"></script>
<script src="../assets/js/scripts-init/form-components/form-validation.js{{url('ProAssets/js/scripts-init/app.js')}}"></script>

<!--Form Wizard-->
<script src="{{url('ProAssets/js/scripts-init/app.js')}}"></script>
<script src="{{url('ProAssets/js/vendors/form-components/form-wizard.js')}}"></script>

<!--Input Mask-->
<script src="{{url('ProAssets/js/vendors/form-components/input-mask.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/form-components/input-mask.js')}}"></script>

<!--RangeSlider-->
<script src="{{url('ProAssets/js/vendors/form-components/wnumb.js')}}"></script>
<script src="{{url('ProAssets/js/vendors/form-components/range-slider.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/form-components/range-slider.js')}}"></script>

<!--Textarea Autosize-->
<script src="{{url('ProAssets/js/vendors/form-components/textarea-autosize.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/form-components/textarea-autosize.js')}}"></script>

<!--Toggle Switch -->
<script src="{{url('ProAssets/js/vendors/form-components/toggle-switch.js')}}"></script>


<!--COMPONENTS-->

<!--BlockUI -->
<script src="{{url('ProAssets/js/vendors/blockui.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/blockui.js')}}"></script>

<!--Calendar -->
<script src="{{url('ProAssets/js/vendors/calendar.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/calendar.js')}}"></script>

<!--Slick Carousel -->
<script src="{{url('ProAssets/js/vendors/carousel-slider.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/carousel-slider.js')}}"></script>

<!--Circle Progress -->
<script src="{{url('ProAssets/js/vendors/circle-progress.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/circle-progress.js')}}"></script>

<!--CountUp -->
<script src="{{url('ProAssets/js/vendors/count-up.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/count-up.js')}}"></script>

<!--Cropper -->
<script src="{{url('ProAssets/js/vendors/cropper.js')}}"></script>
<script src="{{url('ProAssets/js/vendors/jquery-cropper.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/image-crop.js')}}"></script>

<!--Maps -->
<script src="{{url('ProAssets/js/vendors/gmaps.js')}}"></script>
<script src="{{url('ProAssets/js/vendors/jvectormap.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/maps-word-map.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/maps.js')}}"></script>

<!--Guided Tours -->
<script src="{{url('ProAssets/js/vendors/guided-tours.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/guided-tours.js')}}"></script>

<!--Ladda Loading Buttons -->
<script src="{{url('ProAssets/js/vendors/ladda-loading.js')}}"></script>
<script src="{{url('ProAssets/js/vendors/spin.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/ladda-loading.js')}}"></script>

<!--Rating -->
<script src="{{url('ProAssets/js/vendors/rating.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/rating.js')}}"></script>

<!--Perfect Scrollbar -->
<script src="{{url('ProAssets/js/vendors/scrollbar.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/scrollbar.js')}}"></script>

<!--Toastr-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" crossorigin="anonymous"></script>
<script src="{{url('ProAssets/js/scripts-init/toastr.js')}}"></script>

<!--SweetAlert2-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="{{url('ProAssets/js/scripts-init/sweet-alerts.js')}}"></script>

<!--Tree View -->
<script src="{{url('ProAssets/js/vendors/treeview.js')}}"></script>
<script src="{{url('ProAssets/js/scripts-init/treeview.js')}}"></script>


<!--TABLES -->
<!--DataTables-->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables.net-bs4@1.10.19/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js" crossorigin="anonymous"></script>

<!--Bootstrap Tables-->
<script src="{{url('ProAssets/js/vendors/tables.js')}}"></script>

<!--Tables Init-->
<script src="{{url('ProAssets/js/scripts-init/tables.js')}}"></script>

</body>
</html>
