<template>
    <div>
        <v-navigation-drawer
            app
            v-model="drawer"
        >
        <v-list-item>
            <v-list-item-content>
            <v-list-item-title class="text-h6">
                {{studentName}}
            </v-list-item-title>
            <v-list-item-subtitle>
                Logged In
            </v-list-item-subtitle>
            </v-list-item-content>
        </v-list-item>

        <v-divider></v-divider>
        <v-list
            nav
            dense
        >
            <v-list-item-group
            v-model="group"
            active-class="deep-purple--text text--accent-4"
            >
            <v-list-item>
                <v-list-item-title>Foo</v-list-item-title>
            </v-list-item>

            <v-list-item>
                <v-list-item-title>Bar</v-list-item-title>
            </v-list-item>

            <v-list-item>
                <v-list-item-title>Fizz</v-list-item-title>
            </v-list-item>

            <v-list-item>
                <v-list-item-title>Buzz</v-list-item-title>
            </v-list-item>
            </v-list-item-group>
        </v-list>

        <template v-slot:append>
            <div class="pa-2">
                <v-btn block @click="logout">
                    Logout
                </v-btn>
            </div>
        </template>
        </v-navigation-drawer>

        <v-app-bar app>
        <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

        <v-toolbar-title></v-toolbar-title>
        </v-app-bar>
    </div>
</template>

<script>
export default {
    data: function () {
      return {
        drawer: null,
        group: null,
        studentName: '',
      }
    },

    created() {
        this.getData();
    },

    methods: {
        getData() {
            this.axios.get('/student/api/data').then(response => {
                this.studentName = response.data.fullname
            })
        },

        logout() {
            this.axios.get('/student/api/logout').then(() => {
                location.reload();
            });
        }
    },
}
</script>