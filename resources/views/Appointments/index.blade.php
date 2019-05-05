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
            <app-appointments></app-appointments>
        </v-content>

        <app-footer></app-footer>
    </v-app>

    @include("_partials.js")

    <!-- Main -->
    <script src="{{asset('/js/appointments-app.js')}}"></script>

</body>

</html>
