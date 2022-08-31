<template>
    <div>
        <v-navigation-drawer
            app
            v-model="drawer"
        >
        <v-list-item>
            <v-list-item-content>
            <v-list-item-title class="text-h6">
                {{username}}
            </v-list-item-title>
            <v-card-actions>
                <v-btn 
                    block
                    depressed
                    @click="profileMore = !profileMore"
                >
                    <v-list-item-subtitle>
                        Logged In
                    </v-list-item-subtitle>
                    <v-spacer></v-spacer>
                    <v-icon>
                        {{profileMore ? 'mdi-chevron-up' : 'mdi-chevron-down'}}
                    </v-icon>
                </v-btn>
                </v-card-actions>
                <v-expand-transition>
                    <div v-show="profileMore">
                        <v-divider></v-divider>
                        <v-btn @click="logout()" text>Logout</v-btn>
                    </div>
                </v-expand-transition>
            </v-list-item-content>
        </v-list-item>

        <v-divider></v-divider>
        <v-list
            nav
            dense
        >
            <v-list-item-group
            v-model="group"
            >
            <v-list-item
                v-for="item in items"
                :key="item.title"
                link
                :to="item.path"
            >
            <v-list-item-icon>
                <v-icon>{{item.icon}}</v-icon>
            </v-list-item-icon>
            <v-list-item-content>
                <v-list-item-title>
                    {{item.title}}
                </v-list-item-title>
            </v-list-item-content>
            </v-list-item>
            </v-list-item-group>
        </v-list>

        <template v-slot:append>
            
        </template>
        </v-navigation-drawer>

        <v-app-bar 
            app
            elevate-on-scroll
            color="#14213D"
            dark
            shrink-on-scroll
            prominent
            src="https://picsum.photos/1920/1080?random"
            fade-img-on-scroll
        >
            <template v-slot:img="{ props }">
                <v-img
                    v-bind="props"
                    gradient="to top right, rgba(100,115,201,.7), rgba(25,32,72,.7)"
                ></v-img>
            </template>
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

            <v-toolbar-title>
                {{username}}
            </v-toolbar-title>
        </v-app-bar>
    </div>
</template>

<script>
export default {
    data: function () {
      return {
        profileMore: false,
        drawer: null,
        group: null,
        username: '',
        items: [
            {
                title: 'Dashboard',
                icon: 'mdi-view-dashboard', 
                path: '/student/dashboard',
            },
        ]
      }
    },

    created() {
        this.getData();
    },

    methods: {
        getData() {
            this.axios.get('/student/api/data').then(response => {
                this.username = response.data.fullname
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