<!DOCTYPE html>

<html lang="es" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>
            UGEL03 | POI
        </title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--begin::Web font -->
    {{--<script src="https://cdn.bootcss.com/webfont/1.6.16/webfontloader.js"></script> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.16/webfontloader.js"></script> --}}
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.16/webfontloader.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!--end::Web font -->
        <!--begin::Base Styles -->  
        <!--begin::Page Vendors -->
        {{-- <link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" /> --}}
        <!--end::Page Vendors -->
        <link href="{{ url('assets/vendors/base/')}}/vendors.bundle.css"  rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/demo/demo5/base/')}}/style.bundle.css"  rel="stylesheet" type="text/css" />    
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="{{ url('assets/demo/demo5/media/img/logo/')}}/presupuesto.ico"  />

        {{-- inicio css sangrid borrar --}}

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/free-jqgrid/4.8.0/css/ui.jqgrid.css">
  <link rel="stylesheet" href="{{ asset('sangrid/css/jquery-ui-1.10.4.custom.min.css') }}">
  <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('sangrid/css/cupertino/jquery-ui-1.10.4.custom.min.css') }}"/>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        {{-- fin css sangrid borrar --}}    


         <!-- Scripts -->
       {{--  @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <!-- Alpine.js -->



        <!-- Bootstrap CSS nrmz -->
        {{-- <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
           
        <!-- Bootstrap Bundle with Popper nrmz -->
        <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        Optional theme
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> --}}



        {{-- inicio para desarrollar jqForm  jqGrid--}}

   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/free-jqgrid/4.15.5/css/ui.jqgrid.min.css">
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}
    
     <script src="{{ url('assets/vendors/base/')}}/vendors.bundle.js"  type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/free-jqgrid/4.15.5/jquery.jqgrid.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/free-jqgrid/4.15.5/i18n/min/grid.locale-es.js"></script>


    <script>
    //<![CDATA[
    /*$(function () {
        "use strict";
        $("#jqGrid1").jqGrid({
            colModel: [
                { name: "firstName" },
                { name: "lastName" , edittype:'select', 
                 formatter:'showlink', 
                 formatoptions:{baseLinkUrl:'someurl.php', addParam: '&action=edit' } },
                {name:'myname', 
                 edittype:'select', 
                 formatter:'showlink', 
                 formatoptions:{baseLinkUrl:'someurl.php', addParam: '&action=edit'}}
            ],
            data: [
                { id: 10, firstName: "Angela", lastName: "Merkel" },
                { id: 20, firstName: "Vladimir", lastName: "Putin"},
                { id: 30, firstName: "David", lastName: "Cameron" },
                { id: 40, firstName: "Barack", lastName: "Obama"},
                { id: 50, firstName: "François", lastName: "Hollande" }
            ]
        });
    });*/
    //]]>

    /*$(document).ready(function(){


      jQuery("#simpletable").jqGrid({
       datatype: "local",
       colNames:['A','B','Status'],
       colModel:[
       {name:'A',index:'A'},
       {name:'B',index:'B'},
       {name:'status',index:status}
       ],
       data:[ 
       {'A':2,'B':100,'status':"In"},
       {'A':1,'B':200,'status':"Out"}
       ],

       onCellSelect:function(rowid,icol,cellcontent,e){
            if (icol==2){

                alert('My value in column A is: '+$("#simpletable").getRowData(rowid)['A']);
            }else{
                return true;
            }
        },

        caption: "Demo of Custom Clickable Button in Row, ver 2",
        viewrecords:true,
      });  //end simpletablev2
    });*/
    </script>


     <script type="text/javascript"> 
        /*$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });*/

        //var csrfHeader=""; //Your CSRF header here
        /*var csrfHeader=$('meta[name="csrfToken"]').attr('content');
        $.ajaxSetup({
            headers : {
                'X-CSRF-Token' : csrfHeader
            }
        });*/

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

       /* $(function () {
  $( "#dialog" ).dialog({
    autoOpen: false
  });
  
  $("#opener").click(function() {
    $("#dialog").dialog('open');
  });
});*/



   </script>

   
{{--     <script type="text/ecmascript" src="assets/jqGrid470/jquery.js"></script> 
   
    <script type="text/ecmascript" src="assets/jqGrid470/js/i18n/grid.locale-en.js"></script>
   
    <script type="text/ecmascript" src="assets/jqGrid470/js/jquery.jqGrid.js"></script>
   
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">    
    <link rel="stylesheet" type="text/css" media="screen" href="assets/jqGrid470/css/ui.jqgrid-bootstrap.css" /> 
   

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
 --}}




    {{-- fin para desarrollar jqForm --}}


{{--inicio style sangrid --}}
    <style>
        .highlight {
        /* background-color: #EEF43B; */
        background-color: #00BFFF;
        }

        .ui-tabs-anchor {
            font-size: 13.5px;
        }

        .judul {
            display: block;
            font-size: 1.5em;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }

        .ui-jqgrid-btable.ui-common-table {
            font-size: 13px;
            text-transform: uppercase;
            /*font-style: italic;*/
        }

        tr {
            font-size: 12px;
        }

        #gs_nama {
            height: 26px;
            font-size: 12px;
            width: 95%;
            border-radius: 0;
            /*font-weight: unset;*/
            font-style: unset;
        }

        /* ini buat atur size  kotak search */
        #gs_tanggal {
            height: 26px;
            font-size: 12px;
            width: 95%;
            border-radius: 0;
            /*font-weight: unset;*/
            font-style: unset;
        }

        #gs_clientID {
            height: 26px;
            font-size: 12px;
            width: 95%;
            border-radius: 0;
            font-style: none;
        }

        table.ui-pg-table.navtable.ui-common-table {
            margin-right: 480px;
        }

        .ui-tabs-anchor {
            font-size: 13.5px;
        }

        span.ui-button-icon-primary.ui-icon.ui-icon-closethick {
            margin-top: 10px;
        }

        .ui-button-icon-space #text {
            display: none;
        }

        button .ui-button .ui-corner-all .ui-widget .ui-button-icon-only .ui-dialog-titlebar-close {
            text-decoration: none;
            display: none;
            margin-left: 10px;
        }

        #resetdatafilter.active {
            background-color: #d44d24;
            color: #080808;
        }

        #resetdatafilter:hover {
            background-color: #34d4f7;
            color: #ffffff;
            border: 1px solid #000000;
        }

        td.ui-search-clear {
            width: 25px;
        }

        td.ui-pg-button.ui-corner-all:hover {
            border-radius: 0;
        }

        #tabs {
            border-radius: 0;
        }

        .ui-jqgrid.ui-widget.ui-widget-content.ui-corner-all {
            border-radius: 0;
        }

        #plist48 {
            border-radius: 0;
        }

        .ui-tabs-nav.ui-corner-all.ui-helper-reset.ui-helper-clearfix.ui-widget-header {
            border-radius: 0;
        }
        @-moz-document url-prefix() {
            #gs_name {
                font-weight: unset;
            }

            #gs_client_id {
                font-weight: unset;
            }

            .ui-jqgrid tr.jqgrow td {
                height: 25px;
            }
        }
    </style>
    {{--fin style sangrid --}}

    

    </head>


   

            
            @include('layouts.navigation')


            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            <main>
                {{-- <?php print_r(url('user/profile')); ?> --}}
                {{ $slot }}
            </main>
        </div>






