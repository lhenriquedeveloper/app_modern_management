<div class="contact-form-container">
    <style>
        .contact-form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 2rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
        }
        .contact-form-container h2 {
            color: #5B21B6;
            margin-bottom: 1rem;
            text-align: center;
        }
        .contact-form-container form {
            display: flex;
            flex-direction: column;
        }
        .contact-form-container label {
            margin-bottom: 0.5rem;
            color: #333;
        }
        .contact-form-container input,
        .contact-form-container select,
        .contact-form-container textarea {
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }
        .contact-form-container button {
            background-color: #5B21B6;
            color: #fff;
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .contact-form-container button:hover {
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
    </style>

    <h2>Entre em Contato</h2>
    <form method="POST" action="{{ route('site.contato') }}">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required>

        <label for="telefone">Telefone</label>
        <input type="tel" id="telefone" name="telefone" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="motivo">Motivo do Contato</label>
        <select id="motivo" name="motivo" required>
            <option value="">Selecione um motivo</option>
            <option value="1">Suporte</option>
            <option value="2">Vendas</option>
            <option value="3">Elogios</option>
            <option value="4">Sugestões</option>
        </select>

        <label for="descricao">Descrição</label>
        <textarea id="descricao" name="descricao" rows="4" required></textarea>

        <button type="submit">Enviar</button>
    </form>
</div>
