@extends('layouts.main')

@section('title', '404 - Página Não Encontrada')

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

        .error-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
            padding: 2rem;
            animation: fadeIn 1s ease-in-out;
        }

        .error-header {
            background-color: #5B21B6;
            color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            animation: slideIn 1s ease-in-out;
        }

        .error-header h1 {
            font-size: 4rem;
            margin: 0;
            animation: bounce 1s infinite;
        }

        .error-header p {
            font-size: 1.5rem;
            margin: 1rem 0 0;
        }

        .error-actions {
            margin-top: 2rem;
            animation: fadeIn 2s ease-in-out;
        }

        .error-actions a {
            background-color: #5B21B6;
            color: #fff;
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            text-decoration: none;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .error-actions a:hover {
            background-color: #4C1D95;
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
                transform: translateY(-20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-30px);
            }

            60% {
                transform: translateY(-15px);
            }
        }
    </style>

    <div class="error-container">
        <div class="error-header">
            <h1>404</h1>
            <p>Página Não Encontrada</p>
        </div>
        <div class="error-actions">
            <a href="{{ route('site.principal') }}">Voltar para Home</a>
        </div>
    </div>
@endsection
