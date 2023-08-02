<!DOCTYPE html>
<html>

<head>
    <title>Laravel</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>

<body>
    <form action="{{url('item/post')}}" method="post">
        @csrf
        @if ($errors -> any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table style="border: solid 2px #000">
            <tr>
                <td>Nama Item</td>
                <td><input type="text" name="item_name" value=""></td>
            </tr>
            <tr>
                <td>Tipe Item</td>
                <td><input type="text" name="item_type" value=""></td>
            </tr>
            <tr>
                <td>Harga Item</td>
                <td><input type="text" name="item_price" value=""></td>
            </tr>
            <tr>
                <td>Deskripsi Item</td>
                <td><input type="text" name="item_desc" value=""></td>
            </tr>
            <tr>
                <td><button type="submit"> Kirim </button></td>
            </tr>
        </table>
    </form>
</body>
</html>