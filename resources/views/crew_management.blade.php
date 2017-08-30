@extends('layouts.master')

@section('links')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
@endsection


@section('title', 'Crew Managment')


@section('name')
   Hello, {{ Auth::user()->name }}
@endsection

@section('content')
 <section class="panel">
      <header class="panel-heading tab-bg-primary ">
          <ul class="nav nav-tabs">
           <li class="active">
                  <a data-toggle="tab" href="#home">Crew Table</a>
              </li>
           <li class="">
                  <a data-toggle="tab" href="#add">Add Crew</a>
              </li>
              
              
           </ul>
      </header>
      <div class="panel-body">
          <div class="tab-content">
              
              
              <div id="home" class="tab-pane active">
                  @include('content.crew_table')
              </div>
              <div id="add" class="tab-pane ">
                @include('content.add_crew')
              </div>
          </div>
      </div>
  </section>

@endsection





@section('script')
<script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
<!--<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>-->


<script type="text/javascript">
    $(document).ready(function(){
        $('#table_id').DataTable();
    });
    
</script>

@endsection



   