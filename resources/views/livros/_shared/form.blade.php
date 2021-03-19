<!-- ISBN -->
<div class="form-group">
    <label for="campo-isbn">ISBN:</label>
    <input type="number" class="form-control" name="isbn" id="campo-isbn" value="{{old('isbn', $livro['isbn'])}}">
</div>

<!-- TITULO -->
<div class="form-group">
    <label for="campo-titulo">Título:</label>
    <input type="text" class="form-control" name="titulo" id="campo-titulo" value="{{old('titulo', $livro['titulo'])}}">
</div>
    
<!-- AUTOR -->
<div class="form-group">
    <label for="campo-email">Autor:</label>
    <input type="text" class="form-control" name="autor" id="campo-email" value="{{old('autor', $livro['autor'])}}">
</div>

<!-- CATEGORIA -->
<div class="form-group">
    <label for="campo-categoria">Categoria:</label>
    <select class="form-control" name="categoria_id" id="campo-categoria">
        <option value="1" @if(old('categoria_id', $livro['categoria_id']) == 1) selected @endif>Terror</option>
        <option value="2" @if(old('categoria_id', $livro['categoria_id']) == 2) selected @endif>Drama</option>
        <option value="3" @if(old('categoria_id', $livro['categoria_id']) == 3) selected @endif>Romance</option>
        <option value="4" @if(old('categoria_id', $livro['categoria_id']) == 4) selected @endif>Ficção Científica</option>
        <option value="5" @if(old('categoria_id', $livro['categoria_id']) == 5) selected @endif>Pintura</option>
    </select>
</div>
    
<!-- RESUMO -->
<div class="form-group">
    <label for="campo-resumo">RESUMO:</label>
    <textarea class="form-control" id="campo-resumo" name="resumo">{{old('resumo', $livro['resumo'])}}</textarea>
</div>
    
<!-- CAPA -->
<div class="form-group">
    <label>Capa:</label>
    <input type="file" class="form-control" name="capa">
</div>
