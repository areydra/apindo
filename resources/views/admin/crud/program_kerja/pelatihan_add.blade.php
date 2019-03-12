@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
<div class="content" style="width: 100%">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Pelatihan</h4>
        @if ($data)
        <form class="forms-sample" method="POST" action="{{ route('pelatihan_update', $data->id) }}">
          @csrf
          @method('PUT')
            @if ($errors->has('pelatihan'))
                    <strong style="color: red">{{ $errors->first('pelatihan') }}</strong>
            @endif              
          <div class="form-group">
            <textarea class="form-control" id="mytextarea" style="height: 450px" name="pelatihan">{!! $data->teks  !!}</textarea>
          </div>
          <button type="submit" class="btn btn-gradient-primary mr-2" name="update">Update</button>
        </form>
        @else
        <form class="forms-sample" method="POST" action="{{ route('pelatihan_store') }}">
          @csrf
            @if ($errors->has('pelatihan'))
                    <strong style="color: red">{{ $errors->first('pelatihan') }}</strong>
            @endif              
          <div class="form-group">
            <textarea class="form-control" id="mytextarea" style="height: 450px" name="pelatihan"></textarea>
          </div>
          <button type="submit" class="btn btn-gradient-primary mr-2" name="tambah">Tambah</button>
        </form>
        @endif
      </div>
    </div>
  </div>
</div>
@include('layouts.admin.footer')