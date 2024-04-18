<form action="/convert-excel-to-json" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">Convert</button>
</form>
