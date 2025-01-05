<!doctype html>
    <html lang="en">
    <head>
        <link rel="icon" type="image/png" href="{{ asset('image/logo/nq.png') }}">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Login</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif
            }

            .container {
                margin: 45px auto
            }

            .body {
                position: relative;
                width: 720px;
                height: 440px;
                margin: 20px auto;
                border: 1px solid #dddd;
                border-radius: 18px;
                overflow: hidden;
                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px
            }

            .box-1 img {
                width: 100%;
                height: 100%;
                object-fit: cover
            }

            .box-2 {
                padding: 10px
            }

            .box-1,
            .box-2 {
                width: 50%
            }

            .h-1 {
                font-size: 24px;
                font-weight: 700
            }

            .text-muted {
                font-size: 14px
            }

            .container .box {
                width: 100px;
                height: 100px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                border: 2px solid transparent;
                text-decoration: none;
                color: #615f5fdd
            }

            .box:active,
            .box:visited {
                border: 2px solid #ee82ee
            }

            .box:hover {
                border: 2px solid #ee82ee
            }

            .btn.btn-primary {
                background-color: transparent;
                color: #ee82ee;
                border: 0px;
                padding: 0;
                font-size: 14px
            }

            .btn.btn-primary .fas.fa-chevron-right {
                font-size: 12px
            }

            .footer .p-color {
                color: #ee82ee
            }

            .footer.text-muted {
                font-size: 10px
            }

            .fas.fa-times {
                position: absolute;
                top: 20px;
                right: 20px;
                height: 20px;
                width: 20px;
                background-color: #f3cff379;
                font-size: 18px;
                display: flex;
                align-items: center;
                justify-content: center
            }

            .fas.fa-times:hover {
                color: #ff0000
            }

            .logoR {
                width: 38%;
                padding-left: 103px;
            }

            .buttonR{
                width: 70%;
                border-radius: 25px;
                background: black;
            }

            .backbody{
                background: linear-gradient(100deg, red, black);
                background-repeat:repeat;
                background-size:cover;
                background-position:top;
            }

            .BodyBackcolor{
                background: white;
            }

            @media only screen and (max-width: 600px) {
            .container {
                margin: 120px 0px 30px 0px;
            }

            .backbody{
                background: linear-gradient(100deg, red, black);
                background-repeat:repeat;
                background-size:contain;
                background-position:top;
                background-position-y: -86px;
            }

            .BodyBackcolor{
                background: white;
            }

            .text-center {
                text-align: center !important;

            }
            }

            @media (max-width:767px) {
                body {
                    padding: 10px
                }

                .body {
                    width: 100%;
                    height: 100%
                }

                .box-1 {
                    width: 100%
                }

                .box-2 {
                    width: 100%;
                    height: 352px;
                }

                .logoR {
                    width: 79%;
                    padding-left: 69px;
                    padding-top: 25px;
                }

                .buttonR{
                    width: 70%;
                    border-radius: 25px;
                    background: black;
                    position: relative;
                    top: 100px;
                }
            }
            .form-control:focus {border-color:rgba(100,100,100,1)!important;
                -webkit-box-shadow: none!important;
                -moz-box-shadow: none!important;
                box-shadow: none!important;
            }
            .mgtop{
                position: relative; top: 40px;
            }

            .did-floating-label-content {
  position:relative;
  margin-bottom:20px;
}
.did-floating-label {
  color:black;
  font-size:13px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:15px;
  top:11px;
  padding:0 5px;
  background:#fff;
  transition:0.2s ease all;
  -moz-transition:0.2s ease all;
  -webkit-transition:0.2s ease all;
}
.did-floating-input, .did-floating-select {
  font-size:16px;
  display:block;
  width:100%;
  height:40px;
  padding: 0 20px;
  background: #fff;
  color: #323840;
  border: 1px solid #000000;
  border-radius: 4px;
  box-sizing: border-box;
  &:focus{
    outline:none;
    ~ .did-floating-label{
      top:-8px;
      font-size:13px;
    }
  }
}

.did-floating-input:hover, .did-floating-select:hover{
    border: 1px solid red;
}

select.did-floating-select {
  -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
select.did-floating-select::-ms-expand {
  display: none;
}

.did-floating-input:not(:placeholder-shown) ~ .did-floating-label {
  top:-8px;
  font-size:13px;

}
.did-floating-select:not([value=""]):valid ~ .did-floating-label {
  top:-8px;
  font-size:13px;
}
.did-floating-select[value=""]:focus ~ .did-floating-label {
  top:11px;
  font-size:13px;
}
.did-floating-select:not([multiple]):not([size]) {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='6' viewBox='0 0 8 6'%3E%3Cpath id='Path_1' data-name='Path 1' d='M371,294l4,6,4-6Z' transform='translate(-371 -294)' fill='%23003d71'/%3E%3C/svg%3E%0A");
    background-position: right 15px top 50%;
    background-repeat: no-repeat;
}

.did-error-input{
  .did-floating-input, .did-floating-select {
    border: 2px solid #9d3b3b;
    color:#9d3b3b;
  }
  .did-floating-label{
    font-weight: 600;
    color:#9d3b3b;
  }
  .did-floating-select:not([multiple]):not([size]) {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='6' viewBox='0 0 8 6'%3E%3Cpath id='Path_1' data-name='Path 1' d='M371,294l4,6,4-6Z' transform='translate(-371 -294)' fill='%239d3b3b'/%3E%3C/svg%3E%0A");
}
}

.input-group {
  display: flex;
  .did-floating-input{
    border-radius:0 4px 4px 0;
    border-left:0;
    padding-left:0;
  }
}
.input-group-append {
  display:flex;
  align-items:center;
/*   margin-left:-1px; */
}
.input-group-text {
    display: flex;
    align-items: center;
    font-weight: 400;
    height:34px;
    color: #323840;
    padding: 0 5px 0 20px;
  font-size:12px;
    text-align: center;
    white-space: nowrap;
    border: 1px solid #000000;
  border-radius: 4px 0 0 4px;
  border-right:none;
}


        </style>
    </head>
    <body class="backbody">
        <div class="container">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="body d-md-flex align-items-center justify-content-between mr-5 mgtop BodyBackcolor">

                     <img src="{{ asset('image/logo/nq.png') }}" class="logoR">
                    <div class=" box-2 d-flex flex-column h-150">


                                <div style="padding: 20px 20px 0px 20px;">


                                <div class="did-floating-label-content">

                                    <input class="did-floating-input @error('password') is-invalid @enderror" name="email" type="email" placeholder=" ">
                                    <label class="did-floating-label">Email</label>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="did-floating-label-content">
                                    <input class="did-floating-input @error('password') is-invalid @enderror" name="password" type="password" placeholder=" ">
                                    <label class="did-floating-label">Kata Sandi</label>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <span class="text-center" style="padding: 20px;">

                                <button type="submit" class="btn btn-dark buttonR" style="position: relative; top: 0px;">MASUK</button>
                            </span>

                            </div>
                        </div>


                </div>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </body>
        </html>
