@csrf
<div class="positionForm">
    <label for="position">Cargo:</label>
    <input type="text" name="position" id="position" placeholder="Digite aqui o cargo a ser cadastrado!" value="{{ $edit->position ?? old('position') }}">

    <label for="acronym">Sigla:</label>
    <input type="text" name="acronym" id="acronym" placeholder="Digite aqui a sigla do cargo!" value="{{ $edit->acronym ?? old('acronym') }}">

    <label for="description">Descrição:</label>
    <textarea name="description" id="description" cols="30" rows="4" placeholder="Digite aqui a descrição do cargo!">{{ $edit->description ?? old('description') }}</textarea>

    <button type="submit">Salvar</button>
</div>