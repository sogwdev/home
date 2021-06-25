
<h1>picture</h1>
@csrf

<form method="POST" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <input type="file" name="picture">
    <input type="submit">
</form>


