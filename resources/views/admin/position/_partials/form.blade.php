@csrf
<div class="row d-block ps-5 pe-5 m-0">
    <div class="col-auto mb-3">
        <label class="form-label" for="position">Cargo:</label>
        <input class="form-control" type="text" name="position" id="position" placeholder="Digite aqui o cargo a ser cadastrado!" value="{{ $edit->name ?? old('position') }}">
    </div>

    <div class="col-auto mb-3">
        <label class="form-label" for="acronym">Sigla:</label>
        <input class="form-control" type="text" name="acronym" id="acronym" placeholder="Digite aqui a sigla do cargo!" value="{{ $edit->acronym ?? old('acronym') }}">
    </div>

    <div class="col-auto mb-3">
        <label class="form-label" for="description">Descrição:</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="4" placeholder="Digite aqui a descrição do cargo!">{{ $edit->description ?? old('description') }}</textarea>
    </div>

    <div class="d-flex justify-content-end pb-2 mb-2">
        <button class="btn btn-success me-2" type="submit">Salvar</button>
        <a href="#" class="btn btn-warning">Cancel</a>
    </div>
</div>