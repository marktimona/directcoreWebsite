@extends('layouts.master')

@section('content')
<!--==========================
    Intro Section
  ============================-->
@include('layouts.sections.carousel')
<!--==========================
Services Section
============================-->
@include('layouts.sections.services')
<!-- #services -->

<!--==========================
About Section
============================-->
@include('layouts.sections.about')
<!-- #about -->



<!--==========================
Clients Section
============================-->
@include('layouts.sections.partners')
<!-- #clients -->

<!--==========================
Our Portfolio Section
============================-->



<!--==========================
Call To Action Section
============================-->
@include('layouts.sections.call-action')
<!-- #call-to-action -->


@stop
