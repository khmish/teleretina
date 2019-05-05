<!DOCTYPE html>
<html lang="en">

<head>
    @include("_partials.css")

    <title> TeleRetina </title>
</head>

<body>
    <v-app id="app" v-cloak>
        <v-content>
            <v-container grid-list-xs>
                <v-card>
                    <v-card-title primary-title>
                        <div>
                            <h3 class="headline mb-0">Pages</h3>
                        </div>
                    </v-card-title>
                    <v-card-text>
                        <ul>
                            <li v-for="item in items" :key="item.title">
                                <a :href="item.link" target="_blank" rel="noopener noreferrer">@{{ item.title }}</a>
                            </li>
                        </ul>
                    </v-card-text>
                </v-card>
            </v-container>
        </v-content>
    </v-app>

    @include("_partials.js")

    <!-- Main -->
    <script src="{{asset('/js/pages-app.js')}}"></script>

</body>

</html>
