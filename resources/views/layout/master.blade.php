<!DOCTYPE html>
<html lang="en">


<head>
    @include('partials.script')
    @include('partials.style')

   
</head>

<body>
  <div class="wrapper">

          @include('partials.navi')
          @yield('content')
          @include('partials.footer')
         

   </div>
 </body>
 </html>
    
    
    
