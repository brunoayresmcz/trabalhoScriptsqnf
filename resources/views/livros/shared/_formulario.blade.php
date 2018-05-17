{{ csrf_field() }}
<!-- ISBN -->
<div class="form-group">
    <label for="campo-isbn">ISBN:</label>
    <input type="number" class="form-control" id="campo-isbn" name="isbn" value="{{old('isbn', $livro['isbn'])}}">
</div>

<!-- TITULO -->
<div class="form-group">
    <label for="campo-titulo">Título:</label>
    <input type="text" class="form-control" id="campo-titulo"  name="titulo" value="{{old('titulo', $livro['titulo'])}}">
</div>
    
<!-- AUTOR -->
<div class="form-group">
    <label for="campo-autor">Autor:</label>
    <input type="text" class="form-control" id="campo-autor"  name="autor" value="{{old('autor', $livro['autor'])}}">
</div>

<!-- CATEGORIA -->
<div class="form-group">
    <label for="campo-categoria">Categoria:</label>
    <select class="form-control" name="categoria" id="campo-categoria">
        <option value="1" {{ (old('categoria', $livro->categoria) == 1 ? 'selected' : '') }}>Terror</option>
        <option value="2" {{ (old('categoria', $livro->categoria) == 2 ? 'selected' : '') }}>Drama</option>
        <option value="3" {{ (old('categoria', $livro->categoria) == 3 ? 'selected' : '') }}>Romance</option>
        <option value="4" {{ (old('categoria', $livro->categoria) == 4 ? 'selected' : '') }}>Ficção Científica</option>
        <option value="5" {{ (old('categoria', $livro->categoria) == 5 ? 'selected' : '') }}>Pintura</option>
    </select>
</div>
    
<!-- RESUMO -->
<div class="form-group">
    <label for="campo-resumo">RESUMO:</label>
    <textarea class="form-control" id="campo-resumo" name="resumo"> {{old('resumo', $livro['resumo'])}} </textarea>
</div>
    
<!-- RESUMO -->
<div class="form-group">
    <label for="campo-capa">Capa:</label>
    <input type="file" id="campo-capa" name="capa"/>

    <br/>
</div>

