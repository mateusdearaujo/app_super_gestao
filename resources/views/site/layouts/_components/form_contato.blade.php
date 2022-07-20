{{ $slot  }}

<form action={{ route('site.contato') }} method="post">
    @csrf
    <label>
        <input name="nome" type="text" placeholder="Nome" class="{{ $classe }}">
    </label>

    <label>
        <input name="telefone" type="text" placeholder="Telefone" class="{{ $classe }}">
    </label>

    <label>
        <input name="email" type="text" placeholder="E-mail" class="{{ $classe }}">
    </label>

    <label>
        <select name="motivo_contato" class="{{ $classe }}">
            <option value="">Qual o motivo do contato?</option>
            <option value="1">Dúvida</option>
            <option value="2">Elogio</option>
            <option value="3">Reclamação</option>
        </select>
    </label>

    <label>
        <textarea name="mensagem" class="{{ $classe }}">Preencha aqui a sua mensagem</textarea>
    </label>

    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
