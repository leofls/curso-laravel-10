<h1>Dúvida #{{ $support->id }}</h1>

<form action="{{ route('supports.update', $support->id) }}" method="post">
    @csrf
    @method('PUT')
    {{-- <input type="text" value="PUT" name="_mehtod"> --}}

    <input type="text" placeholder="Assunto" name="subject" value="{{ $support->subject }}">
    <textarea name="body"  cols="30" rows="10" placeholder="Descrição">{{ $support->body }}</textarea>
    <button type="submit">Enviar</button>
</form>