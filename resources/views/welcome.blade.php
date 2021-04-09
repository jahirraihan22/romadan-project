<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>আহলান ওয়া সাহলান রমাদ্বান </title>

        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div id="app">
            <v-app>
                <app-home></app-home>
            </v-app>
        </div>

        <script src="{{mix('js/app.js')}}"></script>
        <script src="https://unpkg.com/vue/dist/vue.js"></script>
        <script src="https://unpkg.com/vuetify/dist/vuetify.js"></script>
    </body>
</html>