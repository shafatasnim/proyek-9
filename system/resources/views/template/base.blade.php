<html lang="en">

<head>
  <title>Hello, world!</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="{{url('public')}}/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link rel="stylesheet" href="{{url('public')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('public')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  @stack('style')
  
</head>

<body>
  <div class="wrapper ">
    
      @include('template.section.sidebar')


    </div>
    <div class="main-panel">
      
       @include('template.section.header')

      <div class="content">
        <div class="container-fluid">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                @include('template.utils.notif')
              </div>
            </div>
          </div>
          @yield('content')
          
        </div>
      </div>
      
      @include('template.section.footer')

    </div>
  </div>


<script type="text/javascript" src="{{url('public')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{url('public')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="{{url('public')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>

<script type="text/javascript" src="{{url('public')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
@stack('script')
<script>
  $(".table-datatable").DataTable();
</script>

</body>

</html>