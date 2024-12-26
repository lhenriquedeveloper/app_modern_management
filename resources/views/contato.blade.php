@extends('layouts.main')

@section('title', 'MM - Contato')

@section('content')
<style>
    .contact-page {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 2rem;
        background-color: #f4f4f4;
    }
    .contact-info {
        flex: 1;
        margin-right: 2rem;
        background-color: #5B21B6;
        color: #fff;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        animation: fadeIn 1s ease-in-out;
    }
    .contact-info h2 {
        margin-bottom: 1rem;
    }
    .contact-info p {
        margin-bottom: 1rem;
    }
    .contact-form {
        flex: 1;
    }
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
</style>

<div class="contact-page">
    <div class="contact-info">
        <h2>Entre em Contato</h2>
        <p>Estamos aqui para ajudar. Preencha o formulário ao lado e entraremos em contato o mais breve possível.</p>
        <p>Você pode nos contatar para suporte, vendas ou qualquer outra dúvida que tiver.</p>
    </div>
    <div class="contact-form">
        @include('components.form-contato')
    </div>
</div>
@endsection
