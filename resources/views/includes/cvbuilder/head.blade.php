<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <title>cvmama | cv builder</title>

     <link rel="stylesheet" href="{{secure_asset('css/style.css')}}" />
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}

    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Josefin+Sans|Sarala" rel="stylesheet">


    <!-- Vue Js  -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script> --}}

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="stylesheet" href="{{secure_asset('css/custom.css')}}" />
    {{-- <script src="{{ mix('/js/app.js') }}"></script> --}}
    {{-- <script src="{{ asset('/js/app.js') }}"><script> --}}

    <!-- html to pdf cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>

    <!-- files required by star rating -->
    <!-- <link rel="stylesheet" href="css/style.css" > -->

    <style>
        h4 {
            color: #03a9f4;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        /*Star rating csss*/
        .star-rating,.star-rating2,.star-rating3 {
            line-height:32px;
            font-size:1.25em;
        }
        .star-rating .fa-star{color: rgb(7, 7, 7);}
        /*footer*/
        .footer{
            padding:2%;
            background-color: #222;
        }

    </style>
</head>
