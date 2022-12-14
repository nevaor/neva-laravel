<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    {{-- alert --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    {{-- Container --}}
    <div class="container mt-3">
        <div class="text-center">
            <h3>Form</h3>
        </div>
        <form action="{{route('store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="exampleInputNama">
            </div>
            <div class="mb-3">
                <label for="exampleInputNIs" class="form-label">Nis</label>
                <input type="number" class="form-control" name="NIS" id="exampleInputNis">
            </div>
            <div class="mb-3">
                <label for="exampleInputrombel" class="form-label">Rombel</label>
                <input type="Text" class="form-control" name="rombel" id="exampleInputrombel">
            </div>

            <div class="col-md-4">
                <label for="inputState" class="form-label">Rayon</label>
                <select id="inputState" name="rayon" class="form-select">
                    <option hidden>Pilih rayon</option>
                    <option value="wikrama1">Wikrama 1</option>
                    <option value="wikrama2">Wikrama 2</option>
                    <option value="wikrama3">Wikrama 3</option>
                    <option value="wikrama4">Wikrama 4</option>

                </select>
            </div>
            <div class="text-center mt-3 mb-5">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>


        {{-- Table --}}
        <table class="table table-striped">
            <tr>
                <th>no</th>
                <th>id</th>
                <th>nama</th>
                <th>rombel</th>
                <th>NIS</th>
                <th>rayon</th>
                <th>Jumlah Uang</th>
                <th>action</th>
            </tr>
            <?php $i = 1; ?>
            @foreach($coba as $data)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$data->id}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->rombel}}</td>
                <td>{{$data->NIS}}</td>
                <td>{{$data->rayon}}</td>
                <td>{{$data->jumlah_uang}}</td>
                <td>
                    <form action="{{ route('destroy', $data->id) }}" method="POST">
                        <a href="{{route('edit' , $data->id)}}" class="btn btn-primary">edit</a>
                        @csrf
                        <button class="btn btn-warning">delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </div>
    </div>
</div>
</div>
</div>
</table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
