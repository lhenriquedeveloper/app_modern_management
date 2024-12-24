<h3>Fornecedor</h3>

@if (!($fornecedores[0]['status'] == 'S'))
    Fornecedor Inativo
@endif
@unless ($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo
@endunless


@isset($fornecedores[1]['cnpj'])
    {{ $fornecedores[0]['cnpj'] }}
@endisset


{{-- @if - Condição IF/ELSE TRADICIONAL --}}
{{-- @unless - Verifica se a condição é verdadeira --}}
{{-- @isset - Verifica se a variávle está preenchida --}}
