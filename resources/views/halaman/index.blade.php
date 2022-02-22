<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
@extends('layouts.master')

@section('title')
Welcome
@endsection

@section('content')

     
            <div class="content">
                <div class="title m-b-md">
                    TanyaDok
                </div>
                <div class="links">
                    <a href="/">Docs</a>
                    <a href="/">Laracasts</a>
                    <a href="/">News</a>
                    <a href="/">Blog</a>
                    <a href="/">Carrier</a>
                    <a href="/">Faqs</a>
                    <a href="/">Gitlab</a>
                </div>
            </div>
            
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Solusi Kesehatan Terlengkap</h5>
              </div>
              <div class="card-body">
                <p class="card-text">Akses Mudah dan Cepat Demi Masa Depan Kesehatan Indonesia yang Berkualitas, Layanan Kesehatan Terlengkap di Setiap Langkah Perjalanan Medis Pengguna. Bergabung segera dengan Chat lebih dari 1.000 dokter di TanyaDok! Respons Cepat, Jawaban Akurat!</p>
                <a href="/register" class="btn btn-primary">Register</a>
              </div>
            </div>

@endsection




