<div class="navbar">
    <style>
        .navbar {
            background-color: #5B21B6;
            padding: 1rem;
        }
        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar .logo a {
            color: #FFFFFF;
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
        }
        .navbar .nav-links {
            list-style: none;
            display: flex;
            gap: 1rem;
            margin: 0;
            padding: 0;
        }
        .navbar .nav-links li {
            margin: 0;
        }
        .navbar .nav-links a {
            color: #FFFFFF;
            text-decoration: none;
        }
        .navbar .nav-links a:hover {
            color: #F59E0B;
        }
    </style>
    <div class="container">
        <div class="logo">
            <a href="/">Logo</a>
        </div>
        <div>
            <ul class="nav-links">
                <li><a href="{{route('site.principal')}}">Home</a></li>
                <li><a href="{{route('site.contato')}}">Contato</a></li>
                <li><a href="{{route('site.sobre-nos')}}">Sobre Nós</a></li>
            </ul>
        </div>
    </div>
</div>
