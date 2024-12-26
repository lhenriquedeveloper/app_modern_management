<div class="navbar">
    <style>
        .navbar {
            background-color: #5B21B6;
            padding: 1rem 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .navbar .logo a {
            color: #FFFFFF;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .navbar .logo a:hover {
            color: #F59E0B;
        }

        .navbar .nav-links {
            list-style: none;
            display: flex;
            gap: 1.5rem;
            margin: 0;
            padding: 0;
        }

        .navbar .nav-links li {
            margin: 0;
        }

        .navbar .nav-links a {
            color: #FFFFFF;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 500;
            position: relative;
            transition: color 0.3s ease;
        }

        .navbar .nav-links a:hover {
            color: #F59E0B;
        }

        .navbar .nav-links a::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: #F59E0B;
            transition: width 0.3s ease;
            position: absolute;
            bottom: -5px;
            left: 0;
        }

        .navbar .nav-links a:hover::after {
            width: 100%;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .navbar .nav-links li {
            animation: fadeIn 0.5s ease;
        }
    </style>
    <div class="container">
        <div class="logo">
            <a href="/">Logo</a>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="{{ route('site.principal') }}">Home</a></li>
                <li><a href="{{ route('site.contato') }}">Contato</a></li>
                <li><a href="{{ route('site.sobre-nos') }}">Sobre Nós</a></li>
            </ul>
        </nav>
    </div>
</div>
