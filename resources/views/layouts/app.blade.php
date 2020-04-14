<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>{{ config('app.name', 'Laravel') }}</title>

  {{-- Estilo general del sitio --}}
  @include('assets/styles')
  {{-- Estilo propio de cada sección --}}
  @yield('style')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @include('layouts/section/topbar')
    @include('layouts/section/sidebar')
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

    @include('layouts/section/footer')  
</div>
<!-- ./wrapper -->


{{-- Scripts comunes del sitio--}}
@include('assets/scripts')

{{-- Script propio de cada seccion --}}
@yield('section-scripts')
{{-- Para pasar los token en cada request ajax --}}
{{--
<script type="text/javascript">
$.ajaxSetup({
   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});
</script>
--}}


</body>
</html>
