<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <form action="{{route('storeEdit', $data->id)}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="exampleInputNama" value="{{$data->nama}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputNIs" class="form-label">Nis</label>
            <input type="number" class="form-control" name="NIS" id="exampleInputNis" value="{{$data->NIS}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputrombel" class="form-label">Rombel</label>
            <input type="Text" class="form-control" name="rombel" id="exampleInputrombel" value="{{$data->rombel}}">
        </div>

        <div class="col-md-4">
            <label for="inputState" class="form-label">Rayon</label>
            <select id="inputState" name="rayon" class="form-select" value="{{$data->rayon}}">
                <option value="wikrama1" @if($data->rayon == 'wikrama1') {{ 'selected' }} @endif>Wikrama 1</option>
                <option value="wikrama2" @if($data->rayon == 'wikrama2') {{ 'selected' }} @endif>Wikrama 2</option>
                <option value="wikrama3" @if($data->rayon == 'wikrama3') {{ 'selected' }} @endif>Wikrama 3</option>
                <option value="wikrama4" @if($data->rayon == 'wikrama4') {{ 'selected' }} @endif>Wikrama 4</option>
            </select>
        </div>

        <div class="col-md-4">
            <label for="inputState" class="form-label">Action</label>
            <select id="inputState" name="action" class="form-select"">
                <option hidden>Pilih Aksi</option>
                <option value="take">Tarik Saldo</option>
                <option value="add">Masukan Saldo</option>
            </select>

            <div class="mb-3">
                <label for="exampleInputrombel" class="form-label">Masukan Jumlah Uang</label>
                <input type="text" class="form-control" name="uang" id="exampleInputrombel"">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
</html>
