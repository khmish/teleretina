<!DOCTYPE html>
<html lang="en">

<head>
    @include("_partials.css")

    <title> TeleRetina </title>
</head>

<body>
    <v-app id="app" v-cloak>
        <app-toolbar></app-toolbar>

        <v-content>
            <app-patient-med-info></app-patient-med-info>
        </v-content>

        <app-footer></app-footer>
    </v-app>

    @include("_partials.js")

    <!-- Main -->
    <script src="{{asset('/js/patient-med-info-app.js')}}"></script>

</body>

</html>
