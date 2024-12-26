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
        overflow-x: hidden;
    }
    h1, h2, h3 {
        margin: 0;
    }
    main {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
    }
    .hero {
        background-color: #5B21B6;
        color: #fff;
        text-align: center;
        padding: 4rem 2rem;
        position: relative;
        overflow: hidden;
    }
    .hero h1 {
        font-size: 2.5rem;
        animation: fadeInDown 1s ease-in-out;
    }
    .hero p {
        font-size: 1.2rem;
        margin: 1rem 0;
        animation: fadeInUp 1s ease-in-out;
    }
    .hero .cta {
        margin-top: 2rem;
        display: inline-block;
        background-color: #fff;
        color: #5B21B6;
        padding: 0.8rem 1.5rem;
        font-size: 1rem;
        font-weight: bold;
        text-transform: uppercase;
        border-radius: 50px;
        text-decoration: none;
        animation: bounce 2s infinite;
    }
    .features {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
        animation: fadeIn 1.5s ease-in-out;
    }
    .feature {
        background-color: #fff;
        border-radius: 10px;
        padding: 2rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: transform 0.3s;
    }
    .feature:hover {
        transform: translateY(-10px);
    }
    .feature h3 {
        color: #5B21B6;
        margin-bottom: 1rem;
    }
    .feature p {
        font-size: 1rem;
        color: #666;
    }
    .cta-section {
        background-color: #5B21B6;
        color: #fff;
        text-align: center;
        padding: 3rem 2rem;
        border-radius: 10px;
        margin: 3rem 0;
    }
    .cta-section h2 {
        font-size: 2rem;
    }
    .cta-section a {
        margin-top: 2rem;
        display: inline-block;
        background-color: #fff;
        color: #5B21B6;
        padding: 0.8rem 2rem;
        font-size: 1rem;
        font-weight: bold;
        border-radius: 50px;
        text-decoration: none;
    }
    @keyframes fadeInDown {
        0% { opacity: 0; transform: translateY(-20px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInUp {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }
</style>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <h1>Bem-vindo ao Modern Manegement</h1>
        <p>Sua solução completa para gestão empresarial</p>
        <a href="{{ route('site.sobre-nos') }}" class="cta">Saiba Mais</a>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="feature">
            <h3>Gestão de Projetos</h3>
            <p>Planeje, acompanhe e gerencie seus projetos com eficiência.</p>
        </div>
        <div class="feature">
            <h3>Análise Financeira</h3>
            <p>Obtenha insights sobre as finanças do seu negócio.</p>
        </div>
        <div class="feature">
            <h3>Recursos Humanos</h3>
            <p>Gerencie sua equipe e otimize processos de RH.</p>
        </div>
        <div class="feature">
            <h3>Controle de Estoque</h3>
            <p>Acompanhe seu estoque e otimize a cadeia de suprimentos.</p>
        </div>
        <div class="feature">
            <h3>Relacionamento com Clientes</h3>
            <p>Melhore a satisfação e fidelidade dos seus clientes.</p>
        </div>
        <div class="feature">
            <h3>Relatórios e Análises</h3>
            <p>Gere relatórios abrangentes para decisões informadas.</p>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="cta-section">
        <h2>Pronto para revolucionar sua gestão empresarial?</h2>
        <a href="{{ route('site.contato') }}">Entre em Contato Agora</a>
    </section>
</main>
@endsection
