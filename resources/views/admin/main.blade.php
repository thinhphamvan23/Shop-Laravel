
<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.head')

</head>

<body>

    @include('admin.sidebar')


        @yield('content')
  
  @include('admin.footer')
</body>
@if(Session::has('message'))
 
<script>

      toastr.success("{{ Session::get('message') }}",'success',{timeOut: 5000});

</script>
@endif

</html>