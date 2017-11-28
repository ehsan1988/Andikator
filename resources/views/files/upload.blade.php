<h2>file upload</h2>
<form action="/upload" method="post">
    {{csrf_field()}}
    <input type="file" name="file">
    <input type="submit">
</form>