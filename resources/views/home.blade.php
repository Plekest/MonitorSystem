@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Home</h1>
@stop

@section('content')
    <!-- TABLE: LATEST ORDERS -->
    <div class="card">
        <div class="overlay dark">
            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
        </div>
        <div class="card-header border-transparent">
          <h3 class="card-title">Latest Orders</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table m-0">
              <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Status</th>
              </tr>
              </thead>
              <tbody>
                  @foreach ($systems as $system)
              <tr>
                <td>{{ $system->id }}</td>
                <td>{{ $system->name }}</td>
                <td><span class="badge badge-success">{{ $system->status }}</span></td>
              </tr>
                  @endforeach
            </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
          <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('.overlay').show();
        $.ajax({
            url: '{{ $system->url }}',
            type: 'GET',
            success: function(data) {
                if(system.system){
                    console.log('olá');
                }
                $('.overlay').hide();
            }
        })
    })
</script>
@stop
