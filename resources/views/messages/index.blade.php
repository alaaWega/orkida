@extends('admin_layouts.inc')
@section('title','الرسايل')
@section('breadcrumb','الرسايل')
@section('styles')
@endsection
@section('content')
<!-- Main content -->
<div class="row">
  <div class="col-md-12">
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class="portlet light bordered">
      <div class="portlet-title">
        <div class="caption font-green-haze">
          <i class="icon-settings font-green-haze"></i>
          <span class="caption-subject bold uppercase">الرسايل</span>
        </div>
        <div class="tools"> </div>
      </div>
      <div class="portlet-body">
              <table class="table table-striped table-bordered table-hover" id="messages">
                <thead>
                  <th class="col-md-1">id</th>
                  <th class="col-md-5">الرساله</th>
                  <th class="col-md-2">نعم أم لا</th>
                </thead>
                <tbody>
                  @foreach ($tableData->getData()->data as $row)
                  <tr>
                    <td>{{  $row->id }}</td>
                    <td>{!!  $row->message !!}</td>
                    <td>{{  $row->is_benefit }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- END EXAMPLE TABLE PORTLET-->
        </div>
      </div>

        @endsection

      @section('scripts')
      <script type="text/javascript">
       $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        oTable = $('#messages').DataTable({
          "processing": true,
          "serverSide": true,
          "responsive": true,
          'paging'      : true,
          "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Arabic.json"
          },
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false,
          "ajax": {{ $tableData->getData()->recordsFiltered }},
          "columns": [
          {data: 'id', name: 'id'},
          {data: 'message', name: 'message'},
          {data: 'is_benefit', name: 'is_benefit'}
          ],
          order: [ [0, 'desc'] ]
        })
      });
    </script>
    @endsection
