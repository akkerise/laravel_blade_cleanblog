<!DOCTYPE html>
<html>
	@include('include.head')
	@include('include.nav')
	@yield('header')
	@yield('content')
	@yield('article')
	@include('include.footer')
	@include('include.script')
</html>