<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
     @include('layout.partials.meta.meta')
     @include('layout.partials.styles.style')
     @include('layout.partials.meta2.meta2')
</head>
<body>
     <div class="main">
               @include('layout.partials.header.responsive_header')
          <div class="mainAndNav">
                    @include('layout.partials.header.header')
                    <main>
                         @yield('contenu')
                    </main>
                    @include('layout.partials.footer.footer')
          </div>
     </div>
          @include('layout.partials.scripts.script')
</body>
</html>
