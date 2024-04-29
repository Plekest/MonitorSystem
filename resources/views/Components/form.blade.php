<!-- /home/pedro/base/application/MonitorSystem/resources/views/Components/form.blade.php -->

<style>
    /* Estilização para o botão */
    .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
        color: #333;
        background-color: #fff;
        border-color: #ccc;
        border-radius: 4px;
    }

    /* Estilização para o botão quando hover */
    .custom-file-upload:hover {
        background-color: #e6e6e6;
    }
</style>


@csrf
<div class="form-row">
    <div class="col-md-4 mb-3">
        <label for="validationDefault01">Nome do Sistema</label>
        <input name="name" type="text" class="form-control" id="validationDefault01" placeholder="Nome do Sistema"
            required value="{{ $form['name'] ?? '' }}">
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationDefault02">URL</label>
        <input name="url" type="text" class="form-control" id="validationDefault02" placeholder="URL" required
            value="{{ $form['url'] ?? '' }}">
    </div>
</div>
<div class="form-row">
    <div class="col-md-8 mb-3">
        <label for="validationDefault03">Descrição</label>
        <textarea name="description" class="form-control" id="validationDefault03" placeholder="Descrição" required>{{ $form['description'] ?? '' }}</textarea>
    </div>
</div>
<div class="form-row">
    <div class="col-md-12 mb-3">
        <label for="validationDefault06">Imagem: </label>
        <label class="custom-file-upload">
            <input type="file" id="validationDefault06" name="image" accept="image/*" value="{{ $form['image'] ?? '' }}">
            Adicionar arquivo
        </label>
    </div>
</div>
<button class="btn btn-primary" type="submit">Enviar</button>

