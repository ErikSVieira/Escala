@csrf
<div class="createForm">
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" value="{{ $edit->name ?? old('name') }}" placeholder="Digite aqui o nome do funcionario">
    
    <label for="birth_date">Data aniversario:</label>
    <input type="date" name="birth_date" id="birth_date" value="{{ $edit->birth_date ?? old('birth_date') }}" placeholder="Texte">

    <label for="position_id">Cargo:</label>
    <select name="position_id" id="position_id">
        <option value="" hidden>--- Selecione o cargo ---</option>
        @foreach ($positions as $position)
            <option value="{{ $position->id }}" 
                @if ($position->id === $edit->position_id )
                    selected
                @endif>
                {{ $position->acronym }} - {{ $position->name }}
            </option>
        @endforeach
    </select>

    <label for="position_date">Data promoçao ao cargo atual:</label>
    <input type="date" name="position_date" id="position_date" value="{{ $edit->position_date ?? old('position_date') }}" placeholder="">

    <label for="photo"></label>
    <input type="text" name="photo" id="photo" value="{{ $edit->photo ?? old('photo') }}" placeholder="Insiria a foto">

    <label for="ddd">DDD:</label>
    <input type="text" name="ddd" id="ddd" value="{{ $edit->ddd ?? old('ddd') }}" placeholder="(99)">

    <label for="phone">Telefone:</label>
    <input type="text" name="phone" id="phone" value="{{ $edit->phone ?? old('phone') }}" placeholder="98811-2217">

    <label for="description">Descrição</label>
    <textarea name="description" id="description" cols="30" rows="4" placeholder="Digite aqui a descrição do funcionario">
        {{ $edit->name ?? old('name') }}
    </textarea>

    <button type="submit">Salvar</button>
</div>