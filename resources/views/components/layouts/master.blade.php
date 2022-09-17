 
<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>Laradoo - {{ $title }}</title>
   <link rel="shortcut icon" href="https://img.utdstc.com/icon/b91/094/b910942e0f76facc665995a68f2c2d9922cda4405b35b24a2fda20bbd1945882:200" sizes="20x20"  type="image/gif">
<!-- Main Stylesheet -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="global_assets/js/main/jquery.min.js"></script>
    <script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
    <script src="global_assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /core JS files -->



    <!-- Theme JS files -->
    <script src="global_assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="global_assets/js/plugins/pickers/daterangepicker.js"></script>

    <script src="assets/js/app.js"></script>
    <script src="global_assets/js/demo_pages/dashboard.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/sparklines.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/lines.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/areas.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/donuts.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/bars.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/progress.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/pies.js"></script>
    <script src="global_assets/js/demo_charts/pages/dashboard/light/bullets.js"></script>
    <script src="global_assets/js/plugins/ui/fullcalendar/core/main.min.js"></script>
    <script src="global_assets/js/plugins/ui/fullcalendar/daygrid/main.min.js"></script>
    <script src="global_assets/js/plugins/ui/fullcalendar/timegrid/main.min.js"></script>
    <script src="global_assets/js/plugins/ui/fullcalendar/list/main.min.js"></script>
    <script src="global_assets/js/plugins/ui/fullcalendar/interaction/main.min.js"></script>
    <script src="global_assets/js/demo_pages/fullcalendar_basic.js"></script>

    <script src="global_assets/js/plugins/visualization/echarts/echarts.min.js"></script>
    <script src="global_assets/js/demo_charts/echarts/light/bars/columns_basic.js"></script>
    <script src="global_assets/js/demo_charts/echarts/light/bars/columns_stacked.js"></script>
    <script src="global_assets/js/demo_charts/echarts/light/bars/columns_thermometer.js"></script>
    <script src="global_assets/js/demo_charts/echarts/light/bars/columns_stacked_clustered.js"></script>
    <script src="global_assets/js/demo_charts/echarts/light/bars/waterfall_compositive.js"></script>
    <script src="global_assets/js/demo_charts/echarts/light/bars/waterfall_change.js"></script>
    <script src="global_assets/js/demo_charts/echarts/light/bars/columns_timeline.js"></script>
    <!-- /theme JS files -->
 
</head>
<body>
 
<x-layouts.partials.topbar />

{{-- + --}}
{{$slot}}

 {{-- Java script --}}
 <script src="{{asset('assets/select2.js')}}"></script>
        <script src="{{asset('assets/select2.min.js')}}"></script>
        <script src="{{asset('assets/dragula.min.js')}}"></script>
        <script src="{{asset('assets/uniform.min.js')}}"></script>
        <script src="{{asset('assets/extension_dnd.js')}}"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 
</body>
</html>
