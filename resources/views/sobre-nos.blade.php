@extends('layouts.main')

@section('title', 'MM - Sobre Nós')

@section('content')
<style>
    body {
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        color: #333;
    }
    h1, h2, h3 {
        margin: 0;
    }

    .about-header {

        color: #5B21B6;
        text-align: center;
        padding: 2rem 0;
        margin-bottom: 2rem;
        animation: fadeIn 1s ease-in-out;
        font-size: 25px;
        font-weight: 600;
    }
    .about-section {
        width: 100%;
        padding: 2rem;
        animation: slideIn 1s ease-in-out;
    }
    .about-section:nth-child(even) {
        background-color: #5B21B6;
        color: #fff;
    }
    .about-section:nth-child(odd) {
        background-color: #fff;
        color: #5B21B6;
    }
    .about-section h2 {
        margin-bottom: 1rem;
        font-weight: 600;
    }
    .about-section p {
        color: inherit;
    }
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    @keyframes slideIn {
        from {
            transform: translateY(20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>

<div class="about-header">
    <h1>Sobre Nós</h1>
</div>

<section class="about-section">
    <h2>Nossa Missão</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque leo nec orci fermentum, a tincidunt nisi facilisis.</p>
</section>

<section class="about-section">
    <h2>Nossos Valores</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque leo nec orci fermentum, a tincidunt nisi facilisis.</p>
</section>

<section class="about-section">
    <h2>Nossa História</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque leo nec orci fermentum, a tincidunt nisi facilisis.</p>
</section>

@endsection