<!-- begin::Footer -->
            <footer class="m-grid__item m-footer ">
                <div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
                    <div class="m-footer__wrapper">
                        <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                            <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                                <span class="m-footer__copyright">
                                    2023 &copy; UGEL 03 make by nrmz
                                    <!-- <a href="#" class="m-link">
                                        Keenthemes
                                    </a> -->
                                </span>
                            </div>
                           {{--  <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                                <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                                    <li class="m-nav__item">
                                        <a href="#" class="m-nav__link">
                                            <span class="m-nav__link-text">
                                                About
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="#"  class="m-nav__link">
                                            <span class="m-nav__link-text">
                                                Privacy
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="#" class="m-nav__link">
                                            <span class="m-nav__link-text">
                                                T&C
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="#" class="m-nav__link">
                                            <span class="m-nav__link-text">
                                                Purchase
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-nav__item m-nav__item--last">
                                        <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
                                            <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </footer>
            
            <!-- end::Footer -->
        </div>
        

    <!-- end:: Page -->
    <!-- begin::Quick Sidebar -->
        

        <!-- end::Quick Sidebar -->         
        <!-- begin::Scroll Top -->
    
        <!-- end::Scroll Top -->            <!-- begin::Quick Nav -->

        <!-- begin::Quick Nav -->   
        <!--begin::Base Scripts -->




       
        <script src="{{ url('assets/demo/demo5/base/')}}/scripts.bundle.js" type="text/javascript"></script>

        {{--  <script src="sangrid/js/530/js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="sangrid/js/jquery.inputmask.bundle.js" type="text/javascript"></script> --}}


         {{-- <script src="{{ asset('sangrid/js/jquery.min.js') }}" type="text/ecmascript"></script> --}}
       {{--  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
        {{-- <script src="{{ url('sangrid/js/i18n/grid.locale-en.js') }}" type="text/ecmascript"></script> --}}
{{--         <script src="{{ asset('sangrid/js/530/js/trirand/jquery.jqGrid.min.js') }}" type="text/ecmascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script> --}}
       {{--  <script src="{{ asset('sangrid/js/jquery.inputmask.bundle.js') }}"></script>
        <script src="{{ asset('sangrid/js/autoNumeric.js') }}"></script>
        <script src="{{ asset('sangrid/js/highlight.js') }}"></script> --}}

       {{--  <script src="{{ asset('sangrid/js/script.js') }}"></script> --}}


{{-- <script src="https://code.jquery.com/jquery-3.6.4.js" type="text/javascript"></script> --}}


        <!--end::Base Scripts -->   
        <!--begin::Page Vendors -->
      {{--   <script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script> --}}
        <!--end::Page Vendors -->  
        <!--begin::Page Snippets -->
 {{--        <script src="assets/app/js/dashboard.js" type="text/javascript"></script> --}}
        <!--end::Page Snippets -->


        {{-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>  --}}
<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script> {{-- este es de sangrid  redmond  1.11.1 ->smoothness ui-lightness trontastic sunny humanity--}}
 {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/themes/redmond/jquery-ui.min.css"> --}} {{-- no sale con este la ventana emergente --}}
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/redmond/jquery-ui.css" /> 

<button id="opener">Derechos reservados UGEL03</button>


    </body>
    <!-- end::Body -->
</html>
